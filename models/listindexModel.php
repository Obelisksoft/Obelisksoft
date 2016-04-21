<?php
class listindexModel extends Model
{
	public function __construct() {
        parent::__construct();
    }

    public function insertIndex($idindex,$idclave,$idlistindex){
    	 $this->_db->prepare("INSERT INTO MY_LISTINDEXES VALUES (null, :ID_INDEX, :ID_CLAVE, :LISTINDEX, now())")
                ->execute(
                        array(
                           ':ID_INDEX' => $idindex,
                           ':ID_CLAVE' => $idclave,
                           ':LISTINDEX' => $idlistindex
                        ));
    }
}