<?php 
namespace App\Core;
interface Icontroller{
    
// Une interface ne contient que des méthodes abstraites
public function lister();
    
public function ajouter();

public function modifier();

public function supprimer();


}


