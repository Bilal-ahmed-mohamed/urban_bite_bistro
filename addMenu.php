<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    
     
      <div>
        <h1 class="text-center mt-10 text-5xl">Meals in the Database</h1>
      </div>
    <form action="includes/upload_food.inc.php" method="POST" class="max-w-xl mx-auto mt-24  p-4 bg-white shadow-md rounded">

    <div class="mb-4">
        <input name="name" type="text" placeholder="Enter name of the dish" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
    <select class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" name="type"  id="item">
        <option value="Appetizer">Appetizer</option>
        <option value="Main_Course">Main course</option>
        <option value="Dessert">Dessert</option>
        <option value="Drinks">Drinks</option>
        
    </select>
    </div>
    <div class="mb-4">
        <input name="description" type="text" placeholder="Enter the description" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
        <input name="price" type="text" placeholder="Enter the price" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
        <input name="image" type="file" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
        <button name="submit" type="submit" class="w-full px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded focus:outline-none focus:bg-blue-600">Upload</button>
    </div>
</form></body>
</html>