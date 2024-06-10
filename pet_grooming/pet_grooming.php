<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pets_final";
    
    $conn =  mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn){
        die("". mysqli_connect_error());
    }


if (isset($_POST['submit'])) {
    $pet_name = $_POST['pet-name'];
    $owner_name = $_POST['owner-name'];
    $service = $_POST['service'];
    $appointmentDate = $_POST['appointment-date'];
    $appointmentTime = $_POST['appointment-time'];

    $appointmentDateTime = $appointmentDate . ' ' . $appointmentTime . ':00';


$sql="INSERT INTO `grooming`(`pet_name`, `owner_name`, `services`, `appoinment_date`, `appoinment_time`) VALUES ('$pet_name','$owner_name','$service','$appointmentDate','$appointmentDateTime')";
echo $sql;
$res=mysqli_query($conn,$sql);

if($res){
    echo "<script>
    alert('Appointment Confirmed.');
    window.location.href='pet_grooming.html';
  </script>";
}
}
?>