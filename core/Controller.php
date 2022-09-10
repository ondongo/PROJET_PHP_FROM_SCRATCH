<?php 
namespace App\Core;

use App\Core\Role;
use App\Core\Session;

class Controller{
  // Tout ce qui est commun à mes controllers
    protected Request $request;
    protected string $layout="base";
    public function __construct(Request $request)
    {
        $this->request= $request;
    }
    // Ma redirection  Avec mon header Location
    public function redirectToRoute(string $uri){
        $url=WEB_URL."".$uri;
        header("location:$url");
    }

     public function render(string $path,array $data=[]){
        //memoire tampon permettant de stocker temporairement le contenu de la vue
            $data['request']=$this->request;
            $data['Session']=Session::class;   //pour que ça soit accéssible au niveau des vues
            $data['Role']=Role::class;
        ob_start();
        // extraire les données sur les clés
        extract($data);
     require_once(ROOT."views/".$path.".html.php");
       $content_for_views=ob_get_clean();
        require_once(ROOT."views/layout/".$this->layout.".html.php");
    }


}