<div class="card border-light my-3 w-75 shadow   " >
  <div class="card-header bg-transparent border-light bg-header">Liste des Classe</div>
    <div class="card-body ">
          <div class="row d-flex justify-content-end">
              <div class="col-2 mb-1 ">
                  <a name="" id="" class="btn btn-outline-info text-dark btn-xs" href="<?=WEB_URL?>/classe-add" role="button">Nouveau</a>
              </div>
          </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Filiere</th>
                    <th>Niveau</th>
                    <th>Libelle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($classes as $value):?>
                <tr>
                    <td  style="width:15%"><?=$value->getFiliere()?></td>
                    <td  style="width:15%"><?=$value->getNiveau()?></td>
                    <td  style="width:25%"><?=$value->getLibelle()?></td>
                    <td  style="width:45%">
                        <a name="" id="" class="btn btn-outline-success text-dark btn-xs" href="<?=WEB_URL?>/cours-classe/<?=$value->getId()?>" role="button">Cours</a>
                        <a name="" id="" class="btn btn-outline-warning text-dark btn-xs" href="<?=WEB_URL?>/classe-up/<?=$value->getId()?>" role="button">Edition</a>
                        <a name="" id="" class="btn btn-outline-danger text-dark" href="#" role="button">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
        
                       
    </div>
                   
</div>