<?php
class fileindexModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insertFileIndex($id_hastdocument, $id_typedoc,$id_index,$id_trdtvd, $value){
    	$this->_db->prepare("INSERT INTO my_fileindex VALUES (null, :id_hastdocument, :id_typedoc, :id_index, :id_trdtvd, :value)")
                ->execute(
                        array(
                           ':id_hastdocument' => $id_hastdocument,
                           ':id_typedoc' => $id_typedoc,
                           ':id_index' => $id_index,
                           ':id_trdtvd' => $id_trdtvd,
                           ':value' => $value
                        ));
    }

    public function getIndex($id_hastdocument){
        $document = $this->_db->query("select f.id_index,indexes,value from my_fileindex f, my_indexes i where f.id_index=i.id_index and id_hastdocumento = '$id_hastdocument'");
        return $document->fetchall();
    }

     public function getIndexDoc($id_hastdocument,$id_typedoc){
        $id_typedoc = (int) $id_typedoc;
        $document = $this->_db->query("select f.id_index,id_typedoc,indexes,value from my_fileindex f,my_indexes i where id_hastdocumento='$id_hastdocumento' and id_typedoc=$id_typedoc and f.id_index=i.id_index union select i.id_index,r.id_typedoc,indexes,'' as value from my_retentiontypedocindex r,my_documents d, my_indexes i where d.id_typedoc=r.id_typedoc and i.id_index=r.id_index and id_hastdocument='$id_hastdocument' and r.id_index not in (select id_index from my_fileindex where id_hastdocument=d.id_hastdocument) order by indexes");
        return $document->fetchall();
    }

}