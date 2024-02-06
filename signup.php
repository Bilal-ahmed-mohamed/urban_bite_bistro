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
    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-4">Signup</h1>
    <form action="includes/signup.inc.php" method="post">
        <div class="mb-4">
            <input type="text" name="name" placeholder="Enter Your Name" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <input type="text" name="email" placeholder="Enter Your Email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <input type="text" name="password" placeholder="Enter Your Password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-6">
            <input type="text" name="confirmPassword" placeholder="Confirm Your Password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="text-sm  mb-4 font-medium text-gray-500 dark:text-gray-300">
        Already have an account ? <a href="./login.php" class="text-yellow-700  hover:underline dark:text-blue-500">Login</a>
        </div>
        <div class="mb-4">
            <button type="submit" name="signup" class="w-full px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded focus:outline-none focus:bg-blue-600">Signup</button>
        </div>

        
    </form>
</section>

</body>
</html>
