<?php 
$users = ["axel"=>"checkezrescript", "thomasd"=>"durevieafpa", "thomasm" => "symfonyclavie", "christophe" => "ggwordpress", "ludo" => "le24cloin"];


// Exercice 3 : On initialise une session
session_start();


// On assigne le token de session à une variable afin de l'afficher plus facilement
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}

?>