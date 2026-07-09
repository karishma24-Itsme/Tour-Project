<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="tour";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "insert into contact(Name, Email, Phone, Subject, Message)
VALUES ('$name','$email','$phone','$subject','$message')";

$result = mysqli_query($conn, $sql);   // <-- Ye line missing thi

if($result){
    mysqli_close($conn);
    header("Location: thankyou.php");
    exit();
}else{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>