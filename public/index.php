<?php 

require_once("../vendor/autoload.php");



// Une variable d'une classe
//Manipuler un Objet=>
//1-charger le fichier qui contient la classe
//require_once("../models/User.php");
//require_once("../models/RP.php");
//2-Instancier l'objet
//$user=new User();// fonction qui s'appelle le constructeur => __construct()
//Donner un etat a l'objet=> donnez une valeur a ses attributs
//-> Operateur de portee d'instance
//$user-> : interface de la classe(Ensemble des methodes ou attributs publics )
//$user->setId(1);

//$cours=new Cours();

//Autoloading => Chargement automatique
 //Namespace => Packadge : ensemble de classe du meme domaine
 //Namespace repertoire virtuel utiliser pour ranger nos classes
   //namespace Model => ranger mes classes Models
   //namespace Controllers => ranger mes classes controllers
   //namespace Core(Configuration,Toutes les Classes Reutilisables)
//Composer : Gestionnaires de Dependances
    //Gestionnaire => Telecharger + Configurer une dependance dans votre projet
    //Dependance => dossier core est une dependance(classes reutilisables) 
        //https://packagist.org/
        //Hub de dependance =>site beaucoup de dependance suivant le langage

use App\Models\Module;
use App\Models\RP;
$rp =new RP();





