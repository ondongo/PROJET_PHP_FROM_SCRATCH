<?php 
namespace App\Core;
class Request {
    /* Url : localhost:8000/uri(ressource demandé)
    uri: uniform ressource identifier =>
     controller qui doit etre charger et le use case a lancé

     2 ressource ne peuvent pas avoir le même Uri
     exemple
     controller => classe

     use case
     ajouter=> classe-add

     ajout =>POST
     Modifier => post
     lister=> get

*/
    public function getUrl(){
          $url =explode("/",$_SERVER['REQUEST_URI']);
           return $url;
    // ----------------------Explode permet de prendre une chaine et de le transformer en tableau }--------
    }

    // Fonction p;our determiner Uri 
    public function getUri(){
        
        //-----------------dd($_SERVER["REQUEST_URI"]);----------------------------
        return $this->getUrl()[1]; 
    }
// est ce une requete get ou post True or false?
    public function isPost():bool{

                return $_SERVER["REQUEST_METHOD"]=="POST";
    }
    public function isGet():bool{

                return $_SERVER["REQUEST_METHOD"]=="GET";
    }
    public function request():array{
        return $_POST;
    }

    public function query():array{
        $url=$this->getUrl();
        unset($url[0]);//WEB_URL
        unset($url[1]);//Route
        return array_values($url);
 }
 
 
}