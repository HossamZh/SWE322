<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP 01</title>
   <style>
       
* {
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
      
}

body {
  margin: 0;
  font-family: Helvetica, Arial, sans-serif;
  background-color: #C7C1DB;
}


.topnav {
  overflow: hidden;
  background-color: #333;
      
}


.topnav a {
  float: center;
  display: block;
  color: #B0A0FC;
  text-align: center;
  padding: 15px 20px;
}


.topnav a:hover {
  background-color: #B0A0FC;
  color: red;
}


.content {
  background-color: #9B9B9B;
  padding: 10px;
  height: 200px; 
  text-align: center;
  color: #061C56;
}


.footer {
  background-color: #B0A0FC;
  padding: 8px;
  text-align: center;    
}
</style>
</head>


<body>

<div class="topnav">
    
  <a href="<?php echo "form.php"; ?>">Click Here For Calculator</a>
  
</div>


<div class="content">
  <?php
echo "<h1> My First PHP Assignment </h1> ";    
echo "<h2> Name: Hossam AlZahrani </h2> ";
echo "<h3> ID: 201511048 </h3> ";    
    ?>
</div>
    
  


<div class="footer">
 <?php
echo "<h4> 18, September 2020 </h4> ";   
    ?>
</div>



</body>
</html>
