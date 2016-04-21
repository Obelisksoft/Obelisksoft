<?php
class valorationtypedocindexModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insertRetTypDocIndex($id_typedoc,$id_index){
    	$this->_db->prepare("INSERT INTO my_valorationtypedocindex VALUES (:id_typedoc, :id_index,'1')")
                ->execute(
                        array(
                           ':id_typedoc' => $id_typedoc,
                           ':id_index' => $id_index
                        ));
    } 

    public function getTypesDocindex($id_typedoc){
    	$id_typedoc = (int) $id_typedoc;
        $valorationtypeindex = $this->_db->query("select i.id_index,i.indexes,id_typedoc from my_indexes i LEFT OUTER JOIN my_valorationtypedocindex r ON ( r.id_index=i.id_index and r.id_typedoc = $id_typedoc)where id_status=1");
        return $valorationtypeindex->fetchall();
    }

    public function deleteTypeDocIndex($id_typedoc){
    	$id_typedoc = (int) $id_typedoc;
        $this->_db->query("DELETE FROM my_valorationtypedocindex WHERE id_typedoc = $id_typedoc");
    }    

     public function getSubTypeDocindex($id_typedoc)
    {
    	$id_typedoc = (int) $id_typedoc;
        $typedocindex = $this->_db->query("select r.id_typedoc,i.indexes, i.id_index,i.id_type from my_valorationtypedocindex r, my_indexes i where i.id_index = r.id_index and r.id_typedoc = $id_typedoc");
        return $typedocindex->fetchall();
    }

}
?>