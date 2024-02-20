
<?php

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

// Prepare SQL query
$sql = "SELECT orders_id, users_id, image,name, quantity,total_amount FROM orders";
$result = $conn->query($sql);

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


<div class="flex flex-col md:flex-row min-h-screen">
<aside class="flex-shrink-0 w-64 h-screen" aria-label="Sidebar">
        <div class="overflow-y-auto py-10 px-3 bg-gray-400 rounded dark:bg-gray-800 h-full">
            <ul class="space-y-2">
            <li>
                    <a href="./dashboard.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./menu_admin.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="./orders_menu.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="./users_admin.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Users</span>
                    </a>
                </li>
                <li>
                    <a href="./addMenu.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Add Menu</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </aside>


    <div class="flex-1 overflow-x-auto">
<table class="min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
<thead class="bg-gray-50 dark:bg-gray-700 w-10 h-16 dark:text-gray-400 bg-gray-500">
    <tr>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">Order ID</th>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">User ID</th>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">Image</th>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">Name</th>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">Quantity</th>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">Total</th>
        <th scope="col" class="px-1 py-1 text-xs font-medium text-gray-700 uppercase">Action</th>
    </tr>
</thead>

    <tbody>
    <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Truncate name if it's too long
        $name = strlen($row["name"]) > 30 ? substr($row["name"], 0, 27) . "..." : $row["name"];
        
        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
        echo '<th scope="row" class="px-1 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $row["orders_id"] . '</th>';
        echo '<td class="  px-1 py-1">' . $row["users_id"] . '</td>';
        echo '<td class="px-1 py-1"><img src="Images/' . $row["image"] . '" alt="' . $name . '" class="w-24 h-auto mx-auto"></td>';
        echo '<td class="px-1 py-1">' . $name . '</td>';
        echo '<td class="px-1 py-1">' . $row["quantity"] . '</td>';
        echo '<td class="px-1 py-1">$' . $row["total_amount"] . '</td>';
        echo '<td class="px-1 py-1"><a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="7" class="px-6 py-4 text-center">No orders found</td></tr>';
}
?>

    </tbody>
</table>
</div>


</div>


<?php
$conn->close();
?>

</body>
</html>