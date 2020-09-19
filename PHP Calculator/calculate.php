<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calculator Result</title>
   <style>
    
* {
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
  padding: 10px 20px;
}

body {
  margin: 10;
  font-family: Helvetica, Arial, sans-serif;
  background-color: lightslategrey;
}


.content {
  background-color: #B0A0FC;
  display: block;
  text-align: center;
  color: #061C56;    
}

</style>
</head>


<body>
    
    <div class="content">
        
       <?php
     
				if(isset($_GET['submit']))
				{
                    
					//Check if 'num1' and 'num2' is numeric
					if(is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) 
					{
                      
						if($_GET['action'] == '+')
						{
							$total = $_GET['num1'] + $_GET['num2'];	
						}
						if($_GET['action'] == '-')
						{
							$total = $_GET['num1'] - $_GET['num2'];	
						}
						if($_GET['action'] == '*')
						{
							$total = $_GET['num1'] * $_GET['num2'];	
						}
						if($_GET['action'] == '/')
						{
							$total = $_GET['num1'] / $_GET['num2'];	
						}
                        
                       //Print the total    
                    echo "<h1>{$_GET['num1']} {$_GET['action']} {$_GET['num2']} = {$total}</h1>";    
						         
					
                       
					} else {
						
						//Error message 
                        echo "<h2> You Must Enter Numbers Only!</h2> "; 
					
					}
                    
                
				}
			
			?>
 
</div>
    
    

</body>
</html>
