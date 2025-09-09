<?php
include 'db.php';

if (isset($_POST['task'])) {
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (title) VALUES ('$task')";
    if ($conn->query($sql) === TRUE) {
        // Succès → retour vers index
        header("Location: index.php");
        exit();
    
    }
 
}

?>