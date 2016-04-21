<?php
class indexModel extends Model
{
	public function __construct() {
        parent::__construct();
    }

    public function createTable(){
    	$this->_db->query(
                "CREATE TABLE MY_CACHE_VIEW(ID_INDEX INTEGER UNSIGNED AUTO_INCREMENT,ID_HASTDOCUMENT VARCHAR(250),NAME_DOCUMENT VARCHAR(250),TRDTVD INTEGER,ID_SERIE INTEGER,SERIE VARCHAR(250),ID_SUBSERIE INTEGER,SUB_SERIE VARCHAR(250),ID_TYPEDOCUMENT INTEGER,TYPEDOCUMENT VARCHAR(250),SEARCH TEXT,FULLTEXT(SEARCH),PRIMARY KEY (ID_INDEX))"
                );
    }

    public function checkTable($limit){
    	$table = $this->_db->query("SELECT * FROM MY_CACHE_VIEW LIMIT 1");
    	return $table->fetchall();

    }

    public function indices(){
    	$indices=$this->_db->query("SELECT id_index,indexes FROM my_indexes");
    	return $indices->fetchAll(PDO::FETCH_ASSOC);
    }

    public function checkIndex($idindex){
    	$indice=$this->_db->query("SELECT INDEX_$idindex FROM MY_CACHE_VIEW");
    	return $indice;
    }

    public function addIndex($idindex){
    	$this->_db->query(
                "ALTER TABLE MY_CACHE_VIEW ADD INDEX_$idindex TEXT"
                );
    }

    public function insertIndex($id_hastdocument,$name_document,$trdtvd,$id_serie,$serie,$id_subserie,$subserie,$id_typedoc,$typedoc){
    	$this->_db->prepare("INSERT INTO MY_CACHE_VIEW (ID_HASTDOCUMENT,NAME_DOCUMENT,TRDTVD,ID_SERIE,SERIE,ID_SUBSERIE,SUB_SERIE,ID_TYPEDOCUMENT,TYPEDOCUMENT) VALUES (:ID_HASTDOCUMENT, :NAME_DOCUMENT,:TRDTVD,:ID_SERIE,:SERIE,:ID_SUBSERIE,:SUB_SERIE,:ID_TYPEDOCUMENT,:TYPEDOCUMENT)")
                ->execute(
                        array(
                           ':ID_HASTDOCUMENT' => $id_hastdocument,
                           ':NAME_DOCUMENT' => $name_document,
                           ':TRDTVD' => $trdtvd,
                           ':ID_SERIE' => $id_serie,
                           ':SERIE' => $serie,
                           ':ID_SUBSERIE' => $id_subserie,
                           ':SUB_SERIE' => $subserie,
                           ':ID_TYPEDOCUMENT'=>$id_typedoc,
                           ':TYPEDOCUMENT' => $typedoc
                        ));
    }

    public function updateCache($id_hastdocument,$idindex,$value){
    	/*$this->_db->prepare("UPDATE MY_CACHE_VIEW SET INDEX_1 = :value WHERE ID_HASTDOCUMENT = :id_hastdocument")
                ->execute(
                        array(
                        	':ID_HASTDOCUMENT' => $id_hastdocument,
                           ':INDEX_1' => $value
                        ));*/

		$this->_db->query(
                "UPDATE MY_CACHE_VIEW SET INDEX_$idindex = '$value' WHERE ID_HASTDOCUMENT = '$id_hastdocument'"
                );

		
    }

    public function searchIndex($valor){
        $table = $this->_db->query("SELECT ID_HASTDOCUMENT,SEARCH,NAME_DOCUMENT,MATCH(SEARCH,NAME_DOCUMENT) AGAINST ('$valor*' IN BOOLEAN MODE) as score FROM MY_CACHE_VIEW WHERE MATCH(SEARCH,NAME_DOCUMENT) AGAINST ('$valor*' IN BOOLEAN MODE) order by score");
        return $table->fetchall();
    }

    public function updateSearch($id_hastdocument,$valor){
      $this->_db->query(
                "UPDATE MY_CACHE_VIEW SET SEARCH = '$valor' WHERE ID_HASTDOCUMENT = '$id_hastdocument'"
                );
    }



}