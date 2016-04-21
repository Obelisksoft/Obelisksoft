<?php
class documenttypeModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getTypesDoc()
    {
        $typedoc = $this->_db->query("select * from my_documenttypes");
        return $typedoc->fetchall();
    }

    public function getTypeDoc($id_typedoc)
    {
        $id_typedoc = (int) $id_typedoc;
        $typedoc = $this->_db->query("select * from my_documenttypes where id_typedoc = $id_typedoc");
        return $typedoc->fetch();
    }

    public function insertDocType($doctype, $description, $id_status)
    {
        $this->_db->prepare("INSERT INTO my_documenttypes VALUES (null, :documenttype, :description, :id_status, now())")
                ->execute(
                        array(
                           ':documenttype' => $doctype,
                           ':description' => $description,
                           ':id_status' => $id_status
                        ));
    }

    public function editDocType($id_typedoc, $documenttype, $description, $id_status)
    {
        $id_typedoc = (int) $id_typedoc;
        
        $this->_db->prepare("UPDATE my_documenttypes SET documenttype = :documenttype, description = :description, id_status = :id_status WHERE id_typedoc = :id_typedoc")
                ->execute(
                        array(
                           ':id_typedoc' => $id_typedoc,
                           ':documenttype' => $documenttype,
                           ':description' => $description,
                           ':id_status' => $id_status
                        ));
    }

    public function getDocTypeStatus($id_typedoc){
     
        $id_typedoc = (int) $id_typedoc;
        $doctype = $this->_db->query("select t.id_typedoc,s.id_status,s.status from my_documenttypes t, my_status s where t.id_status=s.id_status and id_typedoc=$id_typedoc");
        return $doctype->fetch();
    }

    public function deleteTypeDoc($id_typedoc)
    {
        $id_typedoc = (int) $id_typedoc;
        $this->_db->query("DELETE FROM my_documenttypes WHERE id_typedoc = $id_typedoc");
    }

    public function autoTypeDoc($documenttype)
    {
        $id = $this->_db->query("select documenttype from my_documenttypes where documenttype like '%$documenttype%'");        
        return $id->fetchall();
    }

}
?>