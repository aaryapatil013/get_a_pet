<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];

$conn = new mysqli('localhost', 'root', '', 'pets_final');
if($conn->connect_error)
{
    die('Connection Failed:'.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into contact(name , email , subject , Message) values (? , ? , ? , ?)");
    $stmt->bind_param("ssss",$name , $email , $subject , $Message);
    $stmt->execute();
    echo "Meassage sent.....";
    $stmt->close();
    $conn->close();
}
?>