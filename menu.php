<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<nav class="w-full ">
    <div class="max-w-7xl mx-auto bg-yellow-600  flex justify-between ">
    <div class="rounded-lg">
        <img class="w-20 h-20" src="./Images/logo.webp" alt="">
    </div>

    <ul class=" w-64  flex justify-around items-center ">
        <li><a href="">Menu</a></li>
        <li><a href="">Table Reservation</a></li>
    </ul>

    <div class="w-60 flex justify-around items-center">
        <li class="list-none"><a href="./signup.php">Signup</a></li>
        <li class="list-none"><a href="./login.php">Login</a></li>
    </div>
    </div>
</nav>
<body>
<?php
// Database connection details
$host = 'localhost';
$dbname = 'urbanbite';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, description, image , price FROM dish";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {

        echo '<div class= "max-w-7xl bg-red-300 mx-auto flex flex-col">';
        echo '<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">';
        echo '<img class="rounded-t-lg h-60 w-full" src="Images/' . $row["image"] . '" alt="" />';
        echo '<div class="p-5">';
        echo '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">' . $row["name"] . '</h5>';
        echo '<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">' . $row["description"] . '</p>';
        echo '<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">' . $row["price"] . 'ksh' .  '</p>';
        echo '<input type="number" name="username" placeholder="quantity">';
        echo '   <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Order
      </button>';
        echo '</div></div>';

        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>