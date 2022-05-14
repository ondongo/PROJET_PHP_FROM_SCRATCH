<?php
namespace App\Models;
class Adresse{
       private int $id;
       private string $quartier;
       private string $ville;

       //Association => fonction
       //OneToOne avec Professeur
       //Un Objet de type Adresse contient un objet de type Professeur
       public function professeur():Professeur{
           return new Professeur();
       }

       /**
        * Get the value of id
        */ 
       public function getId()
       {
              return $this->id;
       }

       /**
        * Set the value of id
        *
        * @return  self
        */ 
       public function setId($id)
       {
              $this->id = $id;

              return $this;
       }

       /**
        * Get the value of quartier
        */ 
       public function getQuartier()
       {
              return $this->quartier;
       }

       /**
        * Set the value of quartier
        *
        * @return  self
        */ 
       public function setQuartier($quartier)
       {
              $this->quartier = $quartier;

              return $this;
       }

       /**
        * Get the value of ville
        */ 
       public function getVille()
       {
              return $this->ville;
       }

       /**
        * Set the value of ville
        *
        * @return  self
        */ 
       public function setVille($ville)
       {
              $this->ville = $ville;

              return $this;
       }
}