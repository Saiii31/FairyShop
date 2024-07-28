<?php
 

    $server = "localhost";
	$db = "fairy";
	$user = "root";
	$pwd = "";

$conn = mysqli_connect($server,$user,$pwd,$db);

    $name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	/*echo "welcome ".$name." your email is: ".$email." , contact :".$contact;*/
	$sql = "Insert into user(name, email, subject, message) values('$name','$email','$subject','$message')";

	$run = mysqli_query($conn,$sql);

	if($run)
	{
       header('location:contact_1.php');
	}
	
?>