<?php 
namespace App\Core;

use App\Core\DataBase;

abstract class Model implements IModel{

  protected static DataBase|null $database=null;//l'objet n'est pas encore créé null est un type


    protected static function table(){

        $table = strtolower(str_replace("App\Models\\","",get_called_class()));
    
        //le nom de la table sera le nom de la classe

    $user=array("rp","ac","professeur","etudiant");

    if(in_array($table,$user)){
            return "user";
        }
          return $table;

    }

    public function insert(){
        
    }
    public function update(){

    }
    
    public static function database():DataBase{
        //Singleton=> Gain de Memoire
        if(self::$database==null){
            self::$database=new DataBase;//construction de l'objet
        }
        return self::$database;
        
    }
    public static function delete(int $id){
             $sql="delete  from ".self::table()." where id=?";
             self::database()->setClassName(get_called_class()) ; 
            return self::database()->executeUpdate($sql,[$id]);
    }
    public static  function selectAll(){
        
           $sql="select *  from " .self::table();
           self::database()->setClassName(get_called_class()) ; 
          return self::database()->executeSelect($sql);
    }
    public static  function selectById(int $id){
         $sql="select *  from ".self::table()."  where id=?";
         self::database()->setClassName(get_called_class()) ; 
        return self::database()->executeSelect($sql,[$id]);
    }
    public static  function selectWhere(string $sql,array $data=[],$single=false){
        if(empty($className)){
            self::database()->setClassName(get_called_class()) ;
        }else{
            self::database()->setClassName($className);
        }
        
        return self::database()->executeSelect($sql,$data,$single);
    }
    /*principe solid
    une classe =une responsabilité
*/
}
