<?php
namespace App\Models; 
 use App\Core\Model;
class Classe extends Model{
    private int $id;  
    private string $libelle;
    private string $niveau;
    private string $filiere;

    public function __construct()
    {
        parent::table();
    }

    //OneToMany avec Cours
       //Un objet de type Classe contient plusieurs objets de type Cours
       public function cours():array{
        $sql="select c.* from cours c, 
              classe cl where c.classe_id=cl.id and cl.id=? 
              ";
        parent::selectWhere($sql,[$this->id]);
           return [];
       }


       public function etudiant():array{
        $sql="select u.* from user u, 
              classe cl where u.classe_id=cl.id and cl.id=? 
              ";
        parent::selectWhere($sql,[$this->id]);
           return [];
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }


    public function insert(){
         
        //die(parent::table());
        $sql="INSERT INTO  classe (`libelle`, `filiere`, `niveau`) VALUES (?,?,?)";
            
       return parent::database()->executeUpdate($sql,[
                                                $this->libelle,$this->filiere,$this->niveau]);
        
   }
}