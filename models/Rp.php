<?php 
//RP herite de User
class RP extends User{
   
    public function __construct()
    {
        $this->role="ROLE_RP";
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