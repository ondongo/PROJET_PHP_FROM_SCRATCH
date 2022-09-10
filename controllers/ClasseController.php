<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Models\Classe;
use App\Core\Controller;
use App\Core\IController;
use Rakit\Validation\Validator;

class ClasseController extends Controller implements IController{

    private array $niveaux=["L1","L2","L3"];
    private array $filieres=["MAE","GLRS","CDSD"];
    public function lister(){

         $classes=Classe::selectAll();
     
          $this->render("classe/liste",[
            'classes'=> $classes
         ]);
    }

    public function ajouter(){
        if( $this->request->isGet()){  
            $this->render("classe/add",[
                "niveaux"=>$this->niveaux,
                "filieres"=>$this->filieres
            ]);
      }

      if($this->request->isPost()){
        $validator = new Validator;
        $validation = $validator->make($this->request->request(),[
            'niveau' => 'required',
            'filiere'=> 'required',
            'libelle'=> 'required',
        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("classe/add",[
                 'errors'=>$errors->firstOfAll(),
                 "niveaux"=>$this->niveaux,
                 "filieres"=>$this->filieres
            ]);
         }else{
             $data=$this->request->request();
             $classe =new Classe();
             $classe->setFiliere($data['filiere']);
             $classe->setNiveau($data['niveau']);
             $classe->setLibelle($data['libelle']);
             $classe->insert();
             $this->redirectToRoute("/classe");
         }
      }
    }

    public function supprimer(){
        
    }

    public function modifier(){
        if( $this->request->isGet()){  
            $classeId= intval($this->request->query()[0]) ;
            $classe=Classe::selectById( $classeId);
            //dd(  $classe);
            $this->render("classe/edit",[
                "niveaux"=>$this->niveaux,
                "filieres"=>$this->filieres,
                "classe"=>$classe
            ]);
      }

      if($this->request->isPost()){
        $validator = new Validator;
        $validation = $validator->make($this->request->request(),[
            'niveau' => 'required',
            'filiere'=> 'required',
            'libelle'=> 'required',
        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("classe/add",[
                 'errors'=>$errors->firstOfAll(),
                 "niveaux"=>$this->niveaux,
                 "filieres"=>$this->filieres
            ]);
         }else{
             $data=$this->request->request();
             $classe =Classe::selectById($data['classe_id']);
             $classe->setFiliere($data['filiere']);
             $classe->setNiveau($data['niveau']);
             $classe->setLibelle($data['libelle']);
             $classe->update();
             $this->redirectToRoute("/classe");
         }
      }
    }

   
}