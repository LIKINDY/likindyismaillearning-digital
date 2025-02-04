<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup - Likindy-Digital Education</title>
    <link rel="stylesheet" href="style.css">
    <script>
        window.onload = function() {
            alert("Welcome to Likindy Digital E-learning! Do you what to signup?.");
        }
    </script>
    <style>
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
    <img src="" alt="" class="image">
    <div class="container">
        <h2>Admin Signup</h2>
        <form action="signup_process.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Signup</button>
        </form>

        <p style="text-align: center;">Already have an account? <a href="login.php">Login</a></p>
    </div>
    <footer>
        <p>&copy; All rights reserved by Likindy 2024 Digital.</p>
        <p><img src="location (1).png">Location: Street Road 234 Bububu, Kijichi./p>
            <p><img src="mail.png">Email: likindyismail@gmail.com</p>
            <p><img src="call.png">Phone: +255 658 415 488</p>
    </footer>


</body>
</html>