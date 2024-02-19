<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
  <span class="sr-only">Open sidebar</span>
  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
  <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
  </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
  <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
     <ul class="space-y-2 font-medium">
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
              <span class="ms-3">Dashboard</span>
           </a>
        </li>
        
    
        <li>
           <a href="./menu_admin.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
              <span class="flex-1 ms-3 whitespace-nowrap">Menu</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
              <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
              <span class="flex-1 ms-3 whitespace-nowrap">Reservation</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
              <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
           </a>
        </li>
     </ul>
  </div>
</aside>


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
$sql = "SELECT name, description, image, price FROM dish";
$result = $conn->query($sql);

?>

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
                echo '<td class="px-6 py-4">$' . $row["price"] . '</td>';
                echo '<td class="px-6 py-4"><a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">DELETE</a></td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="5" class="px-6 py-4">No dishes found</td></tr>';
        }
        ?>
    </tbody>
</table>

<?php
$conn->close();
?>

</body>
</html>