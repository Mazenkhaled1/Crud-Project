<?php
$servername="localhost";
$username="root" ;
$password="" ;
$dbname="crud_php_mysql";


// connection wiht our database 
$conn = mysqli_connect($servername,$username,$password,$dbname ) ;

// not $conn 
if(!$conn) { 
    
    die("connection failed: " . mysqli_connect_error()) ;
}


