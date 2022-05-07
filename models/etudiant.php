
<?php 
//class Etudiant extends User implements Imodel
class Etudiant extends User {
    //Attributs
    private int $id;
    private string $matricule;

    public function __construct(){}
    /*{
        $this->role="ROLE_Etudiants";
    }
    public function insert()
    {
        $sql="INSERT into etudiants(nomComplet,matricule) value({this->nomComplet},{this->matricule})";
    }
    public function update()
    {
        $sql="UPDATE  etudiants set nomComplet={this->nomComplet},matricule={this->matricule} where id={this->id}";
    }
    
    public static function selectAll()
    {
        $sql="SELECT * form etudiants";
    }
    public static function delete(int $id)
    {
        $sql="DELETE form etudiants where id={$id}";
    }
    public static function selectById(int $id){
        $sql="SELECT * form etudiants where id={$id}";
    }*/

    // one to many avec Inscription
    public function inscription():array{
        return [];
    }

    //OneToOne  avec Adresse
    public function adresse():Adresse|null{
        return null;
    }

    //Methodes
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