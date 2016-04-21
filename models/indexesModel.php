<?php
class indexesModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getIndexess()
    {
        $indexes = $this->_db->query("select * from my_indexes");
        return $indexes->fetchall();
    }

    public function getIndexes($id_index)
    {
        $id_index = (int) $id_index;
        $index = $this->_db->query("select * from my_indexes where id_index = $id_index");
        return $index->fetch();
    }

    public function getIndexesss()
    {
        $indexes = $this->_db->query("select i.id_index,i.indexes,i.description,s.status,i.date,t.type from my_indexes i,my_status s,my_type t where i.id_type=t.id_type and i.id_status=s.id_status");
        return $indexes->fetchall();
    }

     public function insertIndexes($indexes, $description, $id_status, $id_type)
    {
        $this->_db->prepare("INSERT INTO my_indexes VALUES (null, :indexes, :description, :id_status, now(), :id_type)")
                ->execute(
                        array(
                           ':indexes' => $indexes,
                           ':description' => $description,
                           ':id_status' => $id_status,
                           ':id_type' => $id_type
                        ));
    }

    public function editIndexes($id_index, $indexes, $description, $id_status, $id_type)
    {
        $id_index = (int) $id_index;
        
        $this->_db->prepare("UPDATE my_indexes SET indexes = :indexes, description = :description, id_status = :id_status, id_type = :id_type WHERE id_index = :id_index")
                ->execute(
                        array(
                           ':id_index' => $id_index,
                           ':indexes' => $indexes,
                           ':description' => $description,
                           ':id_status' => $id_status,
                           ':id_type' => $id_type
                        ));
    }

    public function getIndexStatus($id_index){
      //select u.id_user,r.rol from my_users u, my_roles r where u.id_rol=r.id_rol and id_user=5
        $id_index = (int) $id_index;
        $indexes = $this->_db->query("select u.id_index,r.id_status,r.status from my_indexes u, my_status r where u.id_status=r.id_status and id_index=$id_index");
        return $indexes->fetch();
    }

    public function getIndexType($id_index){
      //select u.id_user,r.rol from my_users u, my_roles r where u.id_rol=r.id_rol and id_user=5
        $id_index = (int) $id_index;
        $indexes = $this->_db->query("select u.id_index,r.id_type,r.type from my_indexes u, my_type r where u.id_type=r.id_type and id_index=$id_index");
        return $indexes->fetch();
    }

    public function deleteIndexes($id_index)
    {
        $id_index = (int) $id_index;
        $this->_db->query("DELETE FROM my_indexes WHERE id_index = $id_index");
    }

     public function getIndexesSearch($index)
    {
        //$id_role = (int) $id_role;
        $indexes = $this->_db->query("select * from my_indexes where indexes like '%$index%'");
        return $indexes->fetchall();
    }

     public function autoIndexes($index)
    {
        $id = $this->_db->query("select indexes from my_indexes where indexes like '%$index%'");        
        return $id->fetchall();
    }

    public function maxIndex(){
        $indexes = $this->_db->query("select max(id_index) as maximo from my_indexes");
        return $indexes->fetchall();
    }

}
?>