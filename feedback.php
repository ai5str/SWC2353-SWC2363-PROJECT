<?php

include("menubar.php");

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
    $feedback = $_POST["feedback"];

    if (empty($username) || empty($feedback)) {
        echo "<p class='error'>Username and feedback are required.</p>";
    } else {
        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO feedback (username, feedback) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $feedback);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<p class='success'>Thank you for your feedback, $username!</p>";
        } else {
            echo "<p class='error'>Error inserting feedback. Please try again later.</p>";
        }

        // Close statement
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: verdana;
            background-color: #e2f1f6;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        #feedback-form {
            max-width: 400px;
            margin: 100px auto;
            background-color: ghostwhite;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
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

        .error {
            color: red;
        }

        .success {
            color: green;
        }

    </style>
</head>
<body>

<div id="feedback-form">
    <h2>Feedback Form</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea>

        <button type="submit">Submit Feedback</button>
    </form>
</div>

</body>
</html>
