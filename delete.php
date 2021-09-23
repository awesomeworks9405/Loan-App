<?php 

include 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM clients WHERE id = $id";
    $result = mysqli_query($connect, $query);


    header('location: home.php');

}

?>