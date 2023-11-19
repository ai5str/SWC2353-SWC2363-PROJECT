<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Admin</title>
    <style>
        body {
            font-family: verdana;
            background-color: #808080;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .page-header {
            background-color: #eff7fa;
            color: #656565;
            text-align: center;
            padding: 20px;
        }
        #upload_container {
            text-align: left;
            margin: 100px auto;
            max-width: 400px;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: lightblue;
            color: #3d3d3d;
            width: 30%;
            height: 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-left: 140px;
        }
        input[type="submit"]:hover {
            background-color: white;
        }
        
        .messages {
            text-align: center;
            margin-top: 10px;

        }
    </style>
</head>
<body>
    <header class="page-header">
        <h1><b>Add Admin Page</b></h1>
    </header>
    <section id="upload_container">
        <?php
        include("connection.php");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $adminName = $_POST['adminName'];

            if (empty($username) || empty($password) || empty($adminName)) {
                echo "<script>alert('Username and password are required.')</script>";
            } else {

                $checkSql = "SELECT * FROM admin WHERE username = '$username'";
                $checkResult = $conn->query($checkSql);

                if ($checkResult->num_rows > 0) {
                    echo "<script>alert('Username already exists. Please choose a different username.')</script>";
                } else {
                
                    $sql = "INSERT INTO admin (username, password, adminName) VALUES ('$username', '$password', '$adminName')";
                    $result = $conn->query($sql);

                    if ($result) {
                        echo "<script>alert('Admin created successfully!')</script>";
                    } else {
                        echo "<script>alert('Error inserting admin: ')</script>" . $conn->error;
                    }
                }

                $checkResult->close();
            }

            $conn->close();
        }
        ?>
        <form action="addAdmin.PHP" method="POST" enctype="multipart/form-data" >
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" required><br>

            <label for="adminName">Name:</label>
            <input type="text" name="adminName" placeholder="Admin Name" required>

            <input type="submit" value="Add New Admin">

            <div class="messages">
            <p><a href="adminHome.php">Back to Main Menu</a></p>
        </div>
        </form>
    </section>
</body>
</html>