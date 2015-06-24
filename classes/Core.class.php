<?php session_start();
    require_once("Database.class.php");
    require_once("User.class.php"); 
    
Class Core
{
    private $_db;

    public function __construct()
    { 
        $this->_db = new Database();
    }

    public function tryAuth($user, $password, $remember = "false")
    { 
        $data = $this->_db->prepare("SELECT * FROM user WHERE login='" . $user . "' AND pwd = '". $password ."' ", true); 
        $data->execute();
        $result = $data->fetchAll();
        if(empty($result)) 
            return false;
        else
        {
             $_SESSION["user"] = $result[0];
             return true;
        }
    }
  

    public function isUserLogged()
    {
        return (isset($_SESSION['user']) && !empty($_SESSION['user']['id']));
    }

    public function redirect($location)
    {
        header("location: " . $location);
    }

    public function disconnect()
    {
        session_destroy();
        $this->_db = null;
    }   
}
    