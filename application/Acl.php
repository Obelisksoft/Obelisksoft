<?php

class ACL
{
    private $_db;
    private $_id;
    private $_rol;
    private $_permisos;
    
    public function __construct($id = false)
    {
        if($id){
            $this->_id = (int) $id;
        }
        else{
            if(Session::get('id_user')){
                $this->_id = Session::get('id_user');
            }
            else{
                $this->_id = 0;
            }
        }
        
        $this->_db = new Database();
        $this->_rol = $this->getRole();
        $this->_permisos = $this->getPermisosRole();
        $this->compilarAcl();
    }
    
    
    public function compilarAcl()
    {
        $this->_permisos = array_merge(
                $this->_permisos,
                $this->getPermisosUsuario()
                );
    }
    
    public function getRole()
    {
        $role = $this->_db->query(
                "select id_rol from my_users " .
                "where id_user = {$this->_id}"
                );
                
        $role = $role->fetch();
        return $role['id_rol'];
    }
    
    public function getPermisosRoleId()
    {
        $ids = $this->_db->query(
                "select id_permission from my_permissionrole " .
                "where id_rol = '{$this->_rol}'"
                );
                
        $ids = $ids->fetchAll(PDO::FETCH_ASSOC);
        
        $id = array();

        for($i = 0; $i < count($ids); $i++){
            $id[] = $ids[$i]['id_permission'];
        }
        
        return $id;
    }
    
    public function getPermisosRole()
    {
        $permisos = $this->_db->query(
                "select * from my_permissionrole " .
                "where id_rol = '{$this->_rol}'"
                );
                
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        $data = array();
        
        for($i = 0; $i < count($permisos); $i++){
            $key = $this->getPermisoKey($permisos[$i]['id_permission']);
            if($key == ''){continue;}
            
            if($permisos[$i]['value'] == 1){
                $v = true;
            }
            else{
                $v = false;
            }
            
            $data[$key] = array(
                'key' => $key,
                'permiso' => $this->getPermisoNombre($permisos[$i]['id_permission']),
                'valor' => $v,
                'heredado' => true,
                'id' => $permisos[$i]['id_permission']
            );
        }
        
        return $data;
    }
    
    public function getPermisoKey($permisoID)
    {
        $permisoID = (int) $permisoID;
        
        $key = $this->_db->query(
                "select `key` from my_permissions " .
                "where id_permission = {$permisoID}"
                );
                
        $key = $key->fetch();
        return $key['key'];
    }
    
    public function getPermisoNombre($permisoID)
    {
        $permisoID = (int) $permisoID;
        
        $key = $this->_db->query(
                "select permission from my_permissions " .
                "where id_permission = {$permisoID}"
                );
                
        $key = $key->fetch();
        return $key['permission'];
    }
    
    public function getPermisosUsuario()
    {
        $ids = $this->getPermisosRoleId();
        
        if(count($ids)){
            $permisos = $this->_db->query(
                    "select * from my_permissionuser " .
                    "where id_user = {$this->_id} " .
                    "and id_permission in (" . implode(",", $ids) . ")"
                    );
                    
            $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $permisos = array();
        }
        $data = array();
        
        for($i = 0; $i < count($permisos); $i++){
            $key = $this->getPermisoKey($permisos[$i]['id_permission']);
            if($key == ''){continue;}
            
            if($permisos[$i]['value'] == 1){
                $v = true;
            }
            else{
                $v = false;
            }
            
            $data[$key] = array(
                'key' => $key,
                'permiso' => $this->getPermisoNombre($permisos[$i]['id_permission']),
                'valor' => $v,
                'heredado' => false,
                'id' => $permisos[$i]['id_permission']
            );
        }
        
        return $data;
    }
    
    public function getPermisos()
    {
        if(isset($this->_permisos) && count($this->_permisos))
            return $this->_permisos;
    }
    
    public function permiso($key)
    {
        if(array_key_exists($key, $this->_permisos)){
            if($this->_permisos[$key]['valor'] == true || $this->_permisos[$key]['valor'] == 1){
                return true;
            }
        }
        
        return false;
    }
    
    public function acceso($key)
    {
        if($this->permiso($key)){
            return;
        }
        
        header("location:" . BASE_URL . "error/access/5050");
    }
}