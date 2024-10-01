<?php

include 'config.php';

$id = $_GET['sid'];

$query = mysqli_query($con,"DELETE FROM records WHERE sid = '{$id}'") or die("delete failed");

header("Location: http://localhost/crud/crud_html/index.php");

?>