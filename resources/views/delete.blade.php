<?php
//delete.php
$dog= mysqli_connect("localhost", "root", "");
$cat = mysqli_select_db($dog,"canete"); 

$query = mysqli_query($dog, "DELETE FROM tablestructure WHERE ID = '".$_GET['id']."'") or die(mysqli_error());
//$query = mysqli_query($con,"Update student SET status='Deleted' WHERE studID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{	
	echo"Record successfully deleted";
}

echo "<a href=http://127.0.0.1:8000/User><input type='button' value='Back'/></a>";
?>