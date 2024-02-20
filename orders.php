<?php
session_start();

// Example user ID
$user_id =  $_SESSION["users_id"];

$host = 'localhost';
$dbname = 'urbanbite';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT orders_id,  image, name, quantity, total_amount FROM orders WHERE users_id = ?"; 

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<nav class="w-full   ">
    <div class="max-w-7xl mx-auto bg-yellow-950  flex justify-between ">
    <div class="rounded-lg">
        <img class="w-20 h-20" src="./Images/logo.webp" alt="">
    </div>

    <ul class=" w-64  flex justify-around items-center ">
        <li><a href="./menu.php">Menu</a></li>
        <!-- <li><a href="">Table Reservation</a></li> -->
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

<table class="max-w-7xl mx-auto table-auto">
<thead class="bg-gray-500 text-white">
<tr>
            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Order ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Image</th>
            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Quantity</th>
            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Total Amount</th>
            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Action</th>
        </tr>
</thead>
<tbody>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
        echo '<td class="px-1 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $row["orders_id"] . '</td>';
        echo '<td class="px-1 py-1"><img src="Images/' . $row["image"] . '" alt="' . $row["name"] . '" class="w-24 h-auto mx-auto"></td>';
        echo '<td class="px-1 py-1">' . $row["name"] . '</td>';
        echo '<td class="px-1 py-1">' . $row["quantity"] . '</td>';
        echo '<td class="px-1 py-1">$' . $row["total_amount"] . '</td>';
        echo '<td class="px-1 py-1"><a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Cancel</a></td>';
        echo '</tr>';
    }
} else {
    echo "<tr><td colspan='7' class='text-center py-4'>No orders found</td></tr>";
}
?>
</tbody>
</table>
</body>
</html>
