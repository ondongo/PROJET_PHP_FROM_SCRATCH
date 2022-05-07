
<?php 

class Classe{
    // Attributs
    private int $id;
    private string $libelle;
    private string $niveau;
    private string $filiere;

    /*public function insert()
    {
        $sql="INSERT into classes(libelle) value({this->libelle})";
    }
    public function update()
    {
        $sql="UPDATE  classes set libelle={this->libelle} where id={this->id}";
    }
    
    public static function selectAll()
    {
        $sql="SELECT * form classes";
    }
    public static function delete(int $id)
    {
        $sql="DELETE form classes where id={$id}";
    }
    public static function selectById(int $id){
        $sql="SELECT * form classes where id={$id}";
    }*/
    
    // Attributs navigationnels
    // one to many Cours  private $cours=[];
    // Methodes
    public function cours(): array{
        //$sql="SELECT * form cours c where c.classe_id={$this->id}";
        return [];
    }
    // one to many Incriptions
    public function inscription(): array{
      
        return [];
    }
    public function __construct() 
    {

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
}