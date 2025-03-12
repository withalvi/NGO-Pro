<?php

setcookie("is_login",true, time()- 10 );
 header("Location:login.php")
?>