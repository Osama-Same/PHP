CREATE TABLE users (
  id_user INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOt NUll,
  phone varchar(255) NOT NULL,
  img varchar(255),
  admin_user varchar(255),
  country varchar(255),
  UNIQUE KEY unique_email (email)

);
CREATE TABLE shop (
  id_shop INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_user INT(5),
  name VARCHAR(255),
  img varchar(255),
  name_shop varchar(255),
  category VARCHAR(100) NOT NULL,
  img_shop VARCHAR (100) NOT NULL,
  description VARCHAR(255) NOT NULL,
  city_shop VARCHAR (100) NOT NULL,
  price_shop DOUBLE(6, 2) NOT NULL,
  date DATETIME NOT NULL,
);
CREATE TABLE contact (
  contact_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_user INT(5),
  contact_name VARCHAR(100) NOT NULL,
  contact_email VARCHAR(100) NOT NULL,
  contact_phone VARCHAR(100) NOT NULL,
  contact_massage VARCHAR(255) NOT NULL,
);
CREATE TABLE category (
  category_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nameCategory VARCHAR (100),
  imgCategory varchar(255)
);

INSERT INTO `category` (`category_id`, `nameCategory`, `imgCategory`) VALUES (NULL, 'Laptop', 'tL7ZE46.jpg'), (NULL, 'Mobile', 'screen-4.jpg'), (NULL, 'Computer', 'photo-1587831990711-23ca6441447b.jpg'), (NULL, 'Tablet', '156686-homepage-news-new-amazon-fire-hd-10-and-hd-10-plus-tablets-are-more-powerful-than-ever-before-image1-vzluom7guh.jpg'), (NULL, 'Playstation', 'download.jpg'), (NULL, 'Television', 'b4c87500-69e4-11ea-ba67-7ab40277f25b.jpg');

CREATE TABLE comment(
  comment_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_user INT(5),
  id_shop INT (5),
  name VARCHAR(255) NOT NULL,
  img varchar(255),
  comment varchar(200),
  date_comment varchar(40)
);
CREATE TABLE like(
  id_like INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_user INT(5),
  id_shop INT (5),
  like_shop varchar(255),
);