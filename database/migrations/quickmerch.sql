-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2015 at 12:47 PM
-- Server version: 5.6.19-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quickmerch`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `country` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(80) DEFAULT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country` (`country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `currency` varchar(200) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `currency_code` varchar(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_name` varchar(50) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `sold_out` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(20) NOT NULL,
  `plan_price` varchar(10) NOT NULL,
  `max_products` int(4) NOT NULL,
  `max_product_images` int(3) NOT NULL,
  `custom_pages` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT 'New Product',
  `price` varchar(10) NOT NULL DEFAULT '0.00',
  `on_sale` varchar(5) NOT NULL DEFAULT 'false',
  `description` blob NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'images/mainImage.jpg',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_preference`
--

CREATE TABLE IF NOT EXISTS `shipping_preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `alone_price` decimal(10,0) NOT NULL,
  `other_price` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `store_name` varchar(200) NOT NULL,
  `description` blob,
  `paypal_email` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) NOT NULL,
  `store_type_id` int(11) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `tax` varchar(10) DEFAULT NULL,
  `domain` varchar(200) DEFAULT NULL,
  `subDomain` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Table structure for table `store_types`
--

CREATE TABLE IF NOT EXISTS `store_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `plan_type` int(2) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` int(4) DEFAULT NULL,
  `country` int(4) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `store_name` varchar(200) NOT NULL,
  `subDomain` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `plan_upgradtion_date` datetime NOT NULL,
  `activation_code` varchar(8) DEFAULT NULL,
  `account_status` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_verified` tinyint(1) DEFAULT NULL,
  `account_setup` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `shipping_preference` CHANGE `other_price` `with_price` DECIMAL( 10, 0 ) NOT NULL ;
ALTER TABLE `products` CHANGE `status` `status` VARCHAR( 50 ) NOT NULL DEFAULT 'active';
 TABLE `products` DROP `image` ;
ALTER TABLE `shipping_preference`
  DROP `user_id`,
  DROP `store_id`;
ALTER TABLE `options` DROP `store_id` ,
DROP `user_id` ;
ALTER TABLE `options` CHANGE `in_stock` `stock` INT( 11 ) NOT NULL ;
ALTER TABLE `options` CHANGE `sold_out` `sold` INT( 11 ) NOT NULL ;
ALTER TABLE `options` CHANGE `option_name` `name` VARCHAR( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;
ALTER TABLE `images` DROP `store_id` ;
ALTER TABLE `images` CHANGE `image_url` `image_path` VARCHAR( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;
ER TABLE `images` ADD `image_name` VARCHAR( 255 ) NOT NULL AFTER `product_id` ;
ALTER TABLE `products` ADD `stock` INT NOT NULL DEFAULT '0' AFTER `category_id` ,
ADD `sold` INT NOT NULL DEFAULT '0' AFTER `stock` ;
ALTER TABLE `images` CHANGE `status` `status` TINYINT( 1 ) NOT NULL DEFAULT '1';
ALTER TABLE `images` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ;
ALTER TABLE `images` ADD `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ;


------------Design setting table------------


CREATE TABLE IF NOT EXISTS `design_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `background_img` varchar(255) DEFAULT NULL,
  `background_img_setting` smallint(1) DEFAULT NULL COMMENT '0-titled,1-streched',
  `header_img` varchar(255) DEFAULT NULL,
  `header_img_setting` smallint(1) DEFAULT NULL COMMENT '0-auto,1-full-width,2-custom-width',
  `header_width_type` smallint(1) DEFAULT NULL COMMENT '0-percentage,1-pixcel',
  `header_width` int(11) DEFAULT NULL,
  `logo_text` varchar(255) DEFAULT NULL,
  `logo_text_position` smallint(6) DEFAULT NULL COMMENT '0-left,1-right,2-center',
  `background_color` varchar(200) DEFAULT NULL,
  `product_background_color` varchar(200) DEFAULT NULL,
  `header_text_color` varchar(200) DEFAULT NULL,
  `header_background` varchar(200) DEFAULT NULL,
  `text_color` varchar(200) DEFAULT NULL,
  `text_rollover_color` varchar(200) DEFAULT NULL,
  `text_font_family` varchar(200) DEFAULT NULL,
  `text_font_size` varchar(200) DEFAULT NULL,
  `layout_options` int(11) DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


----------Google fonts table structure and data -------


CREATE TABLE IF NOT EXISTS `google_fonts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `font_family` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `google_fonts`
--

INSERT INTO `google_fonts` (`id`, `font_family`) VALUES
(1, 'Questrial'),
(2, 'Source Sans Pro'),
(3, 'Dosis'),
(4, 'Abel'),
(5, 'Fira Sans'),
(6, 'Domine'),
(7, 'Droid Sans'),
(8, 'Cantata One'),
(9, 'Lato'),
(10, 'Antic Slab'),
(11, 'Cabin'),
(12, 'Fauna One'),
(13, 'BenchNine'),
(14, 'Neuton'),
(15, 'News Cycle'),
(16, 'Michroma'),
(17, 'Lora'),
(18, 'PT Sans'),
(19, 'Poiret One'),
(20, 'Armata'),
(21, 'Syncopate'),
(22, 'PT Sans Narrow'),
(23, 'Ropa Sans'),
(24, 'Tinos'),
(25, 'Istok Web'),
(26, 'Arimo'),
(27, 'Quicksand'),
(28, 'Paytone One'),
(29, 'Oleo Script'),
(30, 'Ubuntu'),
(31, 'Gudea'),
(32, 'Marck Script'),
(33, 'Droid Sans Mono'),
(34, 'Josefin Sans'),
(35, 'Bitter'),
(36, 'Lobster'),
(37, 'Monda'),
(38, 'Anton'),
(39, 'Josefin Slab'),
(40, 'Libre Baskerville'),
(41, 'Copse'),
(42, 'Source Code Pro'),
(43, 'Exo'),
(44, 'Asap'),
(45, 'Cantarell'),
(46, 'Muli'),
(47, 'Alegreya Sans'),
(48, 'Ubuntu Condensed'),
(49, 'Droid Serif'),
(50, 'Inconsolata'),
(51, 'Pacifico'),
(52, 'Molengo'),
(53, 'Jura'),
(54, 'Allerta'),
(55, 'Julius Sans One'),
(56, 'Signika'),
(57, 'Cuprum'),
(58, 'Dancing Script'),
(59, 'Courgette'),
(60, 'Play'),
(61, 'Open Sans'),
(62, 'Open Sans Condensed:300'),
(63, 'Noticia Text'),
(64, 'Merriweather'),
(65, 'Varela'),
(66, 'Indie Flower'),
(67, 'Alegreya'),
(68, 'Yanone Kaffeesatz'),
(69, 'Comfortaa'),
(70, 'Titillium Web'),
(71, 'Sintony'),
(72, 'Roboto Condensed'),
(73, 'Ruda'),
(74, 'Merriweather Sans'),
(75, 'Playball'),
(76, 'Roboto Slab'),
(77, 'Sanchez'),
(78, 'Trocchi'),
(79, 'Karla'),
(80, 'Playfair Display SC'),
(81, 'Enriqueta'),
(82, 'Changa One'),
(83, 'Oswald'),
(84, 'Alice'),
(85, 'Oxygen'),
(86, 'Maven Pro'),
(87, 'Satisfy'),
(88, 'Hind'),
(89, 'Archivo Black'),
(90, 'Bree Serif'),
(91, 'Nobile'),
(92, 'Basic'),
(93, 'Passion One'),
(94, 'Patua One'),
(95, 'Amaranth'),
(96, 'Pontano Sans'),
(97, 'Varela Round'),
(98, 'Hammersmith One'),
(99, 'Telex'),
(100, 'Marmelad'),
(101, 'Nunito'),
(102, 'Fjalla One'),
(103, 'Crimson Text'),
(104, 'Voltaire'),
(105, 'Sacramento'),
(106, 'Boogaloo'),
(107, 'Exo 2'),
(108, 'Gentium Book Basic'),
(109, 'Raleway'),
(110, 'Vidaloka'),
(111, 'Lobster Two'),
(112, 'Slabo 27px'),
(113, 'Kaushan Script'),
(114, 'Cinzel'),
(115, 'Roboto');

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `theme_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `theme`, `theme_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'theme-1', 'themes/theme-1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'theme-2', 'themes/theme-2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'theme-3', 'themes/theme-3', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'teme-4', 'themes/theme-4', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');



ALTER TABLE `design_settings` ADD `default_css` VARCHAR( 255 ) NULL ,
ADD `custom_css` VARCHAR( 255 ) NULL ;



