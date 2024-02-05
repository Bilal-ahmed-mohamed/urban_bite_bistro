<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<!-- Sidebar with Width of 40 -->
<div class="bg-gray-900 text-white h-screen w-40 fixed top-0 left-0">
    <div class="flex flex-col items-center justify-center h-full">
        <!-- Sidebar Links -->
        <a href="#" class="py-4 text-center hover:bg-gray-700 transition duration-300 ease-in-out transform hover:scale-110">
            <a href="">menu</a>
        </a>
        <a href="#" class="py-4 text-center hover:bg-gray-700 transition duration-300 ease-in-out transform hover:scale-110">
            <a href="">Orders</a>
        </a>
        <a href="#" class="py-4 text-center hover:bg-gray-700 transition duration-300 ease-in-out transform hover:scale-110">
            <a href="">Tables </a>
        </a>
    </div>
</div>

<!-- Main Content -->
<div class="ml-40 p-4"> <!-- Adjust margin-left to accommodate the wider sidebar -->
    <h1 class="text-2xl font-semibold">Dashboard</h1>
    <p class="mt-2">Welcome to your dashboard. Select an option from the sidebar.</p>
</div>

</body>
</html>
