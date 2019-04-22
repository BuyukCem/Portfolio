    <?php
        if ($results) {
    ?>
         <br>
        <br>
        <div class="container">
        <table class="table table-dark">
        <tr>
            <td>numreserv</td>
            <td>date_arrivee</td>
            <td>date_depart</td>
            <td>nbpersonne</td>
            <td>etatreservation</td>
            <td>menage</td>
            <td>Restauration</td>
            <td>Activites</td>
            <td>Date Reservation</td>
            <td>tarif Reservation</td>
            <td>Num adherent</td>
            <td>Num Herbergement</td>
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

                <td><?php echo $ligne->numheberg; ?></td>
                <!--<td><a href="<?php// $this->Reservation->ValiderReserv();?>"><img src="<?php// echo base_url();?>image/redcros.png"></a></td>-->
    
    
            </tr>
        <?php
        }
        ?>
    
    </table>
        </div>
        
    
    <?php
        }else {
    ?>
        <div class="container">
          <br>
          <br>
                <div class="alert alert-danger" role="alert">
                 Vous n'avez pas encore fait de reservation 
        </div>
        
    <?php
        }
    ?> 
        
       