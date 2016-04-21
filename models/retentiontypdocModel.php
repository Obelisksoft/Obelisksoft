<?php
class retentiontypdocModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

     public function insertRetTypDoc($id_retention,$id_typedoc){
    	$this->_db->prepare("INSERT INTO my_retentiontypdoc VALUES (:id_retention, :id_typedoc)")
                ->execute(
                        array(
                           ':id_retention' => $id_retention,
                           ':id_typedoc' => $id_typedoc
                        ));
    } 

    public function getSubTypeDoc($id_retention)
    {
    	$id_retention = (int) $id_retention;
        $retentiontype = $this->_db->query("select r.id_retention,d.documenttype,d.id_typedoc from my_retentiontypdoc r, my_documenttypes d  where r.id_retention=$id_retention and d.id_typedoc = r.id_typedoc");
        return $retentiontype->fetchall();
    }

    public function getTypesDoc($id_retention){
    	$id_retention = (int) $id_retention;
        $retentiontype = $this->_db->query("select d.id_typedoc,documenttype,id_retention from my_documenttypes d LEFT OUTER JOIN my_retentiontypdoc r ON (r.id_typedoc = d.id_typedoc and r.id_retention=$id_retention) where id_status = 1");
        return $retentiontype->fetchall();
    }

    public function deleteRetentionTypeDoc($id_retention){
    	$id_retention = (int) $id_retention;
        $this->_db->query("DELETE FROM my_retentiontypdoc WHERE id_retention = $id_retention");
    }
}
?>