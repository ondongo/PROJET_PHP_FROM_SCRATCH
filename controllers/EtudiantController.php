
<?php 
use App\Models\Cours;
use App\Core\Controller;
use App\Models\Etudiant;
use App\Core\IController;

class EtudiantController extends Controller implements IController{


    public function lister(){

     }
    
    public function listerCoursEtudiant(){
        if( $this->request->isGet()){  
          $coursId= intval($this->request->query()[0]) ;
          $cours=Cours::selectById( $coursId);
         // $cours=$classe->cours()[0];
          // dd( $cours->professeur());
          //dd($classe->cours());
          $this->render("cours/liste.classe",[
              "cours"=>$cours
          ]);
      } 
    }
    public function ajouter(){
        
    }

    public function supprimer(){
        
    }

    public function modifier(){
        
    }


   
}