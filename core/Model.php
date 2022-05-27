<?php 
namespace App\Core;
abstract class Model implements IModel{

  protected static DataBase|null $database=null;//l'objet n'est pas encore créé null est un type


    protected static string $table;

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
             $sql="delete  from ".self::$table." where id=?";
            return self::database()->executeUpdate($sql,[$id]);
    }
    public static  function selectAll(){
        
           $sql="select *  from  ".self::$table;
          return self::database()->executeSelect($sql);
    }
    public static  function selectById(int $id){
         $sql="select *  from ".self::$table."  where id=?";
        return self::database()->executeSelect($sql,[$id]);
    }
    public static  function selectWhere(string $sql,array $data=[],$single=false){
        return self::database()->executeSelect($sql,$data,$single);
    }
    /*principe solid
    une classe =une responsabilité

*/
}
