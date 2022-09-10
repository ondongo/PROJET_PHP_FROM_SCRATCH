<div class="card border-light my-3 w-75 shadow   " style="height:80%" >
  <div class="card-header bg-transparent border-light bg-header">Nouvelle Etudiant</div>
    <div class="card-body ">
          
     <form action="<?=WEB_URL?>/inscription" method="post">
         <div class="mb-3">
         <label for="" class="form-label ">LOGIN</label>
           <input type="text" class="form-control <?=isset($errors['login'])?"is-invalid":""  ?>" name="login" id="" aria-describedby="helpId" placeholder="">
           <small id="" class="form-text invalid-feedback"><?=$errors['login']?></small>



           <small id="" class="form-text invalid-feedback"><?=$errors['login']?></small>
         </div>

         <div class="mb-3">
         <label for="" class="form-label ">Password</label>
           <input type="text" class="form-control <?=isset($errors['password'])?"is-invalid":""  ?>" name="password" id="" aria-describedby="helpId" placeholder="">
           <small id="" class="form-text invalid-feedback"><?=$errors['password']?></small>
         </div>


         <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
     </form>
        
                       
    </div>
                   
</div>
