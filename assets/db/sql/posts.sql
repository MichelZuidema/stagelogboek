CREATE TABLE `posts` (
  `id` int(11) AUTO_INCREMENT primary key NOT NULL,
  `author_id` int(11),
  `post_title` varchar(50) NOT NULL,
  `post_content` varchar(500) NOT NULL,
  `created_date` date NOT NULL,
  `last_updated` date NOT NULL
);