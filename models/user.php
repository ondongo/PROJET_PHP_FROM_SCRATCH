<?php 

namespace App\Models;
use App\Core\Model;
class User extends Model{
    //Attributs 
     protected int   $id;
     protected string $login;
     protected string $password;
     protected static string $role;

    //Methodes
    //Constructeur
    public function __construct()
    {
       parent::table();
    }
    //Getters => Obtenir la valeur d'un attribut private ou protected
                //a partir de l'interface de la classe
    public function getId():int{
       return $this->id;
    }

    //Setters=> Modifie la valeur d'un attribut private ou protected
                //a partir de l'interface de la classe
    public function setId(int $id ):void{
               $this->id=$id;   
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
      * Get the value of role
      */ 
     public function getRole()
     {
          return self::$role;
     }

     /**
      * Set the value of role
      *
      * @return  self
      */ 
     public function setRole($role)
     {
          self::$role;

          return $this;
     }

     public function insert(){
         
          //die(parent::table());
          $sql="INSERT INTO  ".parent::table()."  (`login`, `password`,  `role`)
               VALUES ( ?, ?, ?);";
              
         return parent::database()->executeUpdate($sql,[
                                                  $this->login,$this->password,self::$role]);
          
     }

    
    public  function selectUserByLoginAndPassword(){
     $sql="select * from ".parent::table(). " where login=? and password=?";
     self::database()->setClassName(get_called_class());
     return parent::database()->executeSelect($sql,
                                [$this->login,$this->password],
                                 true) ;}
     
}