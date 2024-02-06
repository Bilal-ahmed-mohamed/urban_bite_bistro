<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-brown-100 p-4">
  

   <h1 class="text-center">Orders from the customers</h1>

<section>

<table class="w-24 border border-gray-300">
    <thead>
        <tr>
            <th class="py-2 px-4 bg-gray-100 border-b border-gray-300">Order's ID</th>
            <th class="py-2 px-4 bg-gray-100 border-b border-gray-300">Order's Name</th>
            <th class="py-2 px-4 bg-gray-100 border-b border-gray-300">Order's Details</th>
            <th class="py-2 px-4 bg-gray-100 border-b border-gray-300">Amount</th>
            <th class="py-2 px-4 bg-gray-100 border-b border-gray-300">Served</th>
            <th class="py-2 px-4 bg-gray-100 border-b border-gray-300">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="py-2 px-4 border-b border-gray-300">1</td>
            <td class="py-2 px-4 border-b border-gray-300">Chips Mayai</td>
            <td class="py-2 px-4 border-b border-gray-300">Moses</td>
            <td class="py-2 px-4 border-b border-gray-300">150</td>
            <td class="py-2 px-4 border-b border-gray-300">
                <a href="#" class="text-blue-500 hover:underline">Served</a>
            </td>
            <td class="py-2 px-4 border-b border-gray-300">
                <button class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded">CANCEL</button>
            </td>
        </tr>
        <tr>
            <td class="py-2 px-4 border-b border-gray-300">2</td>
            <td class="py-2 px-4 border-b border-gray-300">Ugali Skuma</td>
            <td class="py-2 px-4 border-b border-gray-300">Wewe</td>
            <td class="py-2 px-4 border-b border-gray-300">200</td>
            <td class="py-2 px-4 border-b border-gray-300">
            <a href="#" class="text-blue-500 hover:underline">Served</a>
            </td>
            <td class="py-2 px-4 border-b border-gray-300">
                <button class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded">CANCEL</button>
            </td>
        </tr>
    </tbody>
</table>

</section>




    
</body>
</html>