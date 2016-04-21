<?php
class retentionModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getParent()
    {
        $trd = $this->_db->query("select * from my_retentions where id_parent=0");
        return $trd->fetchall();
    }

    public function getParentSub($id_retention)
    {
    	$id_retention = (int) $id_retention;
        $trd = $this->_db->query("select * from my_retentions where id_parent=$id_retention");
        return $trd->fetchall();
    }

    public function getRetentions()
    {
        $trd = $this->_db->query("select * from my_retentions");
        return $trd->fetchall();
    }

    public function getRention($id_retention)
    {
        $id_retention = (int) $id_retention;
        $trd = $this->_db->query("select * from my_retentions where id_retention = $id_retention");
        return $trd->fetch();
    }

    public function insertRetention($retention){
    	$this->_db->prepare("INSERT INTO my_retentions VALUES (null, :retention, '0')")
                ->execute(
                        array(
                           ':retention' => $retention
                        ));
    } 

     public function insertRetentionSub($retention,$id_parent){
    	$this->_db->prepare("INSERT INTO my_retentions VALUES (null, :retention, :id_parent)")
                ->execute(
                        array(
                           ':retention' => $retention,
                           ':id_parent' => $id_parent
                        ));
    }   

    public function editseriesubserie($id_retention,$retention){
         $id_retention = (int) $id_retention;        
        $this->_db->prepare("UPDATE my_retentions SET retention = :retention WHERE id_retention = :id_retention")
                ->execute(
                        array(
                           ':id_retention' => $id_retention,
                           ':retention' => $retention
                        ));

    }

    public function chillnodo($id_parent){
        $parent = $this->_db->query("select * from my_retentions where id_parent = $id_parent");
        return $parent->fetchall();
    }

    public function chilltypedoc($id_retention){
        $id_retention = $this->_db->query("select * from my_retentiontypdoc where id_retention = $id_retention");
        return $id_retention->fetchall();
    }

    public function delete($id_retention){
        $id_retention = (int) $id_retention;
        $this->_db->query("DELETE FROM my_retentions WHERE id_retention = $id_retention");
    }
}
?>