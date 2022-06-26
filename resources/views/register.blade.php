<?php

$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"canete"); 


$_POST[('ID')]= $_GET[('ID')];
$_POST[('firstname')]= $_GET[('firstname')];
$_POST[('lastname')]= $_GET[('lastname')];
$_POST[('MI')]= $_GET[('MI')];
$_POST[('course')]= $_GET[('course')];
$_POST[('yearlevel')]= $_GET[('yearlevel')];
$_POST[('uname')]= $_GET[('uname')];
$_POST[('pwd')]= $_GET[('pwd')];
$query = mysqli_query($con,"INSERT INTO tablestructure (ID,firstname,lastname,MI,course,yearlevel, uname, pwd) VALUES ('$_POST[ID]','$_POST[firstname]','$_POST[lastname]','$_POST[MI]','$_POST[course]','$_POST[yearlevel]','$_POST[uname]','$_POST[pwd]')");
if(!$query){
    echo "Alert! Student not added.";
}
else{
    echo "Student successfully added!";
}

echo "<a href='http://127.0.0.1:8000/'><input type='button' value='Back'/></a>";

?>