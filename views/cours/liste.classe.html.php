<div class="card border-light my-3 w-75 shadow   " >

  <div class="card-header bg-transparent border-light bg-header">Liste des Cours</div>
  <div class="row d-flex justify-content-evenly mt-2 ">
              <div class="col-2 mb-1  ">
                 Niveau : <?=$classe->getNiveau()?> 
              </div>
              <div class="col-2 mb-1 ">
                Filiere : <?=$classe->getFiliere()?>
              </div>
              <div class="col-4 mb-1 ">
                Libelle : <?=$classe->getLibelle()?>
              </div>
              <div class="col-2 mb-1 ">
                 Effectifs : 
              </div>
     </div>
    <div class="card-body ">
          
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date Cours</th>
                    <th>Heure Debut</th>
                    <th>Heure de Fin</th>
                    <th>Professeur</th>
                </tr>
            </thead>
            <tbody>
            <?php 
               $cours=$classe->cours();
              foreach($cours as $value):?>
                <tr>
                    <td  style="width:25%"><?=$value->getDateCours()?></td>
                    <td  style="width:25%"><?=$value->getHeureDebut()?>H</td>
                    <td  style="width:25%"><?=$value->getHeureFin()?>H</td>
                    <td  style="width:25%">
                        <?=$value->professeur()->getNomComplet()?>
                    </td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
        
                       
    </div>
                   
</div>