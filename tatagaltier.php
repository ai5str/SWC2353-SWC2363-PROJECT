<?php
    include("menubar.php");
    include("connection.php");

    $cat = ['Tatagaltier'];
?>

<html>
<head>
    <title>Product Page</title>
    <style>
        body {
            font-family: verdana;
            background-color: #e2f1f6;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 100px;
            display: flex;
        }

        .title {
            color: #3d3d3d;
            padding: 0px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 20px;
        }

        .product-menu {
            flex: 1;
        }

        .product-menu ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .product-menu ul li a {
            text-decoration: none;
            color: #333;
            transition: color 0.1s;
        }

        .product-menu ul li a:active {
            color: #418bbd;
        }

        .product-menu ul li.active a, .product-menu ul li a:hover {
            color: #418bbd;
        }

        .product-menu ul li:hover > ul {
            display: block;
        }

        .product-list {
            flex: 2;
            display: flex;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            margin: 10px;
            padding: 10px 5px;
            text-align: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            width: 300px;
            display: inline-block;
        }

        .product img {
            
            max-width: 99.9%;
            height: auto;
            object-fit: cover;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .product img:hover {
            transform: scale(1.1);
        }

        .product h3 {
            font-size: 20px;
        }

        .product p {
            font-size: 16px;
            color: #888;
        }

        .product .price {
            font-size: 18px;
            color: #e44d26;
            font-weight: bold;
        }

        .item-container {
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto; 
        }

        img {
            border: 1px solid #ccc;
            width: 447px;
            max-width: 100%;
            height: 230px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="title">
            <b><p style="background-color: ghostwhite; padding: 10px 20px;">PRODUCTS</p></b>

            <div class="product-menu">
                <ul><br>
                    <li><a href="skinmadeDisplay.php">Skinmade</a></li><br>
                    <li><a href="tatagaltier.php">Tatagaltier</a></li><br>
                    <li><a href="dom.php">Daughters of Malaya</a></li>
                </ul>
            </div>
        </div>

        <div class="product-list">
            <?php
            foreach ($cat as $category) {
                $sql = "SELECT * FROM products WHERE cat = '$category'";
                $result = $conn->query($sql);


                echo '<main>';
                echo '<div class="item-container">';

                while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="product">
                <img class="productImg" src="<?php echo $row["productImg"]; ?>" alt="<?php echo $row["productName"]; ?>">
                
                <p class="productName"><?php echo $row["productName"]; ?></p>
                <p class="price"><b>RM<?php echo $row["price"]; ?></b></p>
               
            </div>
    <?php
        }
        echo '</div>';
        echo '</main>';
    }
    ?>
            
</body>

<script>
    var productID = document.getElementsByClassName("add");
    for (var i = 0; i < productID.length; i++) {
        productID[i].addEventListener("click", function (event) {
            var target = event.target;
            var id = target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    target.innerHTML = data.in_cart;
                    document.getElementById("badge").innerHTML = data.num_cart + 1;
                }
            }

            xml.open("GET", "connection.php?id=" + id, true);
            xml.send();

        })
    }
</script>
</html>