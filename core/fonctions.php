<?php
//fichier contenant toutes mes fonctions utiles
   function dd($data){
    echo"<pre>";
       var_dump($data);
     echo"</pre>";
      die();
   }


    function redirectToRoute(string $uri){
      $url=WEB_URL."".$uri;
      header("location:$url");
  }