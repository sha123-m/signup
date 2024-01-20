<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="form">
        <h1 id=" heading">signup form</h1><br>
        <form name="form" action="signup.php" method="POST">
            <i class="fa-solid fa-user"></i>
            <input type="text" id="user" name="user" placeholder="Enter Username" required> <br><br>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Enter Email" required> <br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="pass" name="pass" placeholder="Create Password" required> <br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required> <br><br>
            <input type="submit" id="btn" value="SignUp" name="submit" />
        </form>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>