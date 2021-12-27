<!DOCTYPE HTML>
<html>
    <head>
        <style>
    body {
    background-image: url("ABC.png");
    background-repeat: no-repeat;
    background-size: 200px 200px;
    background-color:wheat;
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
    <center><h1>all blogs.</h1></center>
    <br>
 
    <?php
    include("Projectphp.php");
 
    $query = "select * from blog_contentt "; 
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo"";
    }
    else{
        echo "unsuccessful".mysqli_error($db);
    }
   
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Title </th>
            <th> name </th>
            <th> Blog </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["b_title"];?> </td>
            <td><?php echo $row["b_name"];?> </td>
            <td><?php echo $row["blog"];?> </td>
        </tr>
        <?php
        }
        
        ?>   
    </table>
    </body>
</html>