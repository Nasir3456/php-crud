<?php 
    
    include 'config.php';

    $name = $_POST['sname'];
    $address = $_POST['saddress'];
    $class = $_POST['class'];
    $phone = $_POST['sphone'];


    $query = mysqli_query($con,"INSERT INTO records( `sname`, `saddress`, `sclass`, `sphone`) VALUE ('{$name}','{$address}','{$class}','{$phone}')");

    header("Location: http://localhost/crud/crud_html/index.php");
    
?>