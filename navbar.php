<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="w-full ">
    <div class="max-w-7xl mx-auto bg-yellow-600  flex justify-between ">
    <div class="rounded-lg">
        <img class="w-20 h-20" src="./Images/logo.webp" alt="">
    </div>

    <ul class=" w-64  flex justify-around items-center ">
        <li><a href="./menu.php">Menu</a></li>
        <li><a href="">Table Reservation</a></li>
    </ul>

    <div class="w-60 flex justify-around items-center">

    <?php 
    if (isset($_SESSION["users_id"])) {
      
      ?>
        <li class="list-none"><a href="./signup.php"><?php echo $_SESSION["name"]; ?></a></li>
        <li class="list-none"><a href="./logout.php">Logout</a></li>
        <?php 
    }
    else 
    {
      ?>
        <li class="list-none"><a href="./signup.php">Signup</a></li>
        <li class="list-none"><a href="./login.php">Login</a></li>
        <?php
    }
    ?>
    
    </div>
    </div>
</nav>
</body>
</html>