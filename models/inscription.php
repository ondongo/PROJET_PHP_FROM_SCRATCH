<?php
//  class Inscription implement Imodel {}
namespace App\Models;
use App\Core\Model;
class Inscription extends Model {
    private string $id;
    private string $dateIns;
    private string $annee;

    public function __construct()
    {
        self::$table='inscription' ;
    }
    //ManyToOne => AC
   public function ac():AC{
       
       return new AC() ;
   }

    public function getDateIns()
    {
        return $this->dateIns;   
    }

    /**
     * Set the value of dateIns
     *
     * @return  self
     */ 
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
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
}

?>