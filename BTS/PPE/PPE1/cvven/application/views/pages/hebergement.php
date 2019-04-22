<br>
  <br>
  <br>  <br>

 
<div class="container">
  <div class="row">


      <div class="col-1"> 
      </div>

      <div class="col-7">
          <div class="hotel_img">
              <?php
              if ($_GET['']==1) {
                ?>
                    <img src="<?php echo base_url();?>image/room1.jpg" alt="">  
            <?php }?>
            
            <?php
        switch ($_GET['data']==1) {
            case 1:
                echo "";
                break;
            case 2:
                echo "15 chambres doubles : entrée, douche et wc, 1 lit double";
                break;
             
            case 3:
                echo "8 chambres de 3 lits séparés par une cloison mobile avec coin toilette, wc, douche.";
                break;
            case 4:
                echo "12 chambres de 4 lits séparés par une cloison mobile avec coin toilette, wc, douche.";
                break;
                
            case 5:
                echo "1 logement adapté pour les personnes à mobilité réduite.";
                break;
              }
        ?> 

          </div>
      </div>

      <div class="col-3">
        <?php
        switch ($_GET['data']) {
            case 1:
                echo "40 logements : entrée, douche et wc, 2 chambres à 2 lits avec coin toilette et balcon.";
                break;
            case 2:
                echo "15 chambres doubles : entrée, douche et wc, 1 lit double";
                break;
             
            case 3:
                echo "8 chambres de 3 lits séparés par une cloison mobile avec coin toilette, wc, douche.";
                break;
            case 4:
                echo "12 chambres de 4 lits séparés par une cloison mobile avec coin toilette, wc, douche.";
                break;
                
            case 5:
                echo "1 logement adapté pour les personnes à mobilité réduite.";
                break;
              }
        ?> 
      </div>
  </div>
</div>


  