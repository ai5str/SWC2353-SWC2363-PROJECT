<html>
<head>
<title>Prettify</title>
<style>
        .menu-bar2 {
            height: 70px;
            background-color: #eff7fa;
        }

        .menu-bar2 ul {
            display: inline-flex;
            list-style: none; 
       }

        .menu-bar2 ul li {
            width: 110px;
            margin: 5px;
            padding: 5px 10px;
            margin-left: 50px;
        }

        .menu-bar2 ul li a {
            text-decoration: none;
            color: #656565;
            transition: color 0.1s;
        }

        .menu-bar2 ul li a:active {
            color: #418bbd;
        }

        .menu-bar2 ul li.active a, .menu-bar2 ul li a:hover {
            color: #418bbd;
        }

        .menu-bar2 ul ul {
            display: none;
            position: absolute;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu-bar2 ul li:hover > ul {
            display: block;
        }

        .submenu
        {
            display: none;
            position: absolute;
            background: #eff7fa;
            margin-top: 15px;
            margin-left: -15px;
        }
</style>
</head>
<body>
    <div class="menu-bar2">
        <ul>
            <li class="active" style="margin-left: 50px;"><a href="home.txt.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about2.php">About Us</a></li>
            <li>Services</a>
                <ul class="submenu">
                    <li><a href="services.php">Terms</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </li>
            <li class="active" style="margin-left: 50px;"><a href="registration.php">Sign Out</a></li>
        
        </ul>
    </div>
    
</body>
</html>