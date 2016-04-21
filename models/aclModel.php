<?php

class aclModel extends Model
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function getRole($roleID)
    {
        $role = $this->_db->query("select * from my_roles where id_rol=$roleID");
        return $role->fetch();
    }
    
    public function getRoles()
    {
        $role = $this->_db->query("select * from my_roles");
        return $role->fetchAll();
    }


    public function getPermisosSearch($permission)
    {
        //$id_role = (int) $id_role;
        $roles = $this->_db->query("select *, permission as nombre, id_permission as id from my_permissions where permission like '%$permission%'");
        return $roles->fetchall();
    }
    
    public function getPermisosAll()
    {
        $permisos = $this->_db->query("select * from my_permissions order by id_permission");
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        
        for($i=0;$i<count($permisos);$i++){
            if($permisos[$i]['key']==''){continue;}
            
            $data[$permisos[$i]['key']] = array(
                'key' => $permisos[$i]['key'],
                'valor' => 'x',
                'nombre' => $permisos[$i]['permission'],
                'id' => $permisos[$i]['id_permission']
            );
        }
        
        return $data;
    }
    
    public function getPermisosRole($roleID)
    {
        $data = array();
        
        $permisos = $this->_db->query("select * from my_permissionrole where id_rol = $roleID");
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        
        for($i=0;$i<count($permisos);$i++){
            $key = $this->getPermisoKey($permisos[$i]['id_permission']);
            
            if($key == ''){continue;}
            
            if($permisos[$i]['value'] == 1){
                $v = 1;
            }
            else{
                $v = 0;
            }
            
            $data[$key] = array(
                'key' => $key,
                'valor' => $v,
                'nombre' => $this->getPermisoNombre($permisos[$i]['id_permission']),
                'id' => $permisos[$i]['id_permission']
            );
        }
        
        $data = array_merge($this->getPermisosAll(), $data);
        return $data;
    }
    
    public function eliminarPermisoRole($roleID, $permisoID)
    {
        $this->_db->query("delete from my_permissionrole ".
                "where id_rol = $roleID and id_permission =$permisoID");
    }
    
    public function editarPermisoRole($roleID, $permisoID, $valor)
    {
        $this->_db->query("replace into my_permissionrole ".
                "set id_rol=$roleID, id_permission=$permisoID, value='$valor'");
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
                "SELECT permission FROM my_permissions WHERE id_permission = $permisoID"
                );
        
        $key = $key->fetch();
        return $key['permission'];
    }

    public function insertarRole($role)
    {
        $this->_db->query("INSERT INTO my_roles VALUES(null, '{$role}')");
    }
    
    public function insertarPermiso($permiso, $llave)
    {
        $this->_db->query(
                "INSERT INTO my_permissions VALUES" .
                "(null, '{$permiso}', '{$llave}')"
                );
    }
    
    public function getPermisos()
    {
        $permisos = $this->_db->query("SELECT * FROM my_permissions");
        
        return $permisos->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>