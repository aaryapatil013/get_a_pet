<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pets_final";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $petName = $_POST['pet-name'];
    $ownerName = $_POST['owner-name'];
    $trainer = $_POST['trainer'];
    $appointmentDate = $_POST['appointment-date'];
    $appointmentTime = $_POST['appointment-time'];

    $appointmentDateTime = $appointmentDate . ' ' . $appointmentTime . ':00';

    // Prepare SQL query
    $sql = "INSERT INTO `traning` (`pet_name`, `owner_name`, `choose_trainer`, `appoinment_date`, `appoinment_time`) VALUES ('$petName', '$ownerName', '$trainer', '$appointmentDate', '$appointmentDateTime')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>
        alert('Traning Inserted successfully');
        window.location.href='pet_training.html';
      </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
