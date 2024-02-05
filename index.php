<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="includes/upload_food.inc.php" method="POST">
         
    <input name="name" type="text" placeholder="Enter name of the dish">
    <input name="type" type="text" placeholder="Enter type of the dish">
    <input name="description" type="text" placeholder="Enter the description">
    <input name="price" type="text" placeholder="Enter the price">
    <input name="image" type="file" placeholder="Upload the image">


    <button name="submit" type="submit">Upload</button>


</form>
</body>
</html>