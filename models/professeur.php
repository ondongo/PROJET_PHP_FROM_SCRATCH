<?php 
class Professeur  extends User{
    private string $grade;

  
   /* public function insert()
    {
        $sql="INSERT into Professeurs (grade) value({this->grade}";
    }
    public function update()
    {
        $sql="UPDATE  Professeurrs set grade={this->grade} where id={this->id}";
    }
    
    public static function selectAll()
    {
        $sql="SELECT * from Professeurs";
    }
    public static function delete(int $id)
    {
        $sql="DELETE from Professeurs where id={$id}";
    }
    public static function selectById(int $id){
        $sql="SELECT * form Professeurs where id={$id}";
    } */

  
  
    public function __construct()
    {
        $this->role="ROLE_PROFESSEUR";
    }
     //OneToMany avec Cours
    //Une Professeur associee a plusieurs cours
    public function cours():array{
        return [];
    }

    //ManyToMany avec Module
    
    public function modules():array{
        return [];
    }

    //OneToOne  avec Adresse
    public function adresse():Adresse|null{
        return null;
    }
    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    //Redefinition => evolution
      //1-Heritage de Methode
      //2-Redefinir=> changer son comportement
       /**
       * Set the value of role
       *
       * @return  self
       */ 
      public function setRole($role)
      {
          return $this;
      }
}