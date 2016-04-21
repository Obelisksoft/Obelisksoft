<?php
class groupModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getGroup($id_group)
    {
        $id_group = (int) $id_group;
        $group = $this->_db->query("select * from my_groups where id_group = $id_group");
        return $group->fetch();
    }

    public function getGroups()
    {
        $groups = $this->_db->query("select * from my_groups");
        return $groups->fetchall();
    }

    public function getGroupsuser(){
        $groups = $this->_db->query("select my_groups.id_group, `group`, status, count(my_groupuser.id_group) as user, date from my_groups, my_status, my_groupuser where my_status.id_status = my_groups.id_status and my_groupuser.id_group = my_groups.id_group group by my_groupuser.id_group");
        return $groups->fetchall();
    }

     public function getGroupSearch($group)
    {
        //$id_role = (int) $id_role;
        $group = $this->_db->query("select * from my_groups, my_status where `group` like '%$group%' and my_status.id_status = my_groups.id_status");
        return $group->fetchall();
    }

    public function editGroup($id_group, $group, $id_status)
    {
        $id_group = (int) $id_group;
        
        $this->_db->prepare("UPDATE my_groups SET `group`  = :group , id_status = :id_status WHERE id_group = :id_group")
                ->execute(
                        array(
                           ':id_group' => $id_group,
                           ':group' => $group,
                           ':id_status' => $id_status
                        ));
    }

    public function getGroupss(){
    	 $group = $this->_db->query("select id_group, `group`, status, date from my_groups, my_status where my_status.id_status = my_groups.id_status");
        return $group->fetchall();
    }

    public function insertGroup($group,$status)
    {
        $this->_db->prepare("INSERT INTO my_groups VALUES (null, :group,:id_status,now())")
                ->execute(
                        array(
                           ':group' => $group,
                           ':id_status' => $status
                        ));
    }

    public function deleteGroup($id_group)
    {
        $id_group = (int) $id_group;
        $this->_db->query("DELETE FROM my_groups WHERE id_group = $id_group");
    }

    public function autoGroup($group)
    {
        $id = $this->_db->query("select `group` from my_groups where `group` like '%$group%'");        
        return $id->fetchall();
    }

    public function verifyGroup($group)
    {
        $id = $this->_db->query(
                "select id_group, `group` from my_groups where `group` = '$group'"
                );
        
        return $id->fetch();
    }

    public function getGroupStatus($id_group){
      //select u.id_user,r.rol from my_users u, my_roles r where u.id_rol=r.id_rol and id_user=5
        $id_group = (int) $id_group;
        $group = $this->_db->query("select g.id_group,s.id_status,s.status from my_groups g, my_status s where g.id_status = s.id_status and id_group=$id_group");
        return $group->fetch();
    }

}
?>