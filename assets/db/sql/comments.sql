CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(300) NOT NULL
);