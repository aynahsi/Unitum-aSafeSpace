<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}
</style>
</head>
<body>
<?php
include("projectphp.php");
$username=$_POST["username"];
$password=$_POST["password"];
$insertdata="INSERT INTO users(username,password) VALUES('$username','$password')";
$insertresult= mysqli_query($con,$insertdata);

if($insertresult)
{
    echo "<br>successfully registration!<br>";
}
else
{
    echo "Username already exists<br><br>insertion failed ".mysqli_error($con);
}
?>
<a href="BlogDisplay.html" target="_blank">go to blogs</a>

</body>
</html>

