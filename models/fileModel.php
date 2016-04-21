<?php
class fileModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insertFile($no_folder, $id_document, $no_file, $orden,$ext){
    	$this->_db->prepare("INSERT INTO my_files VALUES (null, :no_folder, :id_document, :no_file, now(), :orden, :ext)")
                ->execute(
                        array(
                           ':no_folder' => $no_folder,
                           ':id_document' => $id_document,
                           ':no_file' => $no_file,
                           ':orden' => $orden,
                           ':ext' => $ext
                        ));    	
    }

    public function getFiles($id_document){
        $no_files = $this->_db->query("SELECT id_file,no_folder,no_file,orden,ext FROM my_files WHERE id_document='$id_document'");
        return $no_files->fetchall();
    }

    public function getFile($id_document,$orden){
        $no_files = $this->_db->query("SELECT id_file,no_folder,no_file,orden,ext FROM my_files WHERE id_document='$id_document' and orden=$orden");
        return $no_files->fetchall();
    }
}