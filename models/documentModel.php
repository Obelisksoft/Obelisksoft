<?php
class documentModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getDocuments()
    {
        $document = $this->_db->query("select * from my_documents where `index` is null");
        return $document->fetchall();
    }

    public function getDocumentHast($id_document)
    {
        $id_document = (int) $id_document;
        $document = $this->_db->query("select * from my_documents where id_hastdocument = $id_document");
        return $document->fetch();
    }

   	public function insertDocument($namedocument, $id_hast, $id_trdtvd, $typedoc, $id_user){
    	$this->_db->prepare("INSERT INTO my_documents VALUES (null, :namedocument, :id_hastdocument, :id_trdtvd, :id_typedoc, :id_user, now(),null)")
                ->execute(
                        array(
                           ':namedocument' => $namedocument,
                           ':id_hastdocument' => $id_hast,
                           ':id_trdtvd' => $id_trdtvd,
                           ':id_typedoc' => $typedoc,
                           ':id_user' => $id_user
                        ));
    }

    public function updateDocument($id_hastdocument){
        $document = $this->_db->query("UPDATE my_documents SET `index`=1 WHERE id_hastdocument='$id_hastdocument'");
        return $document->fetch();
    }

    
}