<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            font-family: verdana;
            background-color: #808080;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        .menu-bar {
            height: 80px;
            background: #eff7fa;
            color: #656565;
            text-align: left;
        }

        .menu-bar ul {
            display: inline-flex;
            list-style: none;
        }

        .menu-bar ul li {
            width: 110px;
            margin: 10px;
            padding: 5px 10px;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: #656565;
            transition: color 0.1s;
        }

        .menu-bar ul li a:active {
            color: #418bbd;
        }

        .menu-bar ul li.active a, .menu-bar ul li a:hover {
            color: #418bbd;
        }

        .menu-bar ul ul {
            display: none;
            position: absolute;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu-bar ul li:hover > ul {
            display: block;
        }

        .submenu1
        {
            display: none;
            position: absolute;
            background: #eff7fa;
            margin-top: 15px;
            margin-left: -15px;
        }

        .submenu2
        {
            display: none;
            position: absolute;
            background: #eff7fa;
            margin-top: 15px;
            margin-left: -15px;
        }


        .center-text {
            font-family: verdana;
            text-align: left;
            letter-spacing: 1px;
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .admin-section {
            background-color: #eff7fa;
            padding: 0 60px;
            margin-top: 330px;
            margin-left: -100px;
            z-index: 1;
            text-align: center;
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li class="active" style="margin-left: 50px;"><a href="adminHome.php">Home</a></li>
            <li>Products</a>
                <ul class="submenu1">
                    <li><a href="adminAdd.php">Add New Product</a></li>
                    <li><a href="adminUpdate.php">Update New Product</a></li>
                    <li><a href="adminRemove.php">Remove Product</a></li>
                </ul>
            </li>
            <li>Admin</a>
                <ul class="submenu2">
                    <li><a href="addadmin.php">Add New Admin</a></li>
                    <li><a href="removeAdmin.php">Remove Admin</a></li>
                </ul>
            </li>
            <li class="active" style="margin-left: 50px;"><a href="adminLogout.php">Log Out</a></li>

            <div class="center-text">
        <b><p style="font-size: 30px;  color: ghostwhite; ">Welcome to admin site!</p></b>
    </div>

    <div class="admin-section">
        <h2 style="font-size: 20;">Administrator</h2>
        <p>AISYHA</p>
    </div>

           
        
        
        </ul>
    </div>
</body>
</html>