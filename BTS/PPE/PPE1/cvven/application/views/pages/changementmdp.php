</br>
</br>
</br>
</br></br>

  <?php echo validation_errors(); ?>
  <?php echo form_open('users/changemdp'); ?>
<div class="container">
<div class="row">
  <div class="col-md-4 col-md-offset-4">
      <div class="login-form">

            <div class="main-div">
                  <div class="panel">
                       <h2>Changement Mot de Passe</h2>
                  </div>
                  <div class="form-group">
                    <label> mdp orignal</label>
                        <input type="password" class="form-control" name="mdporiginal" >
                  </div>

                  <div class="form-group">
                    <label> nouveau mdp</label>
                        <input type="password" class="form-control"  name="mdpnew">
                  </div>

                  <div class="form-group">
                    <label> confirmePassWord</label>
                        <input type="password" class="form-control"  name="mdpneworiginal">
                  </div>


                    <button type="submit" class="btn btn-primary btn-block">envoyer</button>

            </div>
          </br>
          </br>
          </br></br>

      </div>
      </div>
</div>
</div>
<?php echo form_close();?>
