<?php
class recordModel extends Model
{
	public function __construct() {
        parent::__construct();
    }

    public function insertRecord($uid_record,$namerecord,$table,$serie,$subserie){
    	$this->_db->prepare("INSERT INTO my_records VALUES (null, :id_hastrecord, :namerecord, :table, :serie, :subserie)")
                ->execute(
                        array(
                           ':id_hastrecord' => $uid_record,
                           ':namerecord' => $namerecord,
                           ':table' => $table,
                           ':serie' => $serie,
                           ':subserie' => $subserie
                        ));
    } 

}