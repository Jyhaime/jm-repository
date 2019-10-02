<?php 


function dbConnect() {
    
    try{$db= new PDO('mysql:host=localhost;dbname=velo_db;charset=utf8','root','');

        return $db;
        }
    catch(Expression $e){
        die('Erreur : '.$e->getMessage());

                        }
                     }





?>

