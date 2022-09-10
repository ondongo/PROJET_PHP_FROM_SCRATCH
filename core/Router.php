<?php 
namespace App\Core;

//recoit la requete du front controller et 
//choisit la requete(use case) qui doit etre excuté
use App\Core\Session;
use App\Exceptions\RouteNotFoundException;

class Router {
  // Récupérer l'Uri cherche le controller et crée un objet
  private Request $request;
  private array $routes=[];
  public function __construct()
  {
      $this->request=new Request;
  }
//tableau de routes : controller et action
  public function route(string $uri,array $route){
    $this->routes[$uri]=$route;
  }

                   

//resoudre la route 
  public function resolve(){
     $uri= "/".$this->request->getUri();
     // verifications si Uri est dans le tableau
  
     if(isset( $this->routes[$uri])){
         //Destrtruction(controller,use)
                      [$ctrlClass,$action] =$this->routes[$uri];
     
                           // $ctrl=$this->routes[$uri][0];      ----Version 7 Php----
                          // $action=$this->routes[$uri][1];


                      // -----method magic class_exist methode_exist
                      if(class_exists($ctrlClass) && method_exists($ctrlClass,$action)){
                                  Session::openSession();
                                $ctrl=new $ctrlClass($this->request);

                                //Injection Objet request dans une action
                                //Appel l'action se trouvant dans le controller
                          call_user_func_array([$ctrl,$action],[$this->request]);
                                
                        }
        
                      else{
                            throw new RouteNotFoundException();
                      }
                    
    }
    else{
      //Soulever l'exception
      throw new RouteNotFoundException();  
  }
  }}