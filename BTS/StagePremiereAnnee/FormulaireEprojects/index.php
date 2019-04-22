<!--

CREATE TABLE MESSAGE (
ID_message INT(8) PRIMARY KEY AUTO_INCREMENT,
Message VARCHAR(255),
ID_c int(8),

FOREIGN KEY (ID_c)
REFERENCES client(ID_c)

)
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Formulaire de satisfaction eprojects-online" />
  <meta name="keywords" content="Formulaire de satisfaction eprojects-online"/>
  <meta name="author" content="BUYUK cem"/>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link type="text/css" rel="stylesheet" href="css/theme.css">
</head>

<body>
  <IMG class="displayed" src="Image/logo.png" alt="Logo du site">
    <article>
      <header class="survey-page-header">
        <section class="Placement" style="margin-top: 97px;">


                <form method="post" action="cible.php" >
                        </br>
                        <?php
                        include'connection.php';
                        $Tableau=array();
                        $req="SELECT question FROM question";
                        foreach ($dbh->query($req) as $row) {
                          $Tableau[]= $row['question'];
                        }
                        ?>
                        <label for="name" class="h4">*Champs obligatoire</label>
                        <div class="row">
                          <div class="form-group col-md-6">
                          </br>
                          <label for="nom" class="h4">Nom*</label>
                          <input type="text" class="form-control" id="nom" placeholder="Enter votre nom" name="nom"  required value="<?= isset($_SESSION['inputs']['nom'])? $_SESSION['inputs']['name']:'';?>" >
                          <span>
                            <?= isset($_SESSION['errors']['nom'])?'<span class="alert-danger">'.$_SESSION['errors']['name'].'</span>':'';?>
                          </span>

                        </div>
                        <div class="form-group col-md-6">
                        </br>
                        <label for="prenom" class="h4">Prenom*</label>
                        <input type="texte" class="form-control" id="Prenom" name="prenom" placeholder="Enter votre  prenom" required value="<?= isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom']:'';?>">
                      </div>
                    </div>
                    <br>
                    <hr class="style14">
                    <br>
                    <?php
                    $i=0;
                    $tab_length=count($Tableau);
                    while ($i <=$tab_length-1){
                              ?>
                              <div class="intituleQuestion">
                              </br>
                              <?php
                              print($Tableau[$i]);
                              ?>
                            </div>
                          </br>
                          <div class="radio">
                            <label><input type="radio" name="<?php echo $i;?>" value="Exellent" > Exellent</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="<?php echo $i;?>"  value="Bien"> Bien</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="<?php echo $i;?>" value="Moyen"> Moyen</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="<?php echo $i;?>" value="Insuffisant"> Insuffisant</label>

                          </div>

                          <?php
                          $i=$i+1;
                          }
                          ?>
                <div class="style14">
                    <br>
                    <div class="intituleQuestion">
                        </br>
                        <label for="exampleFormControlTextarea1">Message</label>
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Message"></textarea>                                                                              <?php}?>
                    </br>
                    </br>
               </div>
                <button type="submit" value="Envoyer " name="Envoyer" class="btn btn-success btn-lg pull-center ">Valider</button>
        </form>
      </section>
    </article>
</body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['inputs']);
unset($_SESSION['success']);
?>
