<?php
   $server="localhost";
   $username="root";
   $password="";
   $database="admin"
   $con==mysql_connect($server,$usernme,$password,$database);
   if(!con){
   	echo "<script>alert('connection failed')</script>";
   }

?>