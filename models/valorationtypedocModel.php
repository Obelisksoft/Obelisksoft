<?php
class valorationtypedocModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

     public function insertRetTypDoc($id_valoration,$id_typedoc){
    	$this->_db->prepare("INSERT INTO my_valorationtypdoc VALUES (:id_valoration, :id_typedoc)")
                ->execute(
                        array(
                           ':id_valoration' => $id_valoration,
                           ':id_typedoc' => $id_typedoc
                        ));
    } 

    public function getSubTypeDoc($id_valoration)
    {
    	$id_valoration = (int) $id_valoration;
        $valorationtype = $this->_db->query("select r.id_valoration,d.documenttype,d.id_typedoc from my_valorationtypdoc r, my_documenttypes d  where r.id_valoration=$id_valoration and d.id_typedoc = r.id_typedoc");
        return $valorationtype->fetchall();
    }

    public function getTypesDoc($id_valoration){
    	$id_valoration = (int) $id_valoration;
        $valorationtype = $this->_db->query("select d.id_typedoc,documenttype,id_valoration from my_documenttypes d LEFT OUTER JOIN my_valorationtypdoc r ON (r.id_typedoc = d.id_typedoc and r.id_valoration=$id_valoration) where id_status = 1");
        return $valorationtype->fetchall();
    }

    public function deleteValorationTypeDoc($id_valoration){
    	$id_valoration = (int) $id_valoration;
        $this->_db->query("DELETE FROM my_valorationtypdoc WHERE id_valoration = $id_valoration");
    }
}
?>