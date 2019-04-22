</br>
</br>
</br>
</br></br>

  <?php echo validation_errors(); ?>
  <?php echo form_open('users/loginuser'); ?>
<div class="container center_div">
<div class="row">
  <div class="col-md-4 col-md-offset-4">
      <div class="login-form">

            <div class="main-div">
                  <div class="panel">
                       <h2>Login</h2>
                  </div>
                  <div class="form-group">
                        <input type="texte" class="form-control" name="login" >
                  </div>

                  <div class="form-group">
                        <input type="password" class="form-control"  name="password">
                  </div>

                  <div class="forgot">
                        <a href="reset.html">Forgot password?</a>
                  </div>

                    <button type="submit" class="btn btn-primary btn-block">Login</button>

            </div>
          </br>
          </br>
          </br></br>

      </div>
      </div>
</div>
</div>
<?php echo form_close();?>
