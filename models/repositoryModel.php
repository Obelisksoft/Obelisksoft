<?php
class repositoryModel extends Model
{
	public function __construct() {
        parent::__construct();
    }

  public function getRepositories()
    {
        $repository = $this->_db->query("SELECT * FROM MY_REPOSITORY order by ORDEN");
        return $repository->fetchall();
    }

  public function getRepository($id_repository)
    {
        $id_repository = (int) $id_repository;
        $repository = $this->_db->query("SELECT * FROM MY_REPOSITORY WHERE ID_REPOSITORY = $id_repository");
        return $repository->fetch();
    }

    public function getRepositorySearch($repository)
    {
        //$id_role = (int) $id_role;
        $roles = $this->_db->query("SELECT * FROM MY_REPOSITORY WHERE NAME_REPOSITORY like '%$repository%'");
        return $roles->fetchall();
    }

    public function insertRepository($namerepository,$pathrepository,$userrepository,$passrepository,$description,$orden)
    {
        $this->_db->prepare("INSERT INTO MY_REPOSITORY VALUES (null, :NAME_REPOSITORY, :PATH_REPOSITORY,:USER_REPOSITORY,:PASS_REPOSITORY,:DESCRIPTION,'1',now(),:ORDEN)")
                ->execute(
                        array(
                           ':NAME_REPOSITORY' => $namerepository,
                           ':PATH_REPOSITORY' => $pathrepository,
                           ':USER_REPOSITORY' => $userrepository,
                           ':PASS_REPOSITORY' => $passrepository,
                           ':DESCRIPTION' => $description,
                           ':ORDEN' => $orden
                        ));
    }

     public function verifyRepository($namerepository)
    {
        $id = $this->_db->query("SELECT ID_REPOSITORY, NAME_REPOSITORY from MY_REPOSITORY where NAME_REPOSITORY = '$namerepository'");        
        return $id->fetch();
    }

    public function editRepository($id_repository,$namerepository, $pathrepository, $userrepository, $passrepository, $description)
    {
        $id_repository = (int) $id_repository;
        
        $this->_db->prepare("UPDATE MY_REPOSITORY SET NAME_REPOSITORY = :NAME_REPOSITORY, PATH_REPOSITORY = :PATH_REPOSITORY, USER_REPOSITORY = :USER_REPOSITORY, PASS_REPOSITORY = :PASS_REPOSITORY, DESCRIPTION = :DESCRIPTION WHERE ID_REPOSITORY = :ID_REPOSITORY")
                ->execute(
                        array(
                           ':ID_REPOSITORY' => $id_repository,
                           ':NAME_REPOSITORY' => $namerepository,
                           ':PATH_REPOSITORY' => $pathrepository,
                           ':USER_REPOSITORY' => $userrepository,
                           ':PASS_REPOSITORY' => $passrepository,
                           ':DESCRIPTION' => $description
                        ));
    }

    public function repository()
    {
        $repository = $this->_db->query("SELECT ID_REPOSITORY,NAME_REPOSITORY,PATH_REPOSITORY,USER_REPOSITORY,PASS_REPOSITORY FROM MY_REPOSITORY WHERE ORDEN=1");
        return $repository->fetchall();
    }

    public function deleteRepository($id_repository){
        $id_repository = (int) $id_repository;
        $this->_db->query("DELETE FROM MY_REPOSITORY WHERE ID_REPOSITORY = $id_repository");
    }

    public function updateRepository($id_repository, $order)
    {
        $id_repository = (int) $id_repository;
        
        $this->_db->prepare("UPDATE MY_REPOSITORY SET ORDEN =:ORDEN WHERE ID_REPOSITORY = :ID_REPOSITORY")
                ->execute(
                        array(
                           ':ID_REPOSITORY' => $id_repository,
                           ':ORDEN' => $order
                        ));
    }

    public function maxOrder(){
        $max = $this->_db->query("SELECT max(ORDEN) as orde FROM MY_REPOSITORY");
        return $max->fetch();
    }
} 