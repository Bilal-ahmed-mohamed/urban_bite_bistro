<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="max-w-7xl mx-auto h-auto  bg-yellow-400 flex justify-center">



<div class="w-full max-w-sm p-4 my-9  bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8  dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" action="#">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
        </div>
        <div class="flex items-start">
            <div class="flex items-start">

               
            </div>
        </div>
        <button type="submit" class="w-full text-white bg-yellow-600 hover:bg-yello-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-yellow-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
</div>

</section>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Signup Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 ">

<section class="max-w-md mx-auto mt-44 bg-white shadow-md p-4 justify-center rounded-lg">
    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-4">Login Into Your Account</h1>
    <form action="includes/login.inc.php" method="post">
   
        <div class="mb-4">
            <input type="text" name="email" placeholder="Enter Your Email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <input type="text" name="password" placeholder="Enter Your Password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        

        <div class="text-sm  mb-4 font-medium text-gray-500 dark:text-gray-300">
        Create an account ? <a href="./signup.php" class="text-yellow-700  hover:underline dark:text-blue-500">Signup</a>
        </div>
        <div class="mb-4">
            <button type="submit" name="login" class="w-full px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded focus:outline-none focus:bg-blue-600">Login</button>
        </div>

        
    </form>
</section>

</body>
</html>
