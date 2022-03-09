<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            nav{
                background-color:blue;
                padding:1rem 0rem;
                color : white;
                display:flex;
                justify-content:space-between;
            }
            .nav-item{
                display: flex;
                justify-content:space-between;
            }

            .nav-item a {
                margin-right: .5rem;
                color:white;
            }
            .form-content{
                display:flex;
                justify-content:center;
                padding:1rem 2rem;
                border:1rem solid #f7f7f7;
            }
            .form-content input[type=text]{
                width:100%;
                margin:.5rem;
            }

            </style>
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="logo">Logo</div>
            <div class="nav-item">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
</div>
</nav>
<?php
				if(isset($_GET["message"])){
					echo "<div class='alert alert-danger'>" . $_GET["message"] . "</div>";
				}
				?>
<div class="form-content">

        <form action="submitregister.php" method="POST" id="form">
            <div class="form-group"><label for="">Username</label><input type="text"name="username"id=""></div>
            <div class="form-group"><label for="">Password</label><input type="text"name="password"id=""></div>
            <div class="form-group"><label for="">First Name</label><input type="text"name="first_name"id=""></div>
            <div class="form-group"><label for="">Last Name</label><input type="text"name="last_name"id=""></div>
            <div class="form-group"><label for="">Email</label><input type="text"name="email"id=""></div>
            <input type="submit" value="Register">
</form>
</div>
<div>
</body>

</html>