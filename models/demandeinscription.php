<?php
//  class Inscription implement Imodel {}
namespace App\Models;
use App\Core\Model;
class DemandeInscription extends Model {
    private string $id;
    private string $datedemandeIns;
    private string $annee;

    public function __construct()
    {
        self::$table='demandeinscription' ;
    }
    //ManyToOne => AC
   public function etudiant():Etudiant{
       $sql="select u.* from inscription i,user 
                      u where  u.id=i.ac_id
                      and u.role like 'ROLE_Etudiant'
                      and i.id=".$this->id ;

       return new Etudiant();
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

    /**
     * Get the value of datedemandeIns
     */ 
    public function getDatedemandeIns()
    {
        return $this->datedemandeIns;
    }

    /**
     * Set the value of datedemandeIns
     *
     * @return  self
     */ 
    public function setDatedemandeIns($datedemandeIns)
    {
        $this->datedemandeIns = $datedemandeIns;

        return $this;
    }
}

?>