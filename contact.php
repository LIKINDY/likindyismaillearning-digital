<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Likindy Digital E-learning</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favi.png"> 
</head>
<body>

    <header> 
        <img src="logo.jpg" alt="Likindy Logo" style="width: 30px; height: 30px;"> 
        <nav> 
            <ul>
            <li>
                        <a href="index.html"><img src="home.png" alt="Home Icon"> Home</a>
                    </li>
                    <li>
                        <a href="about.html"><img src="about.png" alt="About Icon"> About Us</a>
                    </li>
                    <li>
                        <a href="courses.html"><img src="" alt="Courses Icon"> Courses</a>
                    </li>
                    <li>
                        <a href="team.html"><img src="team.png" alt="Team Icon"> Team</a>
                    </li>
                    <li>
                        <a href="contact.html"><img src="projects.png" alt="Contact Icon"> Contact</a>
                    </li>
                    <li>
                        <a href="help.html"><img src="home.png" alt="Help Icon"> Help</a>
                <li><a href="registration.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Contact Us</h1>

        <?php
        // Include the database connection file
        include 'includes/db_connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Prepare and execute the SQL statement
            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')"; 

            if ($conn->query($sql) === TRUE) {
                echo "<p>Your message has been sent successfully!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <button type="submit">Submit</button>
        </form>

    </main>

    <footer>
        <p>&copy; All rights reserved by Likindy 2024 Digital.</p>
        <p>Location: Street Road 234 Bububu, Kijichi.</p>
        <p>Email: likindyismail@gmail.com</p>
        <p>Phone: +255 658 415 488</p>
    </footer>

</body>
</html>