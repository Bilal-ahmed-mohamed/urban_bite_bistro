


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
    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-4">Login Into Admin</h1>
    <form action="./includes/admin.inc.php" method="post">
   
        <div class="mb-4">
            <input type="text" name="email" placeholder="Enter Your Email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <input type="text" name="password" placeholder="Enter Your Password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        

        
        <div class="mb-4">
            <button type="submit" name="login" class="w-full px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded focus:outline-none focus:bg-blue-600">Login</button>
        </div>

        
    </form>
</section>

</body>
</html>
