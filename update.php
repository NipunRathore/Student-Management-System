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
$name=$_POST['name'];
$enrollment=$_POST['enrollment'];
$batch=$_POST['batch'];
$DOB=$_POST['DOB'];
$email=$_POST['email'];
$contact_no=$_POST['contact_no'];
$userId=$_POST['userId'];
$new_password=$_POST['new_password'];

$sql = "UPDATE `student` SET `name`='$name',`enr`=$enrollment,`batch`='$batch',`dob`='$DOB',`email`='$email',`contact_no`=$contact_no  where userID='$userId' && new_password='$new_password'";
$result = mysqli_query($conn,$sql);
echo mysqli_error($conn);
if($result)
{
  echo 'UPDATED SUCESSFULLY!!!';
}
else
{
  echo 'TRY AGAIN !';
}
?>
