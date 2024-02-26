
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
$sql = "SELECT dish_id, name, description, image, price FROM dish";
$result = $conn->query($sql);







// Place this PHP code block at the beginning of your PHP script, before any HTML output.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_menu_id'])) {
    $menuId = $_POST['delete_menu_id'];
 
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM dish WHERE dish_id = ?");
    $stmt->bind_param("i", $menuId);
 
    // Execute the query
    if ($stmt->execute()) {
        echo "<p>menu deleted successfully.</p>";
    } else {
        echo "<p>Error deleting menu: " . $conn->error . "</p>";
    }
 
    // Close statement and refresh page to reflect changes
    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
 }
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body bg-gray-100 flex>


<div class="flex">

<aside class="w-64 h-screen" aria-label="Sidebar">
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

                <p class="text-center">welcome Admin</p>
                
            </ul>
        </div>
    </aside>




<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Product name
            </th>
            <th scope="col" class="px-6 py-3">
                Description
            </th>
            <th scope="col" class="px-6 py-3">
                Image
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
                echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $row["name"] . '</th>';
                echo '<td class="px-6 py-4">' . $row["description"] . '</td>';
                echo '<td class="px-6 py-4"><img src="Images/' . $row["image"] . '" alt="' . $row["name"] . '" style="width: 100px; height: auto;"></td>';
                echo '<td class="px-6 py-4">ksh ' . $row["price"] . '</td>';
                echo '<td class="px-6 py-4">  
                <form method="POST" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" onsubmit="return confirm(\'Are you sure you want to delete this order?\');">
                    <input type="hidden" name="delete_menu_id" value="' . $row['dish_id'] . '">
                    <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline">CANCEL</button>
                </form>
                
                </td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="5" class="px-6 py-4">No dishes found</td></tr>';
        }
        ?>
    </tbody>
</table>


    </div>



</body>
</html>