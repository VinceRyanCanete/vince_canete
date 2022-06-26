
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"canete"); 


$username = $_POST['uname'] = $_GET[('uname')];  
$password = $_POST['pwd'] = $_GET[('pwd')];  
      
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from tablestructure where uname = '$username' and pwd = '$password'";  
        $result = mysqli_query($con, $sql)or die( mysqli_error($con));  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            echo "<a href='http://127.0.0.1:8000/User'><input type='button' value='Go to Dashboard'/></a>"; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<a href='http://127.0.0.1:8000'><input type='button' value='Back'/></a>";
        }     
?>
    
</body>
</html>



