<?php 
namespace App\Models;
class RP extends User {
    
    public function __construct()
    {
        parent::__construct();//appel le constructeur du parent car le constructeur est définit pour pouvoir construire un objet et bénificier de ce qui a été fait
        parent::$role="ROLE_RP";
        
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


}