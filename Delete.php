<?php
$servername = "localhost";
$username = "root";
$password = "abc";
$database = "student";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry".mysqli_connect_error());
}
mysqli_select_db($conn,'student');
$userId=$_POST['userId'];
$new_password=$_POST['new_password'];

$sql = "Delete from student where userId = '$userId' && new_password = '$new_password'";
$result = mysqli_query($conn,$sql);
echo mysqli_error($conn);
if($result)
{
  echo "Deleted Successfully";
}
else
{
    die('Could not delete the data: ' . mysql_error());
}
?>