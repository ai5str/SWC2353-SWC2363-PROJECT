<?php
    include("menubar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Services</title>
    <style>
        body {
            font-family: verdana;
            background-color: #e2f1f6;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
            font-size: 15px;
        }

        section {
            background-color: ghostwhite;
            margin: 10px 100px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 20px;
        }

        p {
            font-size: 15px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact-form,
        .contact-details {
            flex-basis: calc(50% - 50px);
            margin: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: ghostwhite;
        }

        input[type="submit"] {
            background-color: #e2f1f6;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #cccccc;
        }
    </style>
</head>
<body>

    <section id="faq">
        <h2>Frequently Asked Questions (FAQ)</h2>
        <p><b>1. Are your skincare products cruelty-free?</b> <br>Yes, Prettify is committed to cruelty-free practices. We do not test our products on animals.</p>
        <p><b>2. How can I contact customer support?</b> <br>You can reach our customer support team by contact us form.</p>
    </section>

    <section id="terms">
        <h2>Terms of Use</h2>
        <p><b>1. Privacy Policy:</b> <br>Your use of our services is also governed by our Privacy Policy. Please review the Privacy Policy to understand how we collect, use, and disclose your information.</p>
        <p><b>2. Acceptance of Terms:</b> <br>By accessing and using the services provided by Prettify, you agree to comply with and be bound by these Terms of Use. If you do not agree with these terms, please do not use our services.</p>
        <p><b>3. Intellectual Property</b> <br>All content and materials provided through our services, including but not limited to text, images, logos, and trademarks, are the property of Prettify and are protected by intellectual property laws. You may not use, reproduce, or distribute any of our content without our prior written consent.</p>
        
    </section>

    <section id="contact">
        <h2>Contact Information</h2>
        <div class="contact-info">
            <div class="contact-form">
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="contact-details">
                <h3>Contact Details</h3>
                <p><b>Address: Jalan Perdana 5, Taman Perdana, Kuala Lumpur</b></p>
                <p><b>Phone: 010-1234567</b></p>
                <p><b>Email: yourgmail@gmail.com</b></p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Prettify. All rights reserved.</p>
    </footer>
</body>
</html>
