<!DOCTYPE HTML>
<html>
    <head>
        <style>
   * {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}
     table {
  background-color:bisque;
  margin-top: 50px;
  font-family: "Estonia", cursive;
}
th, td {
  padding-top: 10px;
  padding-bottom: 15px;
  padding-left: 30px;
  padding-right: 40px;
}

</style>
</head>
    <body>
    <center><h2>Others</h2></center>
    <br>
 
    <?php
    include("projectphp.php");
 
    $search = $_POST["search"];
 
    $queryn = "select * from blog_contentt where b_name = '$search'"; 
    $resultn = mysqli_query($con,$queryn);
    if($resultn)
    {
       
    }
    else{
        echo "unsuccessful".mysqli_error($con);
    }
   
    ?>
    <?php  while($roww = mysqli_fetch_assoc($resultn))
{
  ?>

      <h2> <?php echo $roww["b_title"];?>  </h2>
      <h5> <?php echo $roww["b_name"];?> </h5>
      <p>

      <?php echo $roww["blog"];?>  
</p>
<p>--------------------</p>
<?php
}
?>
    
 
    </body>
</html>