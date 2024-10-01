<?php

include 'config.php';
$id = $_POST['sid'];
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['sclass'];
$phone = $_POST['sphone'];

$query = mysqli_query($con,"UPDATE `records` SET `sname`='{$name}',`saddress`='{$address}',`sclass`='{$class}',`sphone`='{$phone}' WHERE sid = '{$id}'") or die("update failed");

// echo $class;
header("Location: http://localhost/crud/crud_html/index.php");

?>