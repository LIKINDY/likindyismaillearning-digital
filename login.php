<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Likindy-Digital Education</title>
    <link rel="stylesheet" href="style.css">
    <script>
        window.onload = function() {
            alert("Welcome to Likindy Digital E-learning! Do you want to login?.");
        }
    </script>
    <style>
        
.container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
}

h1 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
    footer {
            background-color: brown;
            color: #efe4e4;
        }
    </style>
</head>
<body>
<header>
        <img src="logo.jpg" alt="Likindy Logo" style="width: 30px; height: 30px;">
        <nav>
            <ul>
                <li>
                    <a href="index.htm"><img src="home.png" alt="Home Icon"> Home</a>
                </li>
                <li>
                    <a href="about.html"><img src="about.png" alt="About Icon"> About Us</a>
                </li>
                <li>
                    <a href="courses.html"><img src="algo.png" alt="Courses Icon"> Courses</a>
                </li>
                <li>
                    <a href="team.html"><img src="team.png" alt="Team Icon"> Team</a>
                </li>
                <li>
                    <a href="contact.html"><img src="d1.png" alt="Contact Icon"> Contact</a>
                </li>
                <li>
                    <a href="help.html"><img src="help.png" alt="Help Icon"> Help</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Login</h1>
        <form action="login_prcess.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone"><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
        <p style="text-align: center;">Don't have an account? <a href="sign_up.php">Sign Up</a></p>
    </div>
    
    <footer>
        <p>&copy; All rights reserved by Likindy 2024 Digital.</p>
        <p><img src="location (1).png">Location: Street Road 234 Bububu, Kijichi./p>
            <p><img src="mail.png">Email: likindyismail@gmail.com</p>
            <p><img src="call.png">Phone: +255 658 415 488</p>
    </footer>


</body>
</html>