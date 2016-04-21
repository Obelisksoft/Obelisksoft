<?php
class userModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsers()
    {
        $user = $this->_db->query(
                "select u.*,r.rol from my_users u, my_roles r ".
                "where u.id_rol = r.id_rol"
                );
        return $user->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUser($id_user)
    {
        $id_user = (int) $id_user;
        $user = $this->_db->query(
                "select u.*,r.rol from my_users u, my_roles r ".
                "where u.id_rol = r.id_rol and id_user = $id_user"
                );
        return $user->fetch();
    }

    public function getPermisosUsuario($id_user)
    {
        $acl = new ACL($id_user);
        return $acl->getPermisos();
    }

    public function getPermisosRole($usuarioID)
    {
        $acl = new ACL($usuarioID);
        return $acl->getPermisosRole();
    }

    public function eliminarPermiso($usuarioID, $permisoID)
    {
        $this->_db->query(
                "delete from permisos_usuario where ".
                "usuario = $usuarioID and permiso = $permisoID"
                );
    }

    public function editarPermiso($usuarioID, $permisoID, $valor)
    {
        $this->_db->query(
                "replace into permisos_usuario set ".
                "usuario = $usuarioID , permiso = $permisoID, valor ='$valor'"
                );
    }

    public function insertUser($firstname, $lastname, $login, $passwd, $email, $id_rol, $id_status)
    {
        $this->_db->prepare("INSERT INTO my_users VALUES (null, :firstname, :lastname, :login, :passwd, :email, :id_rol, :id_status, now(), '1')")
                ->execute(
                        array(
                           ':firstname' => $firstname,
                           ':lastname' => $lastname,
                           ':login' => $login,
                           ':passwd' => Hash::getHash('sha1', $passwd, HASH_KEY),
                           ':email' => $email,
                           ':id_rol' => $id_rol,
                           ':id_status' => $id_status
                        ));
    }
    
    public function editUser($id_user, $firstname, $lastname, $login, $passwd, $email, $id_rol, $id_status)
    {
        $id_user = (int) $id_user;
        
        $this->_db->prepare("UPDATE my_users SET firstname = :firstname, lastname = :lastname, login = :login, passwd = :passwd, email = :email, id_rol = :id_rol, id_status = :id_status WHERE id_user = :id_user")
                ->execute(
                        array(
                           ':id_user' => $id_user,
                           ':firstname' => $firstname,
                           ':lastname' => $lastname,
                           ':login' => $login,
                           ':passwd' => Hash::getHash('sha1', $passwd, HASH_KEY),
                           ':email' => $email,
                           ':id_rol' => $id_rol,
                           ':id_status' => $id_status
                        ));
    }
    
    public function deleteUser($id_user)
    {
        $id_user = (int) $id_user;
        $this->_db->query("DELETE FROM my_users WHERE id_user = $id_user");
    }

     public function verifyuser($login)
    {
        $id = $this->_db->query(
                "select id_user, login from my_users where login = '$login'"
                );
        
        return $id->fetch();
    }

     public function verifyEmail($email)
    {
        $id = $this->_db->query(
                "select id_user from my_users where email = '$email'"
                );
        
        if($id->fetch()){
            return true;
        }
        
        return false;
    }

    public function getUserRol($id_user){
      //select u.id_user,r.rol from my_users u, my_roles r where u.id_rol=r.id_rol and id_user=5
        $id_user = (int) $id_user;
        $user = $this->_db->query("select u.id_user,r.id_rol,r.rol from my_users u, my_roles r where u.id_rol=r.id_rol and id_user=$id_user");
        return $user->fetch();
    }

    public function getUserStatus($id_user){
      //select u.id_user,r.rol from my_users u, my_roles r where u.id_rol=r.id_rol and id_user=5
        $id_user = (int) $id_user;
        $user = $this->_db->query("select u.id_user,s.id_status,s.status from my_users u, my_status s where u.id_status = s.id_status and id_user=$id_user");
        return $user->fetch();
    }

     public function getUserSearch($firstname,$lastname,$email,$date)
    {
        //$id_role = (int) $id_role;
        $user = $this->_db->query("select * from my_users where firstname like '%$firstname%' and lastname like '%$lastname%' and email like '%$email%' and date like '%$date%'");
        return $user->fetchall();
    }

    public function autoUserFirst($firsname)
    {
        $id = $this->_db->query("select firstname from my_users where firstname like '%$firsname%'"); 
        return $id->fetchall();
    }

    public function autoUserLast($lastname)
    {
        $id = $this->_db->query("select lastname from my_users where lastname like '%$lastname%'");    
        return $id->fetchall();
    }

    public function autoUserEmail($email)
    {
        $id = $this->_db->query("select email from my_users where email like '%$email%'");    
        return $id->fetchall();
    }

     public function getLogin($usuario, $password)
    {
        $datos = $this->_db->query(
                "select * from my_users " .
                "where login = '$usuario' " .
                "and passwd = '" . Hash::getHash('sha1', $password, HASH_KEY) ."'"
                );
        
        return $datos->fetch();
    }

}

?>