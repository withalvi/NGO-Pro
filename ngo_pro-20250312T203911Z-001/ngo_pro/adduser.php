
<?php
    $name = $_POST["name"]; 
	$email = $_POST["email"]; 
	$pass = $_POST["pass"]; 
	
    $db =  mysqli_connect("127.0.0.1", "root" , "", "ngo_users");
	
	if ($db->connect_error) {
         echo "something wrong with datababse connection";
     }
	 else{
		 echo "succesfull";
	 }
	 
	 $x = "INSERT INTO ngo_reg VALUES ('', '$name', '$email', '$pass')";
	 
	 $db->query($x);
	 header("location:login.php");

	 ?>