<?php

$host ="localhost";
$user="root";
$pass="";
$db="dbproject";

$con=mysqli_connect($host,$user,$pass,$db);

if($con)
{
  //  echo"<br>connection established <br>";
}
else
{
    die("<br>connection failed: ".mysqli_connect_error());
}


$createdb=("CREATE DATABASE dbproject");
$createdbres= mysqli_query($con,$createdb);

if($createdb)
{
   // echo"<br>database created";
}
else
{
    echo "<br>error in creating db".mysqli_error($con);
}

//table creation

// $ct="CREATE TABLE blog_contentt( b_name varchar(50),b_title text,blog text)";
// $ctre=mysqli_query($con,$ct);

// if($ctre)
// {
//     echo "<br>successful table";
// }
// else
// {
//     echo "<br>lol error  ".mysqli_error($con);
// }

//Table for User Info

// $userctn="CREATE TABLE users (
//   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//   username VARCHAR(50) NOT NULL,
//   `password` VARCHAR(255) NOT NULL,
//   created_at DATETIME DEFAULT CURRENT_TIMESTAMP
// )";
// $userctnre = mysqli_query($con,$userctn);

// if($userctnre)
// {
    
// }
// else
// {
//     echo "<br>lol error  ".mysqli_error($con);
// }


?>

