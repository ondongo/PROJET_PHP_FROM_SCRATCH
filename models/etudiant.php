<?php 
namespace App\Models;
class Etudiant extends User {
    private string $nomComplet;
    private string $matricule;
    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_Etudiant";
        $this->adresse=new Adresse;
    }
    public function adresse():Adresse{
        return new Adresse();
    }
    public function demandeinscription():array{
        return [];
      }
    public static function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


    public function insert(){
       $sql="INSERT INTO ? (`login`,`password`, `matricule`, `ville`, `quartier`, `role`,nom_complet)
            VALUES (?,?,?,?,?,?,?);";
       return parent::database()->executeUpdate($sql,[
                       parent::$table,
                       $this->login,$this->password,$this->matricule,
                       $this->adresse->getVille(),  $this->adresse->getQuartier(),
                       parent::$role,$this->nomComplet]);
  }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
         return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
         $this->nomComplet = $nomComplet;

         return $this;
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