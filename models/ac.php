<?php
//  class AC extends User implement Imodel {}
class AC extends User{
 
//AP herite de User

   
    public function __construct()
    {
        $this->role="ROLE_AC";
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