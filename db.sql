CREATE TABLE `users`(
    `users_id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
CREATE TABLE `orders`(
    `orders_id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `users_id` INT NOT NULL,
    `amount` INT NOT NULL,
    `table_number` INT NOT NULL,
     FOREIGN KEY (users_id) REFERENCES users(users_id)
);
ALTER TABLE
    `orders` ADD UNIQUE `orders_users_id_unique`(`users_id`);
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

CREATE TABLE `order_items` (
    `order_item_id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT  NOT NULL,
    `dish_id` INT  NOT NULL,
    `quantity` INT NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`orders_id`),
    FOREIGN KEY (`dish_id`) REFERENCES `dish`(`dish_id`)
);
