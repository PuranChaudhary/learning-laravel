<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .heading h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .heading p {
            color: #666;
        }

        .contact-content {
            display: flex;
            justify-content: space-between;
        }

        .contact-info,
        .contact-form {
            width: 48%;
        }

        .contact-info h2,
        .contact-form h2 {
            margin-top: 0;
        }

        .info {
            margin-bottom: 5px;
        }

        .info h3 {
            margin-bottom: 5px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        form textarea {
            width: 100%;
            height: 70px;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            
        }

        form button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #22eb3d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Contact Us</h1>
            <p>We would love to hear from you</p>
        </div>
        <div class="contact-content"> <!-- Contact Information -->
            <div class="contact-info">
                <h2>Get In Touch</h2>
                     
                <div class="info">
                    <h3>📧 Email</h3>
                    <p>chaudharypuran599@gmail.com</p>
                </div>
                <div class="info">
                    <h3>📍 Address</h3>
                    <p>Dang, Nepal</p>
                </div>
                <div class="info">
                    <h3>🕐 Office Hours</h3>
                    <p>Monday - Friday: 09:00 AM - 5:00 PM</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send us a message</h2>
                <form action="POST">
                    <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Enter your name">

                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="example@gmail.com">
                    </div>

                    <label for="message">Message:</label>
                    <textarea id="message" placeholder="Write your message here..."></textarea>

                    <button type="submit">Send Message</button>
                </form>

            </div>
        </div>


</body>

</html>