<?php
//  class Inscription implement Imodel {}
class Inscription {
    private string $id;
    private DateTime $dateIns;
    private string $annee;


   /* public function insert()
    {
        $sql="INSERT into Inscription(dateIns,annee) value({this->dateIns},{this->annee})";
    }
    public function update()
    {
        $sql="UPDATE  Inscription set dateIns={this->dateIns},annee={this->annee} where id={this->id}";
    }
    
    public static function selectAll()
    {
        $sql="SELECT * form inscription";
    }
    public static function delete(int $id)
    {
        $sql="DELETE form Inscriptionwhere id={$id}";
    }
    public static function selectById(int $id){
        $sql="SELECT * form Inscription where id={$id}";
    } */

    // many to one avec Classe
    public function classe():Classe{
        //$sql="SELECT c.* form Inscription i,classe c where c.id=i.classe_id and i.id={$this->id}";
        return new Classe(); 
    } 
    // many to one avec Etudiant
    public function etudiant():Etudiant{






        //$sql="SELECT e.* form Inscription i,etudiant e where e.id=i.etudiant and  i.id={$this->id}";
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