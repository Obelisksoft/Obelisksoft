<?php
class rolModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getRoles()
    {
        $role = $this->_db->query("select * from my_roles");
        return $role->fetchall();
    }

    public function getRole($id_role)
    {
        $id_role = (int) $id_role;
        $role = $this->_db->query("select * from my_roles where id_rol = $id_role");
        return $role->fetch();
    }

    public function getRoleSearch($role)
    {
        //$id_role = (int) $id_role;
        $roles = $this->_db->query("select * from my_roles where rol like '%$role%'");
        return $roles->fetchall();
    }

    public function insertRole($role,$description)
    {
        $this->_db->prepare("INSERT INTO my_roles VALUES (null, :rol, :description,'1',now())")
                ->execute(
                        array(
                           ':rol' => $role,
                           ':description' => $description
                        ));
    }

    public function editRole($id_role, $role, $description)
    {
        $id_role = (int) $id_role;
        
        $this->_db->prepare("UPDATE my_roles SET rol = :rol , description = :description WHERE id_rol = :id_rol")
                ->execute(
                        array(
                           ':id_rol' => $id_role,
                           ':rol' => $role,
                           ':description' => $description
                        ));
    }

    public function verifyRole($role)
    {
        $id = $this->_db->query("select id_rol, rol from my_roles where rol = '$role'");        
        return $id->fetch();
    }

    public function deleteRole($id_role)
    {
        $id_role = (int) $id_role;
        $this->_db->query("DELETE FROM my_roles WHERE id_rol = $id_role");
    }

    public function autoRol($role)
    {
        $id = $this->_db->query("select rol from my_roles where rol like '%$role%'");        
        return $id->fetchall();
    }


}
?>