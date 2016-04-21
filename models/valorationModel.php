<?php
class valorationModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getParent()
    {
        $tvd = $this->_db->query("select * from my_valorations where id_parent=0");
        return $tvd->fetchall();
    }

    public function getParentSub($id_valoration)
    {
        $id_valoration = (int) $id_valoration;
        $tvd = $this->_db->query("select * from my_valorations where id_parent=$id_valoration");
        return $tvd->fetchall();
    }

    public function getValorations()
    {
        $tvd = $this->_db->query("select * from my_valorations");
        return $tvd->fetchall();
    }

    public function getValoration($id_valoration)
    {
        $id_valoration = (int) $id_valoration;
        $tvd = $this->_db->query("select * from my_valorations where id_valoration = $id_valoration");
        return $tvd->fetch();
    }

    public function insertValoration($valoration){
        $this->_db->prepare("INSERT INTO my_valorations VALUES (null, :valoration, '0')")
                ->execute(
                        array(
                           ':valoration' => $valoration
                        ));
    } 

     public function insertValorationSub($valoration,$id_parent){
        $this->_db->prepare("INSERT INTO my_valorations VALUES (null, :valoration, :id_parent)")
                ->execute(
                        array(
                           ':valoration' => $valoration,
                           ':id_parent' => $id_parent
                        ));
    }   

    public function editseriesubserie($id_valoration,$valoration){
         $id_valoration = (int) $id_valoration;        
        $this->_db->prepare("UPDATE my_valorations SET valoration= :valoration WHERE id_valoration = :id_valoration")
                ->execute(
                        array(
                           ':id_valoration' => $id_valoration,
                           ':valoration' => $valoration
                        ));

    }

    public function chillnodo($id_parent){
        $parent = $this->_db->query("select * from my_valorations where id_parent = $id_parent");
        return $parent->fetchall();
    }

    public function chilltypedoc($id_valoration){
        $id_valoration = $this->_db->query("select * from my_valorationtypdoc where id_valoration = $id_valoration");
        return $id_valoration->fetchall();
    }

    public function delete($id_valoration){
        $id_valoration = (int) $id_valoration;
        $this->_db->query("DELETE FROM my_valorations WHERE id_valoration = $id_valoration");
    }
}
?>