<?php
//Classe Concrete lorsqu'elle est instanciable 
//Classe Abstraire lorsqu'elle n'est pas instanciable 
//Classe final => sterile lorsqu'elle 
  //ne participe pas dans hierarchie heritage
//class User implements Imodel
class User{
    protected int $id;
    protected string $login;
    protected string $password;
    protected string $role;
    /*protected static $table="users";

    public function insert()
    {
        $sql="INSERT into {$this->table} (login,password) value({this->login},{this->password})";
    }
    public function update()
    {
        $sql="UPDATE  {$this->table} set login={this->login},password={this->password} where id={this->id}";
    }
    
    public static function selectAll()
    {
        $sql="SELECT * from {self::table}";//from users
    }
    public static function delete(int $id)
    {
        $sql="DELETE from {self::table} where id={$id}";
    }
    public static function selectById(int $id){
        $sql="SELECT * from {self::table} where id={$id}";}*/
    
    //constructeur
    public function __construct()
    {

    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}

?>