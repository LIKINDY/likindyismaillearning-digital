<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Likindy Digital E-learning</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favi.png">
  <style>
        body {
            background-color: aliceblue;
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
          <a href="index.html">Home</a>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <h1 style="text-align:center, color: green">Welcome to Likindy Digital E-learning!</h1>

    <form action="log.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>

      <button type="submit">Sign Up/Login</button>
    </form>

  </main>

  <footer>
    <p>&copy; All rights reserved by Likindy 2024 Digital.</p>
    <p><img src="location (1).png">Location: Street Road 234 Bububu, Kijichi./p>
    <p><img src="mail.png">Email: likindyismail@gmail.com</p>
    <p><img src="call.png">Phone: +255 658 415 488</p>
  </footer>

</body>

</html>