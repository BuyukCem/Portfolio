
  <?php echo validation_errors(); ?>
  <?php echo form_open('users/enregistrer'); ?>
<div class="container ">

    <form>
          </br></br>
          </br></br>
          </br></br>
          <div class="form-group ">
                  <label>Nom</label>
                  <input type="text" class="form-control" id="name" placeholder="nom" name="nomadh">
          </div>
          <div class="form-group ">
                  <label>Prenom</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Prenom" name="prenomadh">
          </div>
          <div class="form-group ">
                  <label >login</label>
                  <input type="text" class="form-control" id="login" placeholder="login" name="login">
          </div>
          <div class="form-group ">
                  <label >Password</label>
                  <input type="password" class="form-control" id="password" placeholder="password" name="mdp">
          </div>
          <div class="form-group ">
                  <label>ConfirmePassWord</label>
                  <input type="password" class="form-control" id="password" placeholder="confirme PassWord" name="confirmePassWord">
          </div>
          <div class="form-group ">
                  <label>mail</label>
                  <input type="Email" class="form-control" id="email" placeholder="mail" name="mail">
          </div>
          <div class="form-group ">

                  <label>Quotient familiale:</label></br>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="quotientfam" id="inlineRadio1" value="1">
                          <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="quotientfam" id="inlineRadio2" value="2">
                          <label class="form-check-label" for="inlineRadio2">2</label>
                     </div>
                     <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="quotientfam" id="inlineRadio3" value="3">
                          <label class="form-check-label" for="inlineRadio3">3</label>
                     </div>
                     <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="quotientfam" id="inlineRadio3" value="4">
                          <label class="form-check-label" for="inlineRadio4">4</label>
                    </div>
            </div>
            <div class="form-group ">
                <label>tel</label>
                <input type="text" class="form-control" id="password" placeholder="0600000000" name="tel">
            </div>
            <div class="form-group ">
                <input type="submit" name="submit" value="Crée" />
            </div>
          </div>
      </form>
    </div>


<?php echo form_close();?>
