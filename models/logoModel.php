<?php
class logoModel extends Model
{
	public function insertLogo($nametmp,$ruta,$ext,$act){
    	$this->_db->prepare("INSERT INTO MY_LOGOS VALUES (null, :NAMELOGO, :RUTA, :EXT, :ACTIVE, now())")
                ->execute(
                        array(
                           ':NAMELOGO' => $nametmp,
                           ':RUTA' => $ruta,
                           ':EXT' => $ext,
                           ':ACTIVE' => $act
                        ));
    }

    public function getLogos(){
    	$tmp = $this->_db->query("SELECT * FROM MY_LOGOS");
        return $tmp->fetchall();
    }

    public function getPath($id_logo){
      $tmp = $this->_db->query("SELECT RUTA, NAMELOGO FROM MY_LOGOS WHERE ID_LOGO = $id_logo");
        return $tmp->fetchall();
    }

    public function getLogoA(){
    	$tmp = $this->_db->query("SELECT * FROM MY_LOGOS WHERE ACTIVE=1");
        return $tmp->fetchall();
    }

    public function update(){
      $this->_db->query("UPDATE MY_LOGOS SET ACTIVE=0");
    }

     public function updateLo($id_logo)
    {
        $id_logo = (int) $id_logo;        
        $this->_db->query(
                "UPDATE MY_LOGOS SET ACTIVE =1 WHERE ID_LOGO = $id_logo"
                );
    }

    public function delete($id_logo){
        $id_logo = (int) $id_logo;        
        $this->_db->query(
                "DELETE FROM MY_LOGOS WHERE ID_LOGO = $id_logo"
                );
    }
}