<?php
    include("menubar.php");
?>

<html>
<head>
    <title>About Us Page</title>
    <style>
        body {
            font-family: verdana;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 20px;
            justify-content: space-between;
            background-color: #e2f1f6;

        }

        .header2 {
            display: flex;
            align-items: center;
            padding: 30px;
            justify-content: space-between;
            background-color: #eff7fa;
            margin-left: 10px;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            position: relative;
        }

        .content {
            flex: 1;
            margin-left: 40px;
            margin-top: 20px;
            margin-right: 50px;
            padding: 5px;
            color: #3d3d3d;
            background-color: #eff7fa;
        }

        .content2 {
            flex: 1;
            margin-left: 200px;
            margin-top: 20px;
            padding: 5px;
            color: #3d3d3d;
            background-color: #e2f1f6;
        }

        .content2 img {
        margin-right: 20px;
    }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        img {
            width: 350px;
            height: auto;
        }

    </style>
</head>

<body>
    <div class="header">
        <div class="content-wrapper">
            <img src="icon.png" style="margin-top: 30px; margin-bottom: 30px; margin-left: 250px;">
            <div class="content">
                <h2 style="text-align: center;">Our Story</h2>

                <p>Welcome to <b>Prettify</b>, where our journey began with a passion for skincare and a dream to create a seamless online shopping experience for skincare enthusiasts like you. We set out to provide a wide range of skincare products that cater to your unique needs and preferences.</p>

                <p>Our story is one of continuous growth and learning. From humble beginnings, we have evolved into an online destination where you can explore, discover, and purchase a curated selection of high-quality skincare products. Our team of experts is dedicated to delivering a shopping experience that's informative, enjoyable, and efficient.</p>

                <p>As we look back on our journey, we're proud of the community we've built and the trust you've placed in us. Thank you for being a part of our story.</p><br>
            </div>
        </div>
    </div>

    <div class="header2">
        <div class="content2">
            <h2 style="text-align: center;">Our Mission</h2>

            <p>To provide you with skincare products that deliver lasting results while preserving the planet we call home. We are committed to creating a more sustainable and beautiful world.</p>
                <p><b>We strive to:</b></p>
                <ul>
                    <li>Source natural and organic ingredients that are kind to your skin and the environment.</li>
                    <li>Educate our customers about the benefits of clean, green beauty.</li>
                    <li>Empower you to embrace your natural beauty with confidence and pride.</li>
                </ul>
                <p>We believe that beauty is more than skin deep! It's a reflection of our care for ourselves and the world around us. Thank you for joining us on our mission to create a brighter, more beautiful future for all.</p>
        </div>
        <div class="content-wrapper">
            <img src="aboutus.jpg" style="margin-top: 30px; margin-bottom: 30px; margin-right: 200px;">
        </div>


    </div>

</body>
</html>
