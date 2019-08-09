CREATE TABLE `users` (
    `id` INT(11) AUTO_INCREMENT primary key,
    `naam` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `level` int(2)
);