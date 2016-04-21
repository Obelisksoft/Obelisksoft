<?php
class groupuserModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getGroupuser($id_group){
    	$id_group = (int) $id_group;
        $group = $this->_db->query("select u.id_user,firstname,lastname,id_group from my_users u LEFT OUTER JOIN my_groupuser g ON (u.id_user = g.id_user and g.id_group=$id_group) where id_status = 1");
        return $group->fetchall();
    }

    public function getGroupusers($id_group){
        $id_group = (int) $id_group;
        $group = $this->_db->query("select id_user from my_groupuser where id_group = $id_group");
        return $group->fetchall();
    }

    public function deleteGroupUser($id_group){
    	$id_group = (int) $id_group;
        $this->_db->query("DELETE FROM my_groupuser WHERE id_group = $id_group");
    }

    public function insertGroupUser($id_group,$id_user){
        $this->_db->prepare("INSERT INTO my_groupuser VALUES (:id_group, :id_user)")
                ->execute(
                        array(
                           ':id_group' => $id_group,
                           ':id_user' => $id_user
                        ));
    } 


}