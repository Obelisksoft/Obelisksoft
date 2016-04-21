<?php
class retentiontypedocindexModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insertRetTypDocIndex($id_typedoc,$id_index){
    	$this->_db->prepare("INSERT INTO my_retentiontypedocindex VALUES (:id_typedoc, :id_index,'1')")
                ->execute(
                        array(
                           ':id_typedoc' => $id_typedoc,
                           ':id_index' => $id_index
                        ));
    } 

    public function getTypesDocindex($id_typedoc){
    	$id_typedoc = (int) $id_typedoc;
        $retentiontypeindex = $this->_db->query("select i.id_index,i.indexes,id_typedoc from my_indexes i LEFT OUTER JOIN my_retentiontypedocindex r ON ( r.id_index=i.id_index and r.id_typedoc = $id_typedoc)where id_status=1");
        return $retentiontypeindex->fetchall();
    }

    public function deleteTypeDocIndex($id_typedoc){
    	$id_typedoc = (int) $id_typedoc;
        $this->_db->query("DELETE FROM my_retentiontypedocindex WHERE id_typedoc = $id_typedoc");
    }    

     public function getSubTypeDocindex($id_typedoc)
    {
    	$id_typedoc = (int) $id_typedoc;
        $typedocindex = $this->_db->query("select r.id_typedoc,i.indexes, i.id_index, i.id_type from my_retentiontypedocindex r, my_indexes i where i.id_index = r.id_index and r.id_typedoc = $id_typedoc");
        return $typedocindex->fetchall();
    }

    public function getTypeIndex($id_hastdocumento,$id_typedoc){
        $id_typedoc = (int) $id_typedoc;
        $typedocindex=$this->_db->query("select f.id_index,id_typedoc,indexes,value from my_fileindex f,my_indexes i where id_hastdocumento='$id_hastdocumento' and id_typedoc=$id_typedoc and f.id_index=i.id_index union select i.id_index,r.id_typedoc,indexes,'' as value from my_retentiontypedocindex r,my_documents d, my_indexes i where d.id_typedoc=r.id_typedoc and i.id_index=r.id_index and id_hastdocument='$id_hastdocument' and r.id_index not in (select id_index from my_fileindex where id_hastdocument=d.id_hastdocument) order by indexes");
        return $typedocindex->fetchall();
    }

}
?>