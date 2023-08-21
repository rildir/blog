-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ağu 2023, 12:55:19
-- Sunucu sürümü: 10.4.16-MariaDB
-- PHP Sürümü: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `seo_url` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `title`, `seo_url`) VALUES
(7, 'PHP', 'php'),
(10, 'JavaScript', 'javascript'),
(32, 'HTML & CSS', 'html-css'),
(35, 'Web Site', 'web-site'),
(37, 'Figma', 'figma');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `img_url` varchar(128) DEFAULT NULL,
  `seo_url` varchar(128) DEFAULT NULL,
  `github_link` varchar(128) DEFAULT NULL,
  `url_link` varchar(128) DEFAULT NULL,
  `highlights` enum('0','1','2','3','4') DEFAULT '1',
  `createdAt` datetime DEFAULT current_timestamp(),
  `post_category_id` int(11) DEFAULT NULL,
  `user_post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `img_url`, `seo_url`, `github_link`, `url_link`, `highlights`, `createdAt`, `post_category_id`, `user_post_id`) VALUES
(62, 'asd', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'acaccxxx2.webp', 'asd', 'https://github.com/rildir', 'https://www.rildir.xyz', '2', '2023-07-31 20:01:11', 35, 2),
(70, 'MadExpres UI Design', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'madexpres.webp', 'madexpres-ui-design', 'https://github.com/rildir', 'https://www.rildir.xyz', '3', '2023-08-02 12:57:59', 37, 2),
(71, 'Sargın Hosmerim', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'acaccxxx.webp', 'sargin-hosmerim', 'https://github.com/rildir', 'https://www.rildir.xyz', '4', '2023-08-02 12:52:46', 35, 2),
(72, 'Fore Sigorta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'ffff1.png', 'fore-sigorta', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-02 12:53:08', 35, 2),
(74, 'Aca', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'acaccxxx1.webp', 'aca', 'https://github.com/rildir', 'https://www.rildir.xyz', '2', '2023-08-02 12:44:38', 35, 2),
(85, 'fgd', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'fgd', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 18:40:41', 7, 2),
(86, 'js', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'js', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 18:41:29', 10, 2),
(87, 'sdf', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'sdf', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 18:49:34', 10, 2),
(89, 'xcvb', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'xcvb', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 19:12:14', 7, 2),
(90, 'vxcv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'vxcv', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 19:12:30', 7, 2),
(91, 'vbcv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'vbcv', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 19:12:39', 32, 2),
(92, 'wefsdfsdfdfg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'wefsdfsdfdfg', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 19:17:13', 32, 7),
(93, 'fdg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'fdg', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 22:45:36', 7, 2),
(94, 'Download YouTube Video Thumbnail in PHP & JavaScript4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'sdffghfg', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 22:45:52', 32, 2),
(95, 'Download YouTube Video Thumbnail in PHP & JavaScript3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'rtfgdfhf', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 22:46:20', 10, 2),
(101, 'Download YouTube Video Thumbnail in PHP & JavaScript5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'sdfdfddfd', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-18 23:50:45', 7, 2),
(106, 'Download YouTube Video Thumbnail in PHP & JavaScript2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', '56709-', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 00:04:44', 7, 7),
(107, 'Download YouTube Video Thumbnail in PHP & JavaScript1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'mub', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 13:23:20', 10, 7),
(108, 'Build URL Shortener using PHP with MySQL & JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'fhjuyi', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:05:15', 10, 2),
(109, 'How to Create a Working Contact Form in PHP', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', '4567', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:10:28', 7, 2),
(110, 'File Upload with Progress Bar HTML CSS & JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', '456798', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:10:37', 7, 2),
(111, 'Custom Captcha Generator in HTML CSS & JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'hkhjk', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:10:51', 32, 2),
(112, 'Create A Draggable Card Slider in HTML CSS & JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'uikyuik', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:14:26', 7, 2),
(113, 'How to Implement Form Validation in HTML CSS and JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'hjghj', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:17:21', 32, 2),
(114, 'Create Draggable Bottom Sheet Modal in HTML CSS & JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'nbmobn', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:17:31', 10, 2),
(115, 'How to Create Your Own ChatGPT in HTML CSS and JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'ghjm', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:17:41', 7, 2),
(116, 'Download YouTube Video Thumbnail in PHP & JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'vbncv', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:20:54', 10, 2),
(117, 'How to Create a Working Contact Form in PHP', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'vbcncvbnc', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:23:34', 7, 2),
(118, 'File Upload with Progress Bar HTML CSS & Javascript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'cvbncvbnvcb', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 14:49:19', 10, 2),
(119, 'How to Build A Weather App in HTML CSS and JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'vvv', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 15:01:20', 10, 2),
(120, 'Create Weather App in HTML Bootstrap and JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'hhh', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 15:05:48', 32, 2),
(121, 'How to Create Working Chatbot in HTML CSS and JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'phpaca.webp', 'ppp', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 15:05:59', 7, 2),
(122, 'Create Text Typing Effect in HTML CSS and Vanilla JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'hcss.webp', 'create-text-typing-effect-in-html-css-and-vanilla-javascript', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-19 15:07:20', 32, 2),
(125, 'Build A Hangman Game in HTML CSS and JavaScript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dolorum quas excepturi provident sequi odit, doloremque commodi ducimus dignissimos! A odit eos, voluptatum commodi exercitationem natus ea ut quia voluptatibus, eius esse nulla optio omnis dolore facilis distinctio tempora aperiam eligendi obcaecati consequatur dicta fuga! Commodi aliquid cupiditate, ipsum facere error quidem eligendi accusamus maiores magni non odit architecto, ullam fugit assumenda, voluptatibus nulla natus eveniet perferendis voluptate? Adipisci molestias nemo minus aliquam enim, maiores repellat autem, sint nesciunt, nobis placeat aspernatur deserunt voluptatum cum odio! Temporibus eos exercitationem id cum sunt repellendus eum voluptatum, velit ipsum, facilis ducimus distinctio.', 'js.webp', 'build-a-hangman-game-in-html-css-and-javascript', 'https://github.com/rildir', 'https://www.rildir.xyz', '1', '2023-08-20 12:18:51', 10, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `about_us` longtext DEFAULT NULL,
  `mission` longtext DEFAULT NULL,
  `vision` longtext DEFAULT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `facebook` varchar(128) DEFAULT NULL,
  `instagram` varchar(128) DEFAULT NULL,
  `github` varchar(128) DEFAULT NULL,
  `linkedin` varchar(128) DEFAULT NULL,
  `twitter` varchar(128) DEFAULT NULL,
  `youtube` varchar(128) DEFAULT NULL,
  `updatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `about_us`, `mission`, `vision`, `logo`, `phone`, `email`, `facebook`, `instagram`, `github`, `linkedin`, `twitter`, `youtube`, `updatedAt`) VALUES
(1, 'Coderec | Front-end Developer', '<p><span style=\"color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" ubuntu,=\"\" cantarell,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" white-space-collapse:=\"\" preserve;=\"\" background-color:=\"\" rgb(247,=\"\" 247,=\"\" 248);\"=\"\">\"I am working at Nano software. I am passionate about creating innovative and efficient solutions to real-world problems. My expertise lies in web development and I\'m always eager to learn and explore new technologies to enhance my skills.\"</span></p>', 'mission', 'vision', 'logo.webp', 21474836, 'ahmetrecepildir@gmail.com', 'facebook', 'https://www.instagram.com/recepildir/', 'https://github.com/rildir', 'https://www.linkedin.com/in/recep-ild%C4%B1r-b5b7a61a9/', 'https://twitter.com/recepildir', 'youtube', '2023-08-21 11:58:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `todo_list`
--

CREATE TABLE `todo_list` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `todo_list`
--

INSERT INTO `todo_list` (`id`, `title`, `description`) VALUES
(27, 'category', 'upload kısmına category değiştirme ekle');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `job` varchar(128) DEFAULT NULL,
  `isActive` enum('1','0') DEFAULT '1',
  `createdAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `job`, `isActive`, `createdAt`) VALUES
(2, 'Coderec', 'recepildir95@gmail.com', 'bedac4511ee15c5293d69d3a19d7938b', 'Web Developer', '1', '2023-07-27 13:32:06'),
(7, 'Nano Yazılım', 'reco@reco.com', '82109967c34dd30ea41fd7630e68bb2c', 'reco', '1', '2023-08-18 22:55:04');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_post_category` (`post_category_id`),
  ADD KEY `FK2_user_id` (`user_post_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `todo_list`
--
ALTER TABLE `todo_list`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `todo_list`
--
ALTER TABLE `todo_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK2_user_id` FOREIGN KEY (`user_post_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_post_category` FOREIGN KEY (`post_category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
