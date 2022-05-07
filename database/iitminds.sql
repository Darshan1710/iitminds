-- Adminer 4.3.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `is_active` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `password`, `is_active`) VALUES
(1,	'admin',	'admin123',	'1');

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(300) NOT NULL,
  `author_description` varchar(300) NOT NULL,
  `author_img` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `blog_img` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `tag` varchar(300) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `blog` (`id`, `author_name`, `author_description`, `author_img`, `title`, `blog_img`, `description`, `tag`, `date`) VALUES
(11,	'ashish',	'CTO',	'assets/admin/images/blog/WhatsApp_Image_2017-06-13_at_4_16_09_PM.jpeg',	'topper',	'assets/admin/images/blog/WhatsApp_Image_2017-06-13_at_4_16_09_PM.jpeg',	'smartads',	'hello',	'2017-06-13');

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(300) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `integrated_batch` date NOT NULL,
  `regular_batch` date NOT NULL,
  `commencement` date NOT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `courses` (`id`, `image_path`, `heading`, `description`, `integrated_batch`, `regular_batch`, `commencement`, `duration`) VALUES
(1,	'assets/admin/images/project/standard-VIII-coaching-class.jpg',	'Standard VIII',	'Comprehensive Learning System To Lay A Strong Foundation Enroll Now !',	'0000-00-00',	'0000-00-00',	'2017-05-01',	1),
(2,	'assets/admin/images/project/standard-IX-coaching-class.jpg',	'Standard IX',	'Comprehensive Learning System To Lay A Strong Foundation Enroll Now !',	'0000-00-00',	'0000-00-00',	'2017-05-01',	1),
(3,	'assets/admin/images/project/standard-X-coaching-class.jpg',	'Standard X',	'Comprehensive Learning System To Lay A Strong Foundation Enroll Now !',	'0000-00-00',	'0000-00-00',	'2017-04-13',	1),
(4,	'assets/admin/images/project/jee-nee-mht-cet.jpg',	'JEE / NEET / MHT-CET',	'Prepare for the entrance examinations with an assurance from IITMINDS Enroll Now !',	'2017-05-01',	'2017-06-10',	'0000-00-00',	2),
(5,	'assets/admin/images/project/XI-XII-science.jpg',	'XI / XII (Science)',	'A Powerful system to enable you to achieve your best scores at the boards Enroll Now !',	'2017-05-01',	'2017-06-10',	'0000-00-00',	2);

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(225) DEFAULT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `courses` varchar(225) DEFAULT NULL,
  `message` varchar(225) NOT NULL,
  `page_link` varchar(225) NOT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `enquiry` (`enquiry_id`, `subject`, `name`, `email`, `phone`, `courses`, `message`, `page_link`) VALUES
(1,	'IIT-Minds : Enquiry from Website !',	'ashish',	'ashish.babariya.8@gmail.com',	'9029191089',	'School',	'cvbcvb fhfghfgh ffsdfdsdf sddfsfd',	'localhost/IIT-Minds/ajax-load/reservation-form.php'),
(2,	'IIT-Minds : Enquiry from Website !',	'ashish',	'ashish@gmail.com',	'9029191089',	'JEE',	'ewr we rweqr qwe',	'localhost/IIT-Minds/index.php'),
(3,	'IIT-Minds : Enquiry from Website !',	'ashish',	'ashish@gmail.com',	'9029191098',	'Collage',	'adfa efasf sad',	'localhost/IIT-Minds/ajax-load/reservation-form.php');

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `batch` varchar(300) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `feedback` (`id`, `author`, `photo`, `batch`, `comment`) VALUES
(1,	'ADITI RAMUGADE',	'assets/admin/images/testimonials/mht-cet-batch.png',	'MHT-CET BATCH 2015',	'The coaching and the study material provided by IITMINDS is excellent.<br> 						We got the most dedicated faculties who had good co-ordination with the students , portion was covered timely & properly. 						Thanks to all the teaching & non-teaching staff for their guidance.'),
(2,	'SHYAM SINGH',	'assets/admin/images/testimonials/jee-batch.png',	'JEE BATCH - 2015',	'IITMINDS provides great teaching faculty. Not only its teaching staff , but also its non-teaching staff helped me a lot. 						This class helped me by taking extra sessions for doubt clearing and also boosted my confidence at every point to get better each day. 						It is a great learning experience at IITMINDS.'),
(3,	'PRATIK JAIN',	'assets/admin/images/testimonials/jee-batchs.png',	'JEE BATCH - 2014',	'I am extremely grateful to the entire team of IITMINDS for their excellent guidance & brilliant coaching which helped me in achieving success at JEE 2014.  						Thanks to IITMINDS for their guidance & important tips upto the last minute. The expert faculties not only cleared all my concepts , but also cleared all my doubts at any time I called. 						IITMINDS helped me to realize my potential and fully capitalise on it. The support from faculties gave me direction and new innovative ways to learn. 						In my enriching experience with IITMINDS , the main focus was on concepts & rigorous practise which helped me succeed. 						I recommend IITMinds to all IIT aspirants for achieving the best results in JEE.'),
(4,	'ADITI SHAH',	'assets/admin/images/testimonials/neet.png',	'CURRENTLY PURSUING B. PHARMACY',	'My two years at IITMINDS were among the best years of my life. I found students and teachers engaged with each other. I gained a lot of confidence from constructive direction given by all faculty members. Thank all the teaching and non-teaching staff for their support.');

DROP TABLE IF EXISTS `future_post`;
CREATE TABLE `future_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `future_post` (`id`, `image`, `title`, `date`) VALUES
(2,	'assets/admin/images/future_post/1.jpg',	'xyz',	'2017-12-23'),
(3,	'assets/admin/images/future_post/1.jpg',	'pqr',	'2017-12-23'),
(4,	'assets/admin/images/future_post/1.jpg',	'abc',	'2017-12-23'),
(5,	'assets/admin/images/future_post/1.jpg',	'darshan',	'2017-12-23');

DROP TABLE IF EXISTS `mediagroup`;
CREATE TABLE `mediagroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_id` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mediagroup` (`id`, `media_id`) VALUES
(1,	'1'),
(2,	'2'),
(3,	'3'),
(4,	'4'),
(5,	'5'),
(6,	'6'),
(7,	'7'),
(8,	'8'),
(9,	'9'),
(10,	'10');

DROP TABLE IF EXISTS `mediapress`;
CREATE TABLE `mediapress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(300) NOT NULL,
  `src` varchar(300) NOT NULL,
  `width` varchar(375) NOT NULL,
  `height` varchar(480) NOT NULL,
  `title` varchar(480) NOT NULL,
  `media_id` varchar(480) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mediapress` (`id`, `class`, `src`, `width`, `height`, `title`, `media_id`) VALUES
(1,	'newspaper',	'assets/admin/images/media-press/99.jpg',	'375',	'480',	'Newspaper Article 1',	'1'),
(2,	'classroom',	'assets/admin/images/media-press/02.png',	'375',	'233',	'Classroom',	'2'),
(3,	'newspaper',	'assets/admin/images/media-press/s19.jpg',	'375',	'475',	'Newspaper Article 1',	'3'),
(4,	'classroom',	'assets/admin/images/media-press/03.png',	'375',	'233',	'Classroom',	'4'),
(5,	'newspaper',	'assets/admin/images/media-press/s111.jpg',	'',	'',	'Newspaper Article 1',	'6'),
(6,	'newspaper',	'assets/admin/images/media-press/s112.jpg',	'',	'',	'Newspaper Article 2',	'6'),
(7,	'newspaper',	'assets/admin/images/media-press/s113.jpg',	'',	'',	'Newspaper Article 3',	'6'),
(8,	'newspaper',	'assets/admin/images/media-press/s114.jpg',	'',	'',	'Newspaper Article 4',	'6'),
(9,	'seminar wide',	'assets/admin/images/media-press/iit-mind-founder.jpg',	'',	'',	'Seminar 1',	'5'),
(10,	'seminar wide',	'assets/admin/images/media-press/iit-mind-founders.jpg',	'',	'',	'Seminar 2',	'5'),
(11,	'felicitations',	'assets/admin/images/media-press/s16.jpg',	'375',	'233',	'Felicitations 1',	'7'),
(12,	'newspaper',	'assets/admin/images/media-press/s1.jpg',	'',	'',	'Newspaper Article 1',	'8'),
(13,	'newspaper',	'assets/admin/images/media-press/s2.jpg',	'',	'',	'Newspaper Article 2',	'8'),
(14,	'newspaper',	'assets/admin/images/media-press/s3.jpg',	'',	'',	'Newspaper Article 3',	'8'),
(15,	'newspaper',	'assets/admin/images/media-press/s4.jpg',	'',	'',	'Newspaper Article 4',	'8'),
(16,	'newspaper',	'assets/admin/images/media-press/s5.jpg',	'',	'',	'Newspaper Article 5',	'8'),
(17,	'newspaper',	'assets/admin/images/media-press/s6.jpg',	'',	'',	'Newspaper Article 6',	'8'),
(18,	'newspaper',	'assets/admin/images/media-press/s7.jpg',	'',	'',	'Newspaper Article 7',	'8'),
(19,	'newspaper',	'assets/admin/images/media-press/s8.jpg',	'',	'',	'Newspaper Article 8',	'8'),
(20,	'felicitations',	'assets/admin/images/media-press/1.png',	'375',	'233',	'Felicitations 1',	'9'),
(21,	'felicitations',	'assets/admin/images/media-press/11.png',	'375',	'233',	'Felicitations 2',	'9'),
(22,	'felicitations',	'assets/admin/images/media-press/111.png',	'375',	'233',	'Felicitations 3',	'9'),
(23,	'felicitations',	'assets/admin/images/media-press/1111.png',	'375',	'233',	'Felicitations 4',	'9'),
(24,	'classroom',	'assets/admin/images/media-press/01.png',	'375',	'233',	'Classroom ',	'10');

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `news` (`id`, `news`) VALUES
(1,	'JEE (Mains) result will be declared on 27th April, 2017.'),
(2,	'NEET examination will be conducted on 7th May, 2017.'),
(3,	'NEET-UG results will be declared on 8th June, 2017'),
(4,	'MHT-CET examination will be conducted on 11th May, 2017'),
(5,	'MHT-CET results will be declared on 4th June, 2017'),
(6,	'SSC results will be declared by 6th June, 2017');

DROP TABLE IF EXISTS `opening_hours`;
CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(300) NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `opening_hours` (`id`, `day`, `open`, `close`) VALUES
(1,	'Mon - Sat',	'10:00:00',	'07:00:00'),
(2,	'Sun',	'10:00:00',	'07:00:00');

DROP TABLE IF EXISTS `result`;
CREATE TABLE `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `result` (`id`, `src`, `title`, `subtitle`) VALUES
(2,	'assets/admin/images/result/1.jpg',	'Title Place Here',	'SubTitile Place Here'),
(3,	'assets/admin/images/result/5.jpg',	'Title Place Here',	'SubTitile Place Here'),
(4,	'assets/admin/images/result/3.jpg',	'Title Place Here',	'SubTitile Place Here'),
(5,	'assets/admin/images/result/4.jpg',	'Title Place Here',	'SubTitile Place Here'),
(6,	'assets/admin/images/result/2.jpg',	'Title Place Here',	'SubTitile Place Here'),
(10,	'assets/admin/images/result/6.jpg',	'Title Place Here',	'Subtitle Place Here');

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `slider` (`id`, `slider`) VALUES
(1,	'assets/admin/images/bg/neet-classes-in-mumbai.jpg'),
(2,	'assets/admin/images/bg/neet-classes-in-ghatkopar.jpg'),
(3,	'assets/admin/images/bg/best-coaching-institute-for-medical-entrance-exam.jpg');

-- 2017-07-08 07:00:12
