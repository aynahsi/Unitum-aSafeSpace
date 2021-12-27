<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:white">
<?php      
    include('projectphp.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con,$sql);  
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            ?>
            <a target="_self" href="BlogDisplay.html" >check out blogs!</a>
            <?php
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            ?>
            <a target="_self" href="login.php" >try again!</a>
            <?php
        }     
?>   

</body>
</html>
