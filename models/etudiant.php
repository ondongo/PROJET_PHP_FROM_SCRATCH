
<?php 

namespace App\Models;

class Etudiant extends User{
    //Attributs
    private string $matricule;

    public function __construct()
    {}
   

    // one to many avec Inscription
    public function inscription():array{
        return [];
    }

    //OneToOne  avec Adresse
    public function adresse():Adresse|null{
        return null;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
 

}

?>