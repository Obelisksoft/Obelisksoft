<?php
class departamentModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

     public function getDepartaments(){
        $departament = $this->_db->query("select * from my_departaments;");
        return $departament->fetchall();
    }

    public function insertDepartament($code,$departament,$description)
    {
        $this->_db->prepare("INSERT INTO my_departaments VALUES (null, :code, :departament, :description,now())")
                ->execute(
                        array(
                           ':code' => $code,
                           ':departament' => $departament,
                           ':description' => $description
                        ));
    }

    public function verifyDepartament($departament)
    {
        $id = $this->_db->query("select id_departament, departament from my_departaments where departament = '$departament'");        
        return $id->fetch();
    }

    public function getDepartamentSearch($departament)
    {
        //$id_role = (int) $id_role;
        $departament = $this->_db->query("select * from my_departaments where departament like '%$departament%'");
        return $departament->fetchall();
    }

    public function getDepartament($id_departament)
    {
        $id_departament = (int) $id_departament;
        $departament = $this->_db->query("select * from my_departaments where id_departament = $id_departament");
        return $departament->fetch();
    }

    public function autoDepartament($departament)
    {
        $id = $this->_db->query("select departament from my_departaments where departament like '%$departament%'");        
        return $id->fetchall();
    }

    public function editDepartament($id_departament, $code, $departament, $description)
    {
        $id_departament = (int) $id_departament;
        
        $this->_db->prepare("UPDATE my_departaments SET code = :code, departament = :departament , description = :description WHERE id_departament = :id_departament")
                ->execute(
                        array(
                           ':id_departament' => $id_departament,
                           ':code' => $code,
                           ':departament' => $departament,
                           ':description' => $description
                        ));
    }

    public function deleteDepartament($id_departament)
    {
        $id_departament = (int) $id_departament;
        $this->_db->query("DELETE FROM my_departaments WHERE id_departament = $id_departament");
    }

    public function insertDeptoUser($id_departament,$id_user){
        $this->_db->prepare("INSERT INTO my_departamentuser VALUES (:id_departament, :id_user,'1')")
                ->execute(
                        array(
                           ':id_departament' => $id_departament,
                           ':id_user' => $id_user
                        ));
    } 

    public function getDeptUser($id_departament){
        $id_departament = (int) $id_departament;
        $departamentuser = $this->_db->query("select u.id_user,u.firstname,id_departament from my_users u LEFT OUTER JOIN my_departamentuser d ON ( d.id_user=u.id_user and d.id_departament = $id_departament)where id_status=1");
        return $departamentuser->fetchall();
    }

    public function deleteDeptoUser($id_departament){
        $id_departament = (int) $id_departament;
        $this->_db->query("DELETE FROM my_departamentuser WHERE id_departament = $id_departament");
    }  

    public function getDepartRetention($id_departament){
        $id_departament = (int) $id_departament;
        $departamentRetention = $this->_db->query("select distinct id_retention, id_deptoretention from my_departamentretention where id_departament = $id_departament");
        return $departamentRetention->fetchall();
    }
}