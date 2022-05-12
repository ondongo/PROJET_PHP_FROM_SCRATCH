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
       $sql="select u.* from inscription i,user 
                      u where  u.id=i.ac_id
                      and u.role like 'ROLE_AC'
                      and i.id=".$this->id ;

       return new AC() ;
   }
    // many to one avec Classe
    public function classe():Classe{
        $sql="SELECT c.* form Inscription i,classe c where c.id=i.classe_id and i.id={$this->id}";
        return new Classe(); 
    } 
    // many to one avec Etudiant
    public function etudiant():Etudiant{
        $sql="SELECT e.* form Inscription i,etudiant e where e.id=i.etudiant and  i.id={$this->id}";
        return new Etudiant(); 
    } 
    /**     * Get the value of dateIns
     */ 
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