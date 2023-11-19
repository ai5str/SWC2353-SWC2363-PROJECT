<?php

$servername = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbName = "prettify"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed." . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $password = $_POST["password"];

    if (empty($username) || empty($name) || empty($password)) {
        echo "<p class='error'>Username, name, and password are required.</p>";
    } else {
        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO users (username, name, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $name, $password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<p class='success'>Registration successful for user: $username</p>";

            header("Location: home.txt.php");
            exit();
        } else {
            echo "<p class='error'>Error in registration. Please try again later.</p>";
        }

        // Close statement
        $stmt->close();
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: verdana;
            background-image: url("blue2.jpg");
            background-size: cover;
            background-position: center;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        .container {
            max-width: 400px;
            margin: 200px auto;
            background-color: ghostwhite;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: ghostwhite;
        }

        button {
            background-color: #e2f1f6;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cccccc;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <h2>Registration Form</h2>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html>
