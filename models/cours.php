<?php 
namespace App\Models;

use App\Core\Model;


class Cours extends Model{
    private int $id;
    //Classe Php \ nameSpace Racine
    private string $dateCours;
    private string $heureDebut;
    private string $heureFin;


    public function __construct()
    {
   
    }


    //Association
     //ManyToOne avec Module
        //un Objet de type Cours contient un objet de type Module
        //Plusieurs Objet de type Cours sont associes a un objet de type Module
        public function module():Module{
            $sql="select m.* from cours c, 
                  module m where c.module_id=m.id and c.id=?";
                 parent::selectWhere($sql,[$this->id],true);
            return new Module();
        }
      //ManyToOne avec Professeur
        //un Objet de type Cours contient un objet de type Professeur
        //Plusieurs Objet de type Cours sont associes a un objet de type Professeur

        public function professeur():Professeur{
            $sql="select u.* from cours c, 
                  user u where c.professeur_id=u.id and c.id=? 
                  and roles like 'ROLE_PROFESSEUR' ";
               return parent::selectWhere($sql,[$this->id],true,Professeur::class);
        }
       //ManyToOne avec Classe
         //un Objet de type Cours contient un objet de type Classe
        //Plusieurs Objet de type Cours sont associes a un objet de type Classe
        public function classe():Classe{
            return new Classe();
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
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        $date=new  \DateTime($this->dateCours);
        return $date->format("d/m/Y");
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    /**
     * Get the value of heureDebut
     */ 
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */ 
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */ 
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */ 
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }
}