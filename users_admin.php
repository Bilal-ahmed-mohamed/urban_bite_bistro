
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
$sql = "SELECT users_id, name,email FROM users";
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
                
            </ul>
        </div>
    </aside>
    <div class="flex-1 overflow-x-auto">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
              Users_id
            </th>
            <th scope="col" class="px-6 py-3">
               Name
            </th>
            <th scope="col" class="px-6 py-3">
                Email
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
                echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $row["users_id"] . '</th>';
                echo '<td class="px-6 py-4">' . $row["name"] . '</td>';
                echo '<td class="px-6 py-4">$' . $row["email"] . '</td>';
                echo '<td class="px-6 py-4">
                <form method="POST" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" onsubmit="return confirm(\'Are you sure you want to delete this user?\');">
                    <input type="hidden" name="delete_user_id" value="' . $row['users_id'] . '">
                    <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</button>
                </form>
              </td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="5" class="px-6 py-4">No users found</td></tr>';
        }
        ?>
    </tbody>
</table>

      </div>

</div>




<?php
// Place this PHP code block at the beginning of your PHP script, before any HTML output.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user_id'])) {
   $userId = $_POST['delete_user_id'];

   // Prepare the SQL statement to prevent SQL injection
   $stmt = $conn->prepare("DELETE FROM users WHERE users_id = ?");
   $stmt->bind_param("i", $userId);

   // Execute the query
   if ($stmt->execute()) {
       echo "<p>User deleted successfully.</p>";
   } else {
       echo "<p>Error deleting user: " . $conn->error . "</p>";
   }

   // Close statement and refresh page to reflect changes
   $stmt->close();
   header("Location: ".$_SERVER['PHP_SELF']);
   exit;
}

// Continue with the rest of your HTML and PHP code

$conn->close();
?>
</body>
</html>