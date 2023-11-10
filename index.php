<?php
try {
$hostname = "localhost";
$dbname="cours_studi";
$user="root";
$pw ="";

$pdo = new PDO("mysql:host=$hostname;dbname=$dbname",$user,$pw );
echo 'Réservation :';
echo '<table border="3">';
$title = $pdo->query('SELECT * FROM reservation_vw')->fetch(PDO::FETCH_ASSOC);
if ($title) {
    echo '<tr>';
    foreach ($title as $key => $value) {
        echo '<th>' . $key . '</th>';
    }
    echo '</tr>';
}
foreach ($pdo->query('SELECT * FROM reservation_vw', PDO::FETCH_ASSOC) as $reservation) {
    echo '<tr>';
    foreach ($reservation as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
}
catch (PDOexception $e){
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
}