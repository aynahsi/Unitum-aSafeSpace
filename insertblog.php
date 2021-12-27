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
  background-color: white;
}
</style>
</head>
<body>
<?php
include("projectphp.php");
$b_name=$_POST["namee"];
$b_titlee=$_POST["title"];
$blogg=$_POST["blog"];
$insertdata="INSERT INTO blog_contentt VALUES('$b_name','$b_titlee','$blogg')";
$insertresult= mysqli_query($con,$insertdata);

if($insertresult)
{
    echo "<br>successfully inserted the data<br>";
}
else
{
    echo "<br>insertion failed ".mysqli_error($con);
}
?>
<a href="BlogDisplay.html" target="_self">go to blogs</a>
</body>
</html>
