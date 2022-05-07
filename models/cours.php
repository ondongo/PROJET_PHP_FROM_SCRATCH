<?php
//class Cours implements Imodel
class Cours {
    public $id;
    private DateTime $dateCours;
    private string  $heureD;
    private string  $heureF;
    private int  $annee;

    /*public function insert()
    {
        $sql="INSERT into cours(dateCours,heureD,heureF) value({this->dateCours},{this->heureD},{this->heureF},{this->annee})";
    }
    public function update()
    {
        $sql="UPDATE  cours set dateCours={this->dateCours},heureD={this->heureD},heureF={this->heureF},annee={this->annee} where id={this->id}";
    }
    
    public static function selectAll()
    {
        $sql="SELECT * form cours";
    }
    public static function delete(int $id)
    {
        $sql="DELETE form cours where id={$id}";
    }
    public static function selectById(int $id){
        $sql="SELECT * form cours where id={$id}";
    }*/

    // Attributs navigationnels
    // many to one avec Classe
    public function classe():Classe{
        return new Classe(); 
    }
  
    //ManyToOne =>Professeur
    public function professeur():Professeur{
        return new Professeur();
     }
     //ManyToOne =>Module
    public function module():Module{
        return new Module();
     }
    /**
     * Get the value of heureD
     */ 
    public function getHeureD()
    {
        return $this->heureD;
    }

    /**
     * Set the value of heureD
     *
     * @return  self
     */ 
    public function setHeureD($heureD)
    {
        $this->heureD = $heureD;

        return $this;
    }

    /**
     * Get the value of heureF
     */ 
    public function getHeureF()
    {
        return $this->heureF;
    }

    /**
     * Set the value of heureF
     *
     * @return  self
     */ 
    public function setHeureF($heureF)
    {
        $this->heureF = $heureF;

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
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
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