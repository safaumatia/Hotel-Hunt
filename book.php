<?php

session_start();

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "Connection Successful";
}else{
	echo "Connection Failed.Please try again later";
}

mysqli_select_db($con, 'hotelhunt');

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$add = $_POST['address'];
$hn = $_POST['hname'];
$adl = $_POST['adults'];
$kid = $_POST['kids'];
$room = $_POST['rooms']; 
$cin = $_POST['checkin'];
$cout = $_POST['checkout'];
$checkbox1=$_POST['services'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

{

	$qy = " insert into book(name, email, contact, address, hotelname, no_adults, no_kids, no_rooms, checkin_date, checkout_date, services) values ('$name', '$email', '$contact', '$add', '$hn', '$adl', '$kid', '$room', '$cin' , '$cout' , '$chk') ";
	$ch = mysqli_query($con, $qy);
}
}

if($ch==1)  
   {  
     
      echo'<script>alert("Inserted Successfully")</script>';
      $to = $email;
      $subject = "BOOKING CONFIRMED!!";
      $body ="DEAR ".$name." YOUR BOOKING HAS BEEN CONFIRMED IN ".$hn."\nPLEASE VISIT OUR WEBSITE 'Hotel Hunt' FOR FURTHER DETAILS, THANK YOU :)";
      $headers = "From: HotelHunt777@gmail.com";
      $res = mail($to,$subject,$body,$headers);

     
 
      $query = "Select * From resortdetail where name  = '$hn'" ;
      $res = mysqli_query($con,$query);
      $h = mysqli_fetch_assoc($res);
      $h_mail = $h['email'];
      
     
      $to = $h_mail;
      $subject = "A BOOKING HAS BEEN CONFIRMED BY ".$email." IN YOUR HOTEL";
      $body ="PLEASE VISIT OUR WEBSITE 'Hotel Hunt' FOR FURTHER DETAILS, THANK YOU :)";
      $headers = "From: HotelHunt777@gmail.com";
      $res = mail($to,$subject,$body,$headers);
      
       $_SESSION['name'] = $name;
     
      header('location: bcon.php');

      
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
?>