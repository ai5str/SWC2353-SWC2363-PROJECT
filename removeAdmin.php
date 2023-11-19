<!DOCTYPE html>
<html>
<head>
    <title>Delete Admin</title>
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
        .pop-up {
            border: 1px solid green;
            padding: 10px;
            margin-top: 10px;
            background-color: lightgreen;
        }
        .messages {
            text-align: center;
            margin-top: 10px;

        }
    </style>
</head>
<body>
    <header class="page-header">
        <h1>Remove Admin Page</h1>
    </header>
    
    <section id="upload_container">
        
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prettify";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if product_id is set and not empty
            if (isset($_POST['username']) && !empty($_POST['username'])) {
                // Sanitize input to prevent SQL injection
                $username = $conn->real_escape_string($_POST['username']);

                // SQL query to delete a record
                $sql = "DELETE FROM admin WHERE username = '$username'";

                if ($conn->query($sql) === TRUE) {
                    // Check if any rows were affected by the DELETE operation
                    if ($conn->affected_rows > 0) {
                        echo "<script>alert('Record deleted successfully')</script>";
                    } else {
                        echo "<script>alert('No record found with the provided username.')</script>";
                    }
                } else {
                    echo "<script>alert('Error deleting record: ')</script>" . $conn->error;
                }
            } else {
                echo "<script>alert('Invalid username. Please provide a valid username.')</script>";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="#">Remove Admin:</label>
            <input type="text" name="username" id="username" autocomplete="off">
            <input type="submit" value="Delete">

            <div class="messages">
            <p><a href="adminHome.php">Back to Main Menu</a></p>
        </div>
        </form>
    </div>
</section>
</body>
</html>