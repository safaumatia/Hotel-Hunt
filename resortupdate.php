<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'hotelhunt');

$id=$_GET['id'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$contact = $_POST['contactno'];
$email = $_POST['email'];

$qy = "update resortdetail set price=$price, discount=$discount, contactno=$contact, email=$email where id=$id";

$query = mysqli_query($con, $qy);

if($query==1){

header('location: resortdisplay.php');
}else{
	echo "not";
}




?>