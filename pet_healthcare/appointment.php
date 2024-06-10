<?php
include "conn.php";


if (isset($_POST['submit'])) {

    $pet_name = $_POST['pet_name'];
    $owner_name = $_POST['owner_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $preferred_date = $_POST['preferred_date'];
    $message = $_POST['message'];
    $date = $_POST['preferred_date'];
    // Insert data into appointments table
    $sql = "INSERT INTO `healthcare`(`pet_name`, `owner_name`, `email`, `phone`, `date`, `message`) VALUES ('$pet_name','$owner_name','$email','$phone','$date','$message')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>
        alert('Appointment Register successfully');
        window.location.href='pet_healthcare.html';
      </script>";    }
}
