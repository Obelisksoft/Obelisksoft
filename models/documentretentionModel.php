<?php
class documentretentionModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getDocumentRetention($id_hastdocument){

    }

    public function getDocRetetionParent($id_hastdocument){
        $document = $this->_db->query("SELECT ID_HASTDOCUMENT,ID_RETENTIONPARENT,retention FROM MY_DOCUMENTRETENTIONS d, my_retentions r WHERE d.ID_RETENTIONPARENT=r.id_retention and ID_HASTDOCUMENT='$id_hastdocument'");
        return $document->fetchall();
    }

    public function getDocRetetionChill($id_hastdocument){
    	$document = $this->_db->query("SELECT ID_HASTDOCUMENT,ID_RETENTIONCHILL,retention FROM MY_DOCUMENTRETENTIONS d, my_retentions r WHERE d.ID_RETENTIONCHILL=r.id_retention and ID_HASTDOCUMENT='$id_hastdocument'");
        return $document->fetchall();
    }

     public function getDocRetetionType($id_hastdocument){
    	$document = $this->_db->query("SELECT ID_HASTDOCUMENT,ID_DOCTYPE,documenttype FROM MY_DOCUMENTRETENTIONS d, my_documenttypes dt WHERE d.ID_DOCTYPE=dt.id_typedoc and ID_HASTDOCUMENT='$id_hastdocument'");
        return $document->fetchall();
    }

    public function getParent($id_hastdocument){
        $document = $this->_db->query("SELECT ID_HASTDOCUMENT,ID_RETENTIONPARENT,retention FROM MY_DOCUMENTRETENTIONS d, my_retentions r WHERE d.ID_RETENTIONPARENT=r.id_retention and ID_HASTDOCUMENT='$id_hastdocument'");
        return $document->fetchall();
    }

    public function getChill($id_hastdocument,$id_parent){
        $document = $this->_db->query("SELECT ID_HASTDOCUMENT,ID_RETENTIONCHILL,retention FROM MY_DOCUMENTRETENTIONS d, my_retentions r WHERE d.ID_RETENTIONCHILL=r.id_retention and ID_HASTDOCUMENT='$id_hastdocument'");
        return $document->fetchall();
    }

     public function getType($id_hastdocument){
        $document = $this->_db->query("SELECT ID_HASTDOCUMENT,ID_DOCTYPE,documenttype FROM MY_DOCUMENTRETENTIONS d, my_documenttypes dt WHERE d.ID_DOCTYPE=dt.id_typedoc and ID_HASTDOCUMENT='$id_hastdocument'");
        return $document->fetchall();
    }

   
    public function getNemeDocument($id_hastdocument){
        $document = $this->_db->query("SELECT namedocument FROM my_documents WHERE id_hastdocument='$id_hastdocument'");
        return $document->fetchall();
    }


    public function insertDocRetention($id_hastdocument,$id_retentionparent,$id_retentionchill,$id_typedoc){
    	$this->_db->prepare("INSERT INTO MY_DOCUMENTRETENTIONS VALUES (null, :ID_HASTDOCUMENT, :ID_RETENTIONPARENT,:ID_RETENTIONCHILL,:ID_DOCTYPE)")
                ->execute(
                        array(
                           ':ID_HASTDOCUMENT' => $id_hastdocument,
                           ':ID_RETENTIONPARENT' => $id_retentionparent,
                           ':ID_RETENTIONCHILL' => $id_retentionchill,
                           ':ID_DOCTYPE' => $id_typedoc
                        ));
    }
}