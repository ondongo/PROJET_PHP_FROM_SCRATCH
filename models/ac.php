<?php 
namespace App\Models;
class AC extends User {
    
    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_AC";
        $this->inscriptions=[];
        
    }
    public function inscriptions():array{
        return [];
        $sql="select u.* from inscription i,user 
        u where  u.id=i.ac_id
        and u.role like 'ROLE_AC'
        and i.id=".$this->id ;

        parent::selectWhere($sql,[$this->id],true);
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


}
