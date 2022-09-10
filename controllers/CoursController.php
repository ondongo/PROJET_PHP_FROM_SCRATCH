<?php 
namespace App\Controllers;

use App\Models\Cours;
use App\Models\Classe;
use App\Core\Controller;
use App\Core\IController;
use Rakit\Validation\Validator;

class CoursController extends Controller implements IController{
    

    public function lister(){
        $this->layout="base";
        $cours=Cours::selectAll();
        $this->render("cours/liste",[
            "cours"=>$cours
        ]);
        
       

    }
    public function listerCoursDelaClasse(){
        $this->layout="base";
        
        if( $this->request->isGet()){  
          //$classeId= intval($this->request->query()[0]) ;
          $classe=Classe::selectById(1);
   
     
         // $cours=$classe->cours()[0];
          // dd( $cours->professeur());
          //dd($classe->cours());
          $this->render("cours/liste.cours",[
              "classe"=>$classe
          ]);
      } 
    }

    public function ajouter(){
        $this->layout="base";
   
        if( $this->request->isGet()){  
            $this->render("cours/add",[
               
            ]);
      }

      if($this->request->isPost()){

        $validator = new Validator;
        $validation = $validator->make($this->request->request(),[
            'dateCours' => 'required',
            'heureDebut'=> 'required',
            'heureFin'=> 'required',

        ],
         [
             'required' => ':attribute est obligatoire',
         ]);
        $validation->validate();
         if ($validation->fails()) {
           $errors = $validation->errors();
            $this->render("cours/add",[
                 'errors'=>$errors->firstOfAll(),
                 
            ]);
         }else{
             $data=$this->request->request();
             $cours =new cours();
             $cours->setDateCours($data['dateCours']);
             $cours->setHeureDebut($data['heureDebut']);
             $cours->setHeureFin($data['heureFin']);
             var_dump($cours);
             $cours->insert();
             $this->redirectToRoute("/cours");
         }
      }
    }

  

    public function supprimer(){
        
    }

    public function modifier(){
        $this->layout="base";
        
    }

    public function details(){
        $this->layout="base";
        //$this->layout="base";
        if( $this->request->isGet()){  
          $classeId= intval($this->request->query()[0]) ;
          $classe=Classe::selectById( $classeId);
         // $cours=$classe->cours()[0];
          // dd( $cours->professeur());
          //dd($classe->cours());
          $this->render("cours/details",[
              "classe"=>$classe
          ]);
      } 
    }


   
}