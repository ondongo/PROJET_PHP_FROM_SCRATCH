<?php
namespace App\Core;
use App\Exception\BDConnexion;
class Database{
    private \PDO|null $pdo=null;
    //pas de connexion
    //Mode Deconnecte
    public function openConnexion(){
       try{
        $this->pdo=new \PDO("mysql:dbname=baila;host=localhost","root","");}

        // Ne pas utiliser les exceptions du langage catch(\Exception){}
        catch(\Exception $th){
            die($th->message);
        }
      
    }
    public function closeConnexion(){
            
    }
    public function executeSelect(){

    }
    public function executeUpdate(){

    }
}