<?php
class tmpModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function gettmp($id_tmp)
    {
        $tmp = $this->_db->query("select * from my_tmps where uid_path = '$id_tmp'");
        return $tmp->fetchall();
    }

    public function getTmpMax(){
    	$tmp = $this->_db->query("select max(id_tmp) as mayor from my_tmps");
        return $tmp->fetchall();
    }

    public function insertTmp($uid_path,$nametmp,$ruta,$ext){
    	$this->_db->prepare("INSERT INTO my_tmps VALUES (null, :uid_path, :nametmp, :ruta, :ext)")
                ->execute(
                        array(
                           ':uid_path' => $uid_path,
                           ':nametmp' => $nametmp,
                           ':ruta' => $ruta,
                           ':ext' => $ext
                        ));
    }
    
    public function getfolder($id_folder)
    {
     	$tmp = $this->_db->query("select * from my_tmps where uid_path = '$id_folder'");
    	return $tmp->fetchall();
    }
}
?>