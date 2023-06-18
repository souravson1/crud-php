<?php

$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$class = $_POST['class'];
$sphone = $_POST['sphone'];


include 'config.php';

$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES('$sname', '$saddress', '$class', '$sphone')";

$result = mysqli_query($conn, $sql) or die("query failed");


header("Location: http://localhost/crud_html/index.php");


mysql_close($conn);
?>