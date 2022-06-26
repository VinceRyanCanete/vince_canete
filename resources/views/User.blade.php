<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Privilage</title>
</head>
<body style="background-color: lightblue">
    <pq style = "padding-left :42%;  padding:auto 0;font-size:30px;font-weight:bolder;color: black;font-weight:bolder;"> Welcome User!</pq>
  
<?php
$dog= mysqli_connect("localhost", "root", "");
$cat = mysqli_select_db($dog,"canete"); 
$query = mysqli_query($dog, "SELECT * FROM tablestructure") or die(mysqli_error());
?>	 


	<div id="main-container"><center>

    <a10 style ="font-size : 30px;text-align:center; color:black;font-weight:bolder;"><br>Database Record</a10>
        <?php 
    echo "<table border='1'>
    <tr style='text-decoration:none;background-color:yellow;font-size:20px'>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Middle Initial</th>
            <th>Course</th>
            <th>Year</th>
            <th>UserLevel</th>
            <th>Status</th>
            
         </tr>";
         
    while($row = mysqli_fetch_array($query)){
        echo "<tr style='text-decoration:none;background-color:#b3d1ff;font-size:20px;text-align:center;'>
        <td>$row[ID]</td>
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[MI]</td>
        <td>$row[course]</td>
        <td>$row[yearlevel]</td>
        <td>$row[userlevel]</td>
        <td>$row[status]</td><br>
        <td align='center'><a style='text-decoration:none;' href='http://127.0.0.1:8000/delete?id=$row[ID]'>Delete</a></td>
        <td align='center'><a style='text-decoration:none;' href='http://127.0.0.1:8000/update?id=$row[ID]'>Update</a></td>
              </tr>";
    }
    echo "</table><br><br>"
?>
		<a href='http://127.0.0.1:8000' style = "border:3px solid black; font-size:30px;text-decoration:none;padding: 5px;color:white;background-color:#000099">Logout</a>
        <a href='http://127.0.0.1:8000/add' style = "border:3px solid black; font-size:30px;text-decoration:none;padding: 5px;color:white;background-color:#000099;">Add</a>
		</ul>
        </table></center>
	</div>
    </body>
</html>