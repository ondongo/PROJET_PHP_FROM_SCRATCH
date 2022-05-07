<?php
require_once('./../models/classe.php');
require_once('./../models/users.php');
//creer un objetr
$cl1=new Classe();
$cl2=new Classe();

$cl1->setNiveau("L2");

echo "Niveau : ". $cl1->getNiveau(). "<br>";
echo "Filiere : ". $cl1->getFiliere(). "<br>";
echo "Libelle : ". $cl1->getLibelle(). "<br>";

$user1=new User();
$user2=new User();
$user1->setLogin('rp');
$user1->setPassword('pwd');

echo "Login : ". $user1->getLogin(). "<br>";
echo "Password : ". $user1->getPassword(). "<br>";


?>