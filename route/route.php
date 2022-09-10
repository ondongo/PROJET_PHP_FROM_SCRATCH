<?php
use App\Core\Router;
use App\Controllers\ClasseController;
use App\Controllers\SecuriteController;
use App\Exceptions\RouteNotFoundException;
$router=new Router();

$router->route("/",[SecuriteController::class,"connexion"]);
$router->route("/logout",[SecuriteController::class,"deconnexion"]);
$router->route("/classe",[ClasseController::class,"lister"]);
$router->route("/classe-add",[ClasseController::class,"ajouter"]);
$router->route("/classe-up",[ClasseController::class,"modifier"]);
$router->route("/classe-del",[ClasseController::class,"supprimer"]);

$router->route("/cours-classe",[CoursController::class,"listeCoursDelaClasse"]);
$router->route("/cours",[CoursController::class,"lister"]);
$router->route("/cours-add",[CoursController::class,"ajouter"]);

$router->route("/module",[ModuleController::class,"lister"]);
$router->route("/module-add",[ModuleController::class,"ajouter"]);

$router->route("/professeur",[ProfesseurController::class,"lister"]);
$router->route("/professeur-add",[ModuleController::class,"ajouter"]);

$router->route("/etudiant",[EtudiantController::class,"lister"]);
$router->route("/inscription",[InscriptionController::class,"ajouter"]);
$router->route("/listercoursEtudiant",[EtudiantController::class,"listerCoursEtudiant"]);


// $router->route("professeur-add",[ProfesseurController::class,"ajouter"]);
try {
  $router->resolve();
} catch (RouteNotFoundException $ex) {
   die($ex->message);

}



