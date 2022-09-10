<
            <?php if(isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                      <strong><?=$error?></strong>
                </div>
             <?php endif ?>
      
              <form method="post" action="<?=WEB_URL?>">
                    
                      
              <div class="container">
            <div class="brand-logo"></div>
            <div class="brand-title">CONNECTEZ-VOUS</div>
            <div class="inputs">
            <label  for="exampleInputEmail1" class="form-label">EMAIL</label>
    <input name="login" type="text"  class="form-control <?= isset($errors['login'])?"is-invalid":"is-valid"  ?> " id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="" class="form-text invalid-feedback"><?=$errors['login']?></div>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    <label label for="exampleInputPassword1" class="form-label">PASSWORD</label>

    <input name="password" type="password"  placeholder="Min 6 charaters long"  class="form-control  <?=isset($errors['password'])?"is-invalid":"is-valid"  ?> " id="exampleInputPassword1"></br>
    <button type="submit">LOGIN</button></br>
    <a href="https://github.com/ondongo/Project_GloireODG">MADE BY GLOIRE ONDONGO</a>
  </div>

                     
                    
  </div>
  </form>

              

   