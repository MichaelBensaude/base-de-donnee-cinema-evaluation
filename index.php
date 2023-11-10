<?php
try {
$hostname = "localhost";
$dbname="cours_studi";
$user="root";
$pw ="";

$pdo = new PDO("mysql:host=$hostname;dbname=$dbname",$user,$pw );
echo 'vous etes bien connecter a la base de donnees ';
} 
catch (PDOexception $e){
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
}