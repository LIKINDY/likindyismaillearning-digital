<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}

?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Likindy-Digital Education</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
    <style>
        body {
            background-color: aliceblue;
        }
        
        footer {
            background-color: brown;
            color: #efe4e4;
        }
        .header{
            background-color: skyblue;
            line-height: 70px;
            padding-left: 30px;
        }
        
        a,a:hover{
            text-decoration: none!important;
        }
        .logout{
            float:right;
            padding: 30px;
        }
         ul{
            background-color: #424a5b;
            width: 16px;
            height: 100px;
            position:  fixed;
            padding-top: 5%;
            text-align: center;
         }
         ul li {
            list-style: none;
            padding-bottom: 30px;
            font-size: 15px;
         }
         ul li a {
            color: white;
            font-weight: bold;
         }
         ul li a:hover{
            color: skyblue;
            text-decoration: none; 
         }
         .content{
            margin-left: 20%;
            margin-top: 5%;
         }

    </style>
</head>
<header>
    <img src="logo.jpg" alt="Likindy Logo" style="width: 30px; height: 30px;">
    <li><a href="index.html">Home</a></li>
</header>

<body>
    <header class="header">
        <a href="">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>

        </div>
    
    </header>
    <aside>
        <ul>
            <li>
                <a href="">My courses</a>
            </li>
            <li>
                <a href="">My result</a>
            </li>
            <li>
                <a href="">View Student</a>
            </li>
           
    </aside>
    <div class="content">
        <h1>this i site for student</h1>
        <p>likindy computer training </p>
        <input type="text" name="">

    </div>


    <footer>
        <p>&copy; All rights reserved by Likindy 2024 Digital.</p>
        <p><img src="location (1).png">Location: Street Road 234 Bububu, Kijichi./p>
            <p><img src="mail.png">Email: likindyismail@gmail.com</p>
            <p><img src="call.png">Phone: +255 658 415 488</p>
    </footer>

</body>

</html>