
  <?php echo validation_errors(); ?>
<div class="container">

      <div class="form-group ">
      </br></br>
      </br></br>
      </br></br>
      <table class="table table-dark">
          <tr><
              <td>date_arrivee</td>
              <td>date_depart</td>
              <td>nbpersonne</td>
              <td>etatreservation</td>
              <td>menage</td>
              <td>Restauration</td>
              <td>Activites</td>
              <td>Date Reservation</td>
              <td>tarif Reservation</td>
              <td>Valider</td>
              <td>Refuser</td>
          </tr>
          <?php
          foreach ($results as $ligne) {
              ?>
              <tr>
                  <td><?php echo $ligne->date_arrivee; ?></td>
                  <td><?php echo $ligne->date_depart; ?></td>
                  <td><?php echo $ligne->nbpersonne; ?></td>
                  <td><?php echo $ligne->etatreserv; ?></td>
                  <td><?php echo $ligne->menage; ?></td>
                  <td><?php echo $ligne->restauration; ?></td>
                  <td><?php echo $ligne->activites; ?></td>
                  <td><?php echo $ligne->datereserv; ?></td>
                  <td><?php echo $ligne->tarifreserv; ?></td>
              </tr>
          <?php
          }
          ?>
    </table>



      </div>
</div>
