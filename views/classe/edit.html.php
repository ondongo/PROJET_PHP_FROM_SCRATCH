<div class="card border-light my-3 w-75 shadow   " style="height:80%" >
  <div class="card-header bg-transparent border-light bg-header">Nouvelle Classe</div>
    <div class="card-body ">
          
     <form action="<?=WEB_URL?>/classe-up" method="post">
        <input type="hidden" name="classe_id" value="<?=$classe->getId()?>">
           <div class="mb-3">
           <label for="" class="form-label">Niveau</label>
           <select class="form-control <?=isset($errors['niveau'])?"is-invalid":""  ?>" name="niveau" id="">
            <?php foreach ($niveaux as  $value):  ?>
                    <option value="<?=$value?>" 
                      <?=$classe->getNiveau()==$value? "selected" :""  ?>
                    ><?=$value?></option>
            <?php endforeach ?>    
           </select>
           <small id="" class="form-text invalid-feedback"><?=$errors['niveau']?></small>
         </div>

         <div class="mb-3">
           <label for="" class="form-label">Filiere</label>
           <select class="form-control  <?=isset($errors['filiere'])?"is-invalid":""  ?>" name="filiere" id="">
                <?php foreach ($filieres as  $value):  ?>
                            <option value="<?=$value?>"
                              <?=$classe->getFiliere()==$value? "selected" :""  ?>
                               ><?=$value?></option>
                <?php endforeach ?>
           </select>
             <small id="" class="form-text invalid-feedback"><?=$errors['filiere']?></small>
         </div>

         <div class="mb-3">
           <label for="" class="form-label ">Libelle</label>
           <input type="text" class="form-control <?=isset($errors['libelle'])?"is-invalid":""  ?>" name="libelle"
            id="" aria-describedby="helpId" placeholder=""
            value="<?=$classe->getLibelle()?>">
           <small id="" class="form-text invalid-feedback"><?=$errors['libelle']?></small>
         </div>

         <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
     </form>
        
                       
    </div>
                   
</div>