<?php
$host_name = "db744309439.db.1and1.com";
$user = "dbo744309439";
$pass= "BUYUKcem1998#";
$bdd = "db744309439";
        try {
                $dbh = new PDO("mysql:host=$host_name;dbname=$bdd",$user,$pass);

            }
        catch (PDOException $e){
        	print "Erreur !: " . $e->getMessage() . "<br/>";
				  die();

        }
?>
