<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="bg-gray-100 flex">


  
<?php
// Database configuration
$host = 'localhost';
$dbname = 'urbanbite';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users"; 
$result = $conn->query($sql);
$total = 0;
if ($result->num_rows > 0) {

   $total = $result->num_rows;
} else {
   echo "0 results";
}

// meals
$sql_meals = "SELECT * FROM dish";
$meals = $conn->query($sql_meals);
$total_meals = 0;
if ($meals->num_rows > 0) {

   $total_meals = $meals->num_rows;
} else {
   echo "0 results";
}

// orders

$SQL_orders = "SELECT * FROM orders"; 
$ORDERS = $conn->query($SQL_orders);
$total_order = 0;

if ($ORDERS->num_rows > 0) {
    $total_order = $ORDERS->num_rows;
} else {
    echo "0 results";
}

?>


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

    
    <div class="flex-1 p-4">

  <div class="p-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
     <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
           <span class="text-2xl text-gray-400 dark:text-gray-500">
             <p class="text-center">No: of Users <br>
            <?php echo " " . $total;?>
             </p>
           </span>
        </div>
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
           <span class="text-2xl text-gray-400 dark:text-gray-500">
              <p class="text-center">No: of Meals</p> 
              <?php echo " " . $total_meals;?>
           </span>
        </div>
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
           <span class="text-2xl text-gray-400 dark:text-gray-500">
              <p class="text-center">No: of Orders</p> 
              <?php echo " " . $total_order;?>
           </span>
        </div>
     </div>
   
     
      
       
     </div>
 
   
  </div>
</div>





</body>
</html>