<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url(prettifyBG2.jpg);
            background-size: cover;
            background-position: center;
            font-family: verdana;
            font-size: 15px;

        }

        .menu-bar {
            height: 80px;
            background: transparent;
            text-align: left;
        }

        .menu-bar ul {
            display: inline-flex;
            list-style: none;
        }

        .menu-bar ul li {
            width: 110px;
            margin: 5px;
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

        .center-text {
            font-family: verdana;
            text-align: left;
            letter-spacing: 1px;
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        #exploreBtn {
            background-color: transparent;
            color: #a9a9a9;
            border: 2px solid #a9a9a9;
            padding: 10px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: verdana;
            font-size: 15px;
            margin: 20px;
            cursor: pointer;
        }

        #exploreBtn:hover {
            color: floralwhite;
            border-color: floralwhite;
            transition: 0.1s;
        }

        .header::before {
            content: '';
            display: block;
            border-bottom: 1px solid #656565;
            width: 100%;
            position: absolute;
            top: 1px; 
        }

        .header {
            position: relative;
            text-align: center;
            background-color: white;
            top: 700px;
            flex: 2;
            display: flex;
            flex-wrap: wrap;
        }

        .header img {
            width: 100%;
            height: auto;
        }


    </style>
</head>
<body>

    <div class="menu-bar">
        <ul>
            <li class="active" style="margin-left: 50px;"><a href="home.txt.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about2.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li class="active" style="margin-left: 50px;"><a href="registration.php">Sign Out</a></li>
        </ul>
    </div>

    <div class="center-text">
        <p style="color: #656565; font-size: 25px;">Natural Skincare</p>
        <b><p style="font-size: 30px;  color: #656565; ">Take pleasure in<br> your skin chemistry.</p></b>
        <button id="exploreBtn">Explore More</button>
    </div>

    <div class="header">
        <img src="prettifyheader2.jpg" alt="Prettify Header">
    </div>

</body>
</html>