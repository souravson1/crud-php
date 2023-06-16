<?php
$sid = $_POST['sid'];
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection Failed");
$sql = "UPDATE student SET sname = '{$sname}', saddress = '{$saddress}', sclass = '{$sclass}', sphone = '{$sphone}' WHERE sid = '{$sid}'";

$result = mysqli_query($conn, $sql) or die("query failed");


header("Location: http://localhost/crud_html/index.php");


mysql_close($conn);
?>