<?php


$servername = "localhost";
$username = "root"; 
$password = "";
$dbName = "prettify";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['myusername']) && isset($_POST['name']) && isset($_POST['mypassword'])) {
        $username = $_POST['myusername'];
        $name = $_POST['myname'];
        $password = $_POST['mypassword'];

    } else {
        echo "<p>Wrong Username or Password. Please try again.";
    }
}

if (isset($username) && isset($name) && isset($password)) {
    $sql = "SELECT username, name, password FROM admin WHERE username='$username', name='$name' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("location: adminHome.php");
        exit();
    } else {
        echo "<p>Wrong Username or Password. Please try again.";
    }
}

$conn->close();
?>
