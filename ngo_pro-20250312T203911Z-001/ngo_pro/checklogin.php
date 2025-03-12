<?php
   $email = $_GET["email"];
   $pass = $_GET["pass"];
   $db =  mysqli_connect("127.0.0.1", "root" , "", "ngo_users");
   $x = "SELECT * FROM ngo_reg WHERE email='$email' and pass='$pass'";
   $result = $db->query($x);
   
   
	

   if( $result->num_rows > 0){
	  if(isset($_GET["remember"])){
       setcookie("is_login",true, time()+ 600);
	  }
      else{
       setcookie("is_login",true, time()+ 20);
	  }		  
	  setcookie("user", $email, time()+600);  
	  header("Location:lending.php");
   }
   else{
	   setcookie("login_error","Incorrect password", time()+ 600 );
	   header("Location:login.php");   
   }

?>