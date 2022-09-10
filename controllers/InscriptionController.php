<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Models\Etudiant;
use App\Core\Controller;
use Rakit\Validation\Validator;

class InscriptionController extends Controller{

   
   

    public function ajouter(){
        if( $this->request->isGet()){  
            $this->render("inscription/addEtudiant",[
                
            ]);
      }
      if($this->request->isPost()){
        $validator = new Validator;
        $validation = $validator->make($this->request->request(),[
            'login'   => 'required|email',
            'password'=> 'required|min:6|max:10',
        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("inscription/addEtudiant",[
                 'errors'=>$errors->firstOfAll(),
                 "login"=>$this->login,
                 "password"=>$this->password
            ]);
         }else{
             $data=$this->request->request();
             $classe =new Etudiant();
             $classe->setId($data['id']);
             $classe->setLogin($data['Login']);
             $classe->setPassword($data['Password']);
             $classe->adresse()->setVille($data["ville"]);
             $classe->adresse()->setQuartier($data["quartier"]);
             $classe->insert();
             $this->redirectToRoute("/classe");
         }
      }
    }      

    public function supprimer(){
        
    }

   
}