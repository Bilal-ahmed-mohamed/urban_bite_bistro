<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    
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

<section id="call-to-action" class=" w-full py-5">
  <div class=" max-w-7xl  mx-auto">
    <div class="text-center">
        <h1 class="text-9xl py-7 font-bold text-gray-300">TASTE THE </h1>
        <h1 class="text-9xl font-bold block text-gray-500">DIFFRENCE</h1>
    </div>

    <div class=" w-6/12  mt-10 mx-auto text-center ">
        <p class="text-md text-white text-2xl">Experience a culinary journey at our restaurant and cafeteria, where delicious flavors meet cozy ambiance. From gourmet delights to casual bites, we cater to every taste and occasion.</p>
    </div>

    
            <div class="w-4/12 mt-10 mx-auto flex justify-center items-center space-x-9">
        <button type="submit" class=" text-white bg-yellow-600 hover:bg-yellow-700 font-medium rounded-lg text-sm px-5 py-3 text-center">Reserve a table</button>
        <button type="submit" class=" text-white bg-yellow-600  hover:bg-yellow-700 font-medium rounded-lg text-sm px-5 py-3 text-center">Order best meals</button>
            </div>
    
    
  </div>
</section>

<section class=" py-7 ">
   <div class="max-w-7xl py-7 mx-auto flex justify-around">




      <div class="max-w-sm  rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full h-60" src="./Images/breakfast.jpg" alt="Delicious Food">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Delicious Food</div>
          <p class="text-gray-700 text-base">
            This article is mainly focused on the names of the food, its necessity, the vocabulary of the food.
          </p>
        </div>

        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Breakfast</span>
        </div>
        <div class="w-full space-x-36   ">
          <span class="inline-block bg-purple-200 rounded-full px-3 py-1 ml-7 text-sm font-semibold text-gray-700 mr-2 mb-2">$15.00</span>
          <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Order
          </button>
        </div>
      </div>

      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full" src="./Images/pexels-dima-valkov-3864682.jpg" alt="Delicious Food">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Delicious Food</div>
          <p class="text-gray-700 text-base">
            This article is mainly focused on the names of the food, its necessity, the vocabulary of the food.
          </p>
        </div>

        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Breakfast</span>
        </div>
        <div class="w-full space-x-36   ">
          <span class="inline-block bg-purple-200 rounded-full px-3 py-1 ml-7 text-sm font-semibold text-gray-700 mr-2 mb-2">$15.00</span>
          <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Order
          </button>
        </div>
      </div>


      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full" src="./Images/pexels-dima-valkov-3864682.jpg" alt="Delicious Food">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Delicious Food</div>
          <p class="text-gray-700 text-base">
            This article is mainly focused on the names of the food, its necessity, the vocabulary of the food.
          </p>
        </div>

        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Breakfast</span>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-purple-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">$15.00</span>
          <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Buy Now
          </button>
        </div>
      </div>

      
      
        
   </div>
</section>

    
<!-- why choose us sectiuon -->
<section class="py-7 bg-gray-200">
   
  <h2 class=" text-5xl text-center mb-5" >Why choose us</h2>
  <p class="text-center text-2xl mb-5">Choose us for a unique culinary journey, blending unmatched flavors with the freshest ingredients.</p>


<div class=" max-w-7xl mx-auto flex justify-between py-7">

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <img class="rounded-t-lg h-60 w-full" src="./Images/fresh.jpg" alt="" />
            <div class="p-5">   
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fresh Food</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Your taste buds will thank you for saying "no" to processed and embracing the fresh.</p>   
            </div>
      </div>


      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg h-60 w-" src="./Images/delivery.webp" alt="" />
              <div class="p-5">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Home Delivery</h5>    
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hunger doesn't wait, neither does our delivery: Order now, eat soon!.</p>     
              </div>
      </div>


      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg h-60 w-full" src="./Images/24.avif" alt="" />
              <div class="p-5">     
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">24/7</h5>    
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Breakfast cravings at midnight? Dinner at dawn? We're ready.</p>    
              </div>
      </div>


</div>

</section>


<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
  <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
          <a href="index.php" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
              <img src="./Images/logo.webp" class="h-8" alt="" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UrbanBite</span>
          </a>
          <ul class="flex  w-64 flex justify-between flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Menu</a>
              </li>
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Table Reservation</a>
              </li>
    
              <li>
                  <a href="#" class="hover:underline">Contact</a>
              </li>
          </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="" class="hover:underline">UrbanBite™</a>. All Rights Reserved.</span>
  </div>
</footer>



</body>
</html>