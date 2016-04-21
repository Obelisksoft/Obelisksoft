<?php
class folderModel extends Model
{
	public function __construct() {
        parent::__construct();
    }

    public function getFolders()
    {
        $folder = $this->_db->query("SELECT * FROM MY_FOLDERS");
        return $folder->fetchall();
    }

    public function insertFolder($id_repository,$no_file,$no_folder){
          $this->_db->prepare("INSERT INTO MY_FOLDERS VALUES (null, :ID_REPOSITORY, :NO_FILE, :NO_FOLDER)")
                ->execute(
                        array(
                           ':ID_REPOSITORY' => $id_repository,
                           ':NO_FILE' => $no_file,
                           ':NO_FOLDER' => $no_folder
                        ));    	
    }

    public function getNoFolder(){
        $id_folder = $this->_db->query("SELECT NO_FOLDER FROM MY_FOLDERS");
        return $id_folder->fetch();
    }

    public function maxFiles(){
        $id_folder = $this->_db->query("SELECT max(ID_FOLDER) AS ID FROM MY_FOLDERS");
        return $id_folder->fetchall();
    }

    public function getFolderss($id_folder){
        $id_folder= (int) $id_folder;
        $no_folder = $this->_db->query("SELECT ID_REPOSITORY,NO_FILE,NO_FOLDER FROM MY_FOLDERS WHERE ID_FOLDER=$id_folder");
        return $no_folder->fetchall();
    }

    public function maxFile(){
        $file=$this->_db->query("SELECT ID_FOLDER,NO_FILE FROM MY_FOLDERS WHERE ID_FOLDER=(SELECT MAX(ID_FOLDER) FROM MY_FOLDERS)");
        return $file->fetchall();
    }

    public function getFolder($idfolder){
        $file=$this->_db->query("SELECT ID_FOLDER,NO_FILE,ID_REPOSITORY,NO_FOLDER FROM MY_FOLDERS WHERE ID_FOLDER=$idfolder");
        return $file->fetchall();
    }
}