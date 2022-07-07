<?php
    //connecting to your server
       $server = "localhost";
	   $username = "root";
	   $password = "";
	   $database = "oziDb";

   //connecting to server 
	   $conn = mysqli_connect($server, $username,$password, $database);
   
   //checking if connection was successful
		if ($conn) {
			echo "<script>alert('Database Connected successfully')</script>";
		}else{
			echo "<script>alert('Error Found, Database Not Connected successfully')</script>";
		} 