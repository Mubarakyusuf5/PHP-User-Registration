<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `users` WHERE id=$id";
    $result = mysqli_query($con,$sql);
    if ($result) {
        header('Location:log.php');
    }else{
        die(mysqli_error($con));
    }

}