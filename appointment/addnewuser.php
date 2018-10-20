<?php
session_start();


$conn = new mysqli("localhost", "user", "user","db2");
if ($conn->connect_error) {
    die("Connection failed");
} 
$id = $_POST['id'];
$date = $_POST['date'];
$mobile = $_POST['mobile'];
$email =  $_POST['email'];
$name =  $_POST['name'];

$result = mysqli_query($conn, "SELECT * FROM appointment
    WHERE id IN ('$id')");

while ($row = mysqli_fetch_array($result))
{
$_session['error']=1;	
header("Location: appointment.php#signup");
mysqli_close($conn);
exit;
}
mysqli_query($conn, "insert into appointment(id,date,name,mobile,email) VALUES('$id','$date','$name','$mobile','$email')");

header("Location: ../mitscounsel.html");
mysqli_close($conn);
exit;


?>