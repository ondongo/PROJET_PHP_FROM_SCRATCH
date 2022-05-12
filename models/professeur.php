<?php 
 namespace App\Models;
class Professeur extends User{
     private string $grade;   // V.7 private $grade;
    


     //Association 
      //OneToOne avec adresse
          //Un Objet de type Professeur contient un objet de type Adresse
          public function adresse():Adresse{
              return new Adresse();
          }
      //ManyToMany avec Module
       //Un Objet de type Professeur plusieurs objets de type Module
        public function modules():array{
            return [];
        }
     /**
      * Get the value of grade
      */ 
     public function getGrade()
     {
          return $this->grade;
     }

     /**
      * Set the value of grade
      *
      * @return  self
      */ 
     public function setGrade($grade)
     {
          $this->grade = $grade;

          return $this;
     }
}