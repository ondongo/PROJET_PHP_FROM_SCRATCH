<?php 
class Module{
    private int $id;
    private string $libelle; 

    //OneToMany avec Cours
    //Un Module associee a plusieurs cours
    public function cours():array{
        return [];
    }

    //ManyToMany avec Professeurs
    
    public function professeurs():array{
        return [];}
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
}