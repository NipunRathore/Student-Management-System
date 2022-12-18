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
$check="select * from student where userId='$userId'";
$checkres = mysqli_query($conn,$check);
$result=mysqli_num_rows($checkres);

$sql = "INSERT INTO `student`(`name`, `enr`, `batch`, `dob`, `email`, `contact_no`, `userId`, `new_password`)
 VALUES ('$name',$enrollment,'$batch','$DOB','$email',$contact_no,'$userId','$new_password')";
$result = mysqli_query($conn,$sql);
echo mysqli_error($conn);
if($result)
{
  echo 'REGISTERED SUCESSFULLY!!!';
}
else
{
  echo 'TRY AGAIN';
}
?>
