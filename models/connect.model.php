<?php

/*on prépare la connexion à la base de données*/
define('SERVER',"localhost");
define('USER',"favoris_user");
define('PASSWD',"YNJuzTq/(WqE5lVR");
define('BASE',"votes_fil_rouge");


$dsn="mysql:dbname=".BASE.";host=".SERVER;

try{
/*connexion à la base de données*/
    $GLOBALS["pdo"]=new PDO($dsn,USER,PASSWD);
} catch(PDOException $e){
    echo "Echec de la connexion: %s\n" .$e->getMessage();
    exit();
}