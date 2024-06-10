<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Vaccination Information</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        
        section {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 10px;
        }
        
        h2 {
            color: #333;
        }
        
        p {
            line-height: 1.6;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="email"],
        textarea,
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>Buy Pet</h1>
    </header>
    <section id="appointments">
        <h2>Buy A Pet</h2>
        <form method="post">
            <label for="pet_name">Pet Name:</label>
            <input type="text" id="pet_name" name="pet_name" required>
            <label for="owner_name">Your Name:</label>
            <input type="text" id="owner" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            <label for="message">Residence Information:</label>
            <label for="phone">Address:</label>
            <input type="text" id="text" name="address" required>
            <label for="message">Pet Care Experience:</label>
            <input type="text" id="text" name="experiance" required>
            <p>You can pay after recieving your pet buddy.<br>If you don't want COD then contact to our office.</p>
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>
</body>
</html>


<?php
    $conn = new mysqli("localhost", "root", "", "pets_final");

    
    
    if (isset($_POST['submit'])) {
    
        $pet_name = $_POST['pet_name'];
        $owner_name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $experiance = $_POST['experiance'];
        // Insert data into appointments table
        $sql = "INSERT INTO `buy`(`pet_name`, `name`, `email`, `phone`, `address`, `experiance`) VALUES ('$pet_name','$owner_name','$email','$phone','$address','$experiance')";
        $res = mysqli_query($conn, $sql);
    
        if ($res) {
            echo "<script>
            alert('Process completed.We will be in touch with you shortly.');
          </script>";    }
}
    

