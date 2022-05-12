<?php 
namespace App\Models;
class RP extends User {
    
    public function __construct()
    {
        $this->role="ROLE_RP";
    }
}