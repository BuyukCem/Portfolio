
  <?php echo validation_errors(); ?>
  <?php echo form_open('reservation/reserver') ?>
<div class="container">
      <div class="form-group ">
      </br></br>
      </br></br>
      </br></br>
      <table class="table table-dark">
          <tr><
              <td>nom</td>
              <td>Prenom</td>
              <td>login</td>
              <td>adresse</td>
              <td>mail</td>
              <td>tel</td>
              <td>Quotient Fami:</td>

          </tr>
          <?php
          foreach ($results as $ligne) {
              ?>
              <tr>
                  <td><?php echo $ligne->nomadh; ?></td>
                  <td><?php echo $ligne->prenomadh; ?></td>
                  <td><?php echo $ligne->login; ?></td>
                  <td><?php echo $ligne->adresse; ?></td>
                  <td><?php echo $ligne->mail; ?></td>
                  <td><?php echo $ligne->tel; ?></td>
                  <td><?php echo $ligne->quotienfam; ?></td>
              </tr>
          <?php
          }
          ?>
    </table>
      </div>
</div>
