<?php
//session_start();

include "connection.php";


$con = con_function();
$id=0;
$id = $_GET['id123'];

$sql = "DELETE FROM user WHERE user.uid = $id ";
$check = $con->query($sql);


if($check){
	header("location:user.php?msg=deleted successfully");
}else{
	echo $con->error;
}

$con->close();

?>
