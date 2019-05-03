<?php
		$errors=[];
		if (!array_key_exists('nom',$_POST)|| $_POST['nom'=='']) {
			$errors['nom']="Vous d'avez pas rempli votre nom";
		}
		if (!array_key_exists('prenom',$_POST)|| $_POST['prenom'=='']) {
			$errors['prenom']="Vous d'avez pas rempli votre prenom";
		}
		

		session_start();
		
 
		if(!empty($erros)){
		$_SESSION['errors']=$errors;
                $_SESSION['inputs']=$_POST;
		header('location:index.php');
		}else{
			
                                <?php
                if(isset($_POST['Envoyer'])){ // si le bouton envoyer et valider alors isset determine si variable est definit et differente de Null
                   include'connection.php';//faire la connection à la BDD

                $reqClient="INSERT INTO client (Nom , Prenom) values('".$_POST['nom']."','".$_POST['prenom']."')";

                $resultat=$dbh->exec($reqClient);
          $IDClient=$dbh->lastInsertId();

                    if($resultat==FALSE){
                        print('<div class="alert alert-danger" role="alert">Lenvoie a échoué désoler veuillez recommencer !!</div>');
                    }else {

           $Message=$_POST['Message'];

                        //Insertion de la zones de message
                        //preparation de la requete
                   $MessageStringPro=$dbh->quote($Message);

            $req = ("INSERT INTO MESSAGE (Message , ID_c) values('".$Message."','".$IDClient."')");
            $resultat1=$dbh->exec($req);

                        $i=0;
                        $ID_q=1;
            /*
                      while ($i<= $tab_length ) {
                        //Boucle pour recupere tout les reponses du form $_POST

                      $SQL= "INSERT INTO reponse (ID_c ,ID_q,reponse) values('".$IDClient."','".$ID_q."','".$_POST[$i]."')";


                    $resultat=$dbh->exec($SQL);
                      print('Voici la valeur de ID_q='.$ID_q.'</br>');
                      print('Voici la  valeur de $i='.$i.'</br>');
                      $ID_q=$ID_q+1;
                      $i=$i+1;

                       }
             */


             for ($i=0; $i <$tab_length ; $i++) {
                          $SQL= "INSERT INTO reponse (ID_c ,ID_q,reponse) values('".$IDClient."','".$ID_q."','".$_POST[$i]."')";
                          $resultat=$dbh->exec($SQL);
                          $ID_q=$ID_q+1;
                        }


                    print(' <div class="alert alert-success" role="alert">Merci d`\'avoir repondu au formulaire</div>');


                  }
              }


               

                  $_SESSION['success']=1;
                  header('location:index.php');
                  ?>
                 }
		
                 ?>
