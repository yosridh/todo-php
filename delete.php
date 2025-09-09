<?php
include 'db.php'; 

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $conn->query("delete from tasks where id=$id");
}
header ('location:index.php');

exit();


?>