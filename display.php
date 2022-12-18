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
$new_password=$_POST['password'];
$sql = "Select name,enr,DOB,batch,contact_no,email from student where userId = '$userId' &&  new_password ='$new_password'";
$result = mysqli_query($conn,$sql);
echo mysqli_error($conn);

if(! $result ) {
    die('Could not get data: ' . mysql_error());
 }
 while($row = $result-> fetch_assoc()) {
     echo "DETAILS <br>";
    echo "name :{$row["name"]}  <br> ".
       "enrollment : {$row["enr"]} <br> ".
       "DOB :{$row["DOB"]}  <br> ".
       "batch :{$row["batch"]}  <br> ".
       "contact_no :{$row["contact_no"]}  <br> ".
       "email :{$row["email"]}  <br> ".
       "--------------------------------<br>";
 }
 mysqli_free_result($result);
?>