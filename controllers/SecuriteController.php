<?php 
namespace App\Controllers;

use App\Models\AC;

use App\Models\User;
use App\Core\Session;
use App\Models\Classe;
use App\Core\Controller;
use App\Models\Etudiant;
use App\Models\Professeur;
use Rakit\Validation\Validator;





class SecuriteController extends Controller{

    
    public function connexion(){
         $this->layout="connexion";
    //     //Formulaire
         //1-Affichage du Formulaire => GET
         
        if( $this->request->isGet()){  
       
                $this->render("securite/login");
                
     //            require_once(ROOT."views/partials/header.html.php");
     //            require_once(ROOT."views/securite/login.html.php");
     //            require_once(ROOT."views/partials /footer.html.php");
   }
    //       //request
    //      //2-Soumission des donnees  => POST
         if($this->request->isPost()){ //recuperation des donnees du formulaire avec $this
              //Validation du Formulaire
                $validator = new Validator;
          $validation = $validator->make($this->request->request(),[
                  'login'   => 'required|email',
                   'password'=> 'required|min:6|max:10',
                ],
                 [
                      'required' => ':attribute est obligatoire',
                       'login' => 'email est invalide',
                      'min' => ":attribute doit contenir au moins 6 caracteres "
                  ]);
                $validation->validate();
                  if ($validation->fails()) {
                   $errors = $validation->errors();
               //     dd($errors);
                  $this->render("securite/login",[
                         'errors'=>$errors->firstOfAll()]); }  
               
                    else{
//                          //Connexion à ma base de données
                          $data=$this->request->request();
                         $user=new User;
                                $user->setLogin($data['login']);
                            $user->setPassword($data['password']);
                       $result=$user->selectUserByLoginAndPassword();
     
                         if($result==true){
                        //      Session::setUser($result);
                               $this->redirectToRoute("/classe");
                      }
                      
                      if($result['role']==ROLE_AC)
                      {
                         $this->layout="layoutAC";
                         $classes=AC::selectAll();
                         Session::setUser($result);
                              $this->render("AC/liste",[
                                   'classes'=>$classes
                              ]);
                      }
                      
                      if($result['role']==ROLE_ETUDIANT)
                      {
                         $this->layout="layoutEtudiant";
                         $classes=Etudiant::selectAll();
                         Session::setUser($result);
                              $this->render("etudiant/liste",[
                                   'classes'=>$classes
                              ]);
                      }

                      if($result['role']==ROLE_PROFESSEUR)
                      {
                         $this->layout="layoutProfesseur";
                         $classes=Professeur::selectAll();
                         Session::setUser($result);
                              $this->render("professeur/liste",[
                                   'classes'=>$classes
                              ]);
                      }
                      
                      
                      
                      else{
                          $this->render("securite/login",[
                                    'error'=>"Login ou Mot de Passe Incorrect"
                            ]); 
                           }
                                        } 
         
         
                                   }}

     public function deconnexion(){
        // echo("en cours ...");
        // sleep(1);
          Session::destroy();
       $this->redirectToRoute("");
     }
}
?>



