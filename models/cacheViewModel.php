<?php
class cacheViewModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getSearchSerie($idserie){
    	$id_serie = (int) $idserie;
        $search = $this->_db->query("SELECT * FROM `MY_CACHE_VIEW` WHERE ID_SERIE=$id_serie");
        return $search->fetchall();
    }

    public function getSearchSub($idserie,$idsubserie){
    	$id_serie = (int) $idserie;
    	$id_subserie = (int) $idsubserie;
        $search = $this->_db->query("SELECT * FROM `MY_CACHE_VIEW` WHERE ID_SERIE=$id_serie AND ID_SUBSERIE");
        return $search->fetchall();
    }
    

    public function getSearchType($idserie,$idsubserie,$idtype){
    	$id_serie = (int) $idserie;
    	$id_subserie = (int) $idsubserie;
    	$id_type = (int) $idtype;
        $search = $this->_db->query("SELECT * FROM `MY_CACHE_VIEW` WHERE ID_SERIE=$id_serie AND ID_SUBSERIE AND ID_TYPEDOCUMENT=$id_type");
        return $search->fetchall();
    }

    public function getData($query){
        $search = $this->_db->query("SELECT * FROM `MY_CACHE_VIEW` WHERE $query ");
        return $search->fetchall();   
    }
}