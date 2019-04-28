<?php
    $user="dbu137322";

    $host_name = 'localhost';
    $database = 'ppe';
    $user_name = 'makeflo';
    $password = 'test';
    $dbh = new mysqli($host_name, $user_name, $password, $database);
    / 40 logements : entrée, douche et wc, 2 chambres à 2 lits avec coin toilette et balcon. 

    for($i=0;$i<39;$i++){
        $sql='INSERT INTO `hebergement`(aile,etage,numtype) VALUES ("A" ,"1" , 1)';
    

        if (mysqli_query($dbh, $sql)) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($dbh);
      }  
  }

  //  15 chambres doubles : entrée, douche et wc, 1 lit double 
  for($i=0;$i<14;$i++){
    $sql='INSERT INTO `hebergement`(aile,etage,numtype) VALUES ("A" ,"2" , 2)';
    if (mysqli_query($dbh, $sql)) {
      echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbh);
    }  
  }

  
  //   8 chambres de 3 lits séparés par une cloison mobile avec coin toilette, wc, douche. 
  for($i=0;$i<8;$i++){
    $sql='INSERT INTO `hebergement`(aile,etage,numtype) VALUES ("B" ,"3" , 3)';
    if (mysqli_query($dbh, $sql)) {
      echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbh);
    }  
  }


  //   12 chambres de 4 lits séparés par une cloison mobile avec douche, wc et balcon.
  for($i=0;$i<39;$i++){
    $sql='INSERT INTO `hebergement`(aile,etage,numtype) VALUES ("B" ,"4" , 4)';
    if (mysqli_query($dbh, $sql)) {
      echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbh);
    }  
  }


  //  1 logement adapté pour les personnes à mobilité réduite.
  for($i=0;$i<1;$i++){
    $sql='INSERT INTO `hebergement`(aile,etage,numtype) VALUES ("A" ,"5" , 5)';
    if (mysqli_query($dbh, $sql)) {
      echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbh);
    }  
  }
  mysqli_close($dbh);
?>