CREATE TABLE `users`(
    `users_id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `users_id` int(11) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL
);

CREATE TABLE `admin`(
    `id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
CREATE TABLE `dish`(
    `dish_id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `price` INT NOT NULL,
    `image` VARCHAR(255) NOT NULL
);

INSERT INTO `dish` (`dish_id`, `name`, `type`, `description`, `price`, `image`) VALUES
(1, 'chips kuku', 'Main_Course', 'chips with kfc chicken 3 peices and a 350ml soda', 800, 'pexels-markus-winkler-12178045.jpg'),
(2, 'pizza', 'Main_Course', 'pepperoni pizza', 800, 'pizza.jpeg'),
(3, 'pasta', 'Main_Course', 'pasta with chesse', 500, 'pasta.jpg'),
(4, 'chocolate cake', 'Dessert', 'chocolate cake ', 200, 'chocolate_cake.jpg'),
(5, 'vanilla strawberry cake', 'Dessert', 'melted vanilla strawberry cake', 300, 'vannia_straberr_cake.jpg'),
(6, 'vanilla milkshake ', 'Drinks', 'milkshake of vanilla flavor ', 500, 'vannila_shake.webp'),
(7, 'chocolate shake', 'Dessert', 'milkshake of chocolate flavor ', 300, 'chocolate_shake.webp'),
(8, 'chapati beans ', 'Main_Course', 'chapati with beans', 100, 'chapati_beans.jpg'),
(9, 'kebab', 'Appetizer', 'chicken kebab', 150, 'kebab_chicken.jpg'),
(10, 'sambusa', 'Appetizer', 'sambusa ya nyama', 50, 'sambusa.jpg');


CREATE TABLE `order_items` (
    `order_item_id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT  NOT NULL,
    `dish_id` INT  NOT NULL,
    `quantity` INT NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`orders_id`),
    FOREIGN KEY (`dish_id`) REFERENCES `dish`(`dish_id`)
);
