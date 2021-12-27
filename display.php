<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* header */
.table
  {
display:block;
overflow:auto;
height:100%;
background-color:red;
border:2px ;
}



/* Responsive layout */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 150%;
    padding: 0;
  }
}
</style>
</head>
<body>

  <h1 style="text-align:center" >Blogs</h1>

<form action="displaysearch.php" method="post">
        

        <label for="search">search:</label>
        <input type="text" name="search" placeholder="Name of the blogger"> 

    </form>

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




<?php  while($row = mysqli_fetch_assoc($result))
{
  ?>
 
      <h2>- <?php echo $row["b_title"];?>  </h2>
      <h5>- <?php echo $row["b_name"];?> </h5>
      <p>-

      <?php echo $row["blog"];?>  
</p>
<p>--------------------</p>
    

<?php
}
?>
 
   

</body>
</html>




