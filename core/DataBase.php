<?php 
namespace App\Core;

use App\Exceptions\BdConnexionException;

//Classe d'execution des resquetes Database
class DataBase{
    //Connexion a la BD;
    // PDO or msqli
    private \PDO|null $pdo=null;//Pas de connexion
    //Mode Deconnecte
    public function openConnexion(){
        //host : adresse du server BD
        try{
            //Essaie de te connecter
            $this->pdo=new \PDO("mysql:dbname=scolaire_baila;host=127.0.0.1","root","");
        } catch (\Exception $ex) {
              die("Erreur Connexion -Veuillez contacter votre Admin");
              //throw new BdConnexionException;
            }
    }



    //fermeture de la connexion
    public function closeConnexion(){
         $this->pdo=null;//couper la connexion
    }
    //gère les requetes de selection
    public function executeSelect(string $sql,array $data=[],$single=false){
      //Requete non preparee  => Pas du Securise
      //Requete dont les variables sont injectees a l'ecriture
       // $id=1;
       // $sql="Select * from classe where id=$id ";

      //Requete preparee  => Securise
        //Requete dont les donnees sont injectees a l'exection de la requete
        //a l'eriture les variables sont remplacees par des joker
        $this->openConnexion();
       // $sql="Select * from classe where id=? and role like ? ";
         $stm=$this->pdo->prepare($sql);
         $stm->execute($data);
        if($single){
            $result=$stm->fetch();// retourne one ligne un résultat
        }else{
            $result=$stm->fetchAll();
             //plusieurs lignes plusuieurs résultat
        }
        $this->closeConnexion();
        return  $result;
        
    }
    //gère les requetes de mise à jour 
    public function executeUpdate(string $sql,array $data=[]):int{
        $this->openConnexion();
       // $sql="Select * from classe where id=? and role like ? ";
         $stm=$this->pdo->prepare($sql);   //objet stm retourne la requete a ecuté il pose des pointeurs
         $stm->execute($data);
         $result=$stm->rowCount();//nombre de ligne de la requete
        $this->closeConnexion();
        return  $result;
    }
}