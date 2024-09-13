<?php
     session_start();
     if($_SESSION["bodyguard"] == ""){
         header("location:login.html");
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Father {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .Son {
            width: 400px;
        }
        
        video {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="Father">
        <div class="Son">
            <h1>Home Page !</h1>
            <video controls>
                <source src="snap.mp4">
            </video>
        </div>
    </div>

    <a href="out.php">Logout</a>
</body>

</html>