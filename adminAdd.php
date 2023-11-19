<?php
include("connection.php");

if (isset($_POST["submit"])) {
	$productID = $_POST["productID"];
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    $cat = $_POST["category"];

    $upload_dir = "uploads/";
    $productImg = $upload_dir . $_FILES["imageUpload"]["name"];
    $upload_file = $upload_dir . basename($_FILES["imageUpload"]["name"]);
    $imgType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
    $check = $_FILES["imageUpload"]["size"];
    $upload_ok = 1;

    if (file_exists($upload_file)) {
        echo "<script>alert('The file already exists')</script>";
        $upload_ok = 0;
    } else {
        if ($check === 0) {
            echo '<script>alert("The photo size is 0 or the file is empty. Please select a valid photo.")</script>';
            $upload_ok = 0;
        } else {
            if (!in_array($imgType, ['jpg', 'jpeg', 'png', 'gif'])) {
                echo '<script>alert("Please change the image format to jpg, jpeg, png, or gif.")</script>';
                $upload_ok = 0;
            }
        }
    }

    if ($upload_ok === 1) {
        if ($productName !== "" && $price !== "") {
            move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $upload_file);

            $sql = "INSERT INTO products (productID,productName, price, cat, productImg) VALUES ('$productID','$productName', $price, '$cat', '$productImg')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Your product was uploaded successfully')</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Products</title>
	<style>
        body {
            font-family: verdana;
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

        #upload_container form button{
            padding: 8px;
            outline: none;
            background-color: lightblue;
            border: none;
            margin-bottom: 8px;
            cursor: pointer;
        }

        #upload_container form input[type="submit"]{
            background-color: #eff7fa;
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

        }

        .messages p a {
            color: white;
        }
	</style>
</head>
<body>
	
	<header class="page-header">
        <h1>Add New Products Page</h1>
    </header>

    
    <section id="upload_container">
        <form action="adminAdd.php" method="POST" enctype="multipart/form-data" >
			<input type="text" name="productID" id="productID" placeholder="Product ID" required>
            <input type="text" name="productName" id="productName" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="text" name="category" id="category" placeholder="Product Category" required>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>

        <div class="messages">
            <p><a href="adminHome.php">Back to Main Menu</a></p>
        </div>


    </section>
    
    <script>
		var productID = document.getElementById("productID");
        var productName = document.getElementById("productName");
        var price = document.getElementById("price");
        var category = document.getElementById("category");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productName.value == ""){
                productName.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>