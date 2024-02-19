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
    
    while($row = $result->fetch_assoc()) {
        $total += $row['users_id']; 
    }
} else {
    echo "0 results";
}

// meals
$SQL_DISH = "SELECT * FROM dish"; 
$dish =  $conn->query($SQL_DISH);
$total_DISH = 0;
if ($dish->num_rows > 0) {
    
   while($row = $dish->fetch_assoc()) {
       $total_DISH += $row['dish_id']; 
   }
} else {
   echo "0 results";
}

// orders

$SQL_orders = "SELECT * FROM orders"; 
$ORDERS =  $conn->query($SQL_orders);
$total_order = 0;
if ($ORDERS->num_rows > 0) {
    
   while($row = $ORDERS->fetch_assoc()) {
       $total_order += $row['orders_id']; 
   }
} else {
   echo "0 results";
}

$conn->close();
?>

<div class="p-4 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
     <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
           <span class="text-2xl text-gray-400 dark:text-gray-500">
             <p>No: of Users <br>
            <?php echo " " . $total;?>

             </p>
           </span>
        </div>
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
           <span class="text-2xl text-gray-400 dark:text-gray-500">
              <p>No: of Meals</p> <br>
              <?php echo " " . $total_DISH;?>
           </span>
        </div>
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
           <span class="text-2xl text-gray-400 dark:text-gray-500">
              <p>No: of Orders</p> <br>
              <?php echo " " . $total_order;?>
           </span>
        </div>
     </div>
   
     <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
              </svg>
           </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
              </svg>
           </p>
        </div>
      
       
     </div>
 
   
  </div>
</div>

</body>
</html>