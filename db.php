<?php
$host = "localhost";
$user = "root";     // change si nécessaire
$pass = "";         // mot de passe si nécessaire
$db   = "todo_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion: " . $conn->connect_error);
}
?>