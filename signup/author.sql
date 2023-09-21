
CREATE TABLE `authors` (
  `userId` tinyint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT ''
);