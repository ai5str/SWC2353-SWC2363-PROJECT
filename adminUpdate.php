<!DOCTYPE html>
<html>
<head>
    <title>Update Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #808080;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .page-header 
        {
            background-color: #eff7fa;
            color: #656565;
            text-align: center;
            padding: 20px;
        }

        #upload_container{
            margin: 10% auto;
            display: flex;
            flex-direction: column;
            width: 30%;
        }

        #upload_container form{
            display: flex;
            flex-direction: column;
        }

        #upload_container form input{
            padding: 8px;
            outline: none;
            border: 1px solid lightblue;
            margin-bottom: 8px;
        }

        #upload_container form input::placeholder {
            width: 150px;
        }

        #upload_container form button{
            padding: 8px;
            outline: none;
            background-color: lightblue;
            border: none;
            margin-bottom: 8px;
            cursor: pointer;
        }

        #upload_container form input[type="submit"]{
            background-color: lightblue;
            border: none;
        }

        #upload_container form input[type="submit"]:hover{
            background-color: white;
            cursor: pointer;
            border: 1px solid lightblue;

        }
        .messages {
            text-align: center;
            font-size: 15px;
            margin-top: 10px;
        }

        .messages p a {
            color: white;
        }
    </style>
</head>
<body>
    <header class="page-header">
        <h1>Update Products Page</h1>
    </header>
    
    <div class="container">
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
            // Check if productID is set and not empty
            if (isset($_POST['productID']) && !empty($_POST['productID'])) {
                // Sanitize input to prevent SQL injection
                $productID = $conn->real_escape_string($_POST['productID']);

                // Check if productName and price are set and not empty
                if (isset($_POST['productName']) && !empty($_POST['productName']) &&
                    isset($_POST['price']) && !empty($_POST['price'])) {
                    $productName = $conn->real_escape_string($_POST['productName']);
                    $price = $conn->real_escape_string($_POST['price']);

                    // SQL query to update a record
                    $sql = "UPDATE products SET productName = '$productName', price = '$price' WHERE productID = '$productID'";

                    if ($conn->query($sql) == TRUE) {
                        // Check if any rows were affected by the UPDATE operation
                        if ($conn->affected_rows > 0) {
                            echo "<script>alert('Your product was updated successfully')</script>";
                        } else {
                            echo "<script>alert('No record found with the provided productID.')</script>";
                        }
                    } else {
                        echo "<script>alert('Error updating record: ')</script>" . $conn->error;
                    }
                } else {
                    echo "<script>alert('Invalid productName or price. Please provide valid values.')</script>";
                }
            } else {
                echo "<script>alert('Invalid productID. Please provide a valid productID.')</script>";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
    <section id="upload_container">
        <form action="adminUpdate.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="productID" id="productID" placeholder="Product ID" required>
            <input type="text" name="productName" id="productName" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="submit" value="Update">
        </form>

        <div class="messages">
            <p><a href="adminHome.php">Back to Main Menu</a></p>
        </div>
    </section>

    </div>
</body>
</html>