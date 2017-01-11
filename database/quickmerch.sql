-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2015 at 09:59 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
-- Table structure for table `design_settings`
--

CREATE TABLE IF NOT EXISTS `design_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `theme_type` varchar(255) DEFAULT NULL,
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
  `default_css` varchar(255) DEFAULT NULL,
  `custom_css` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `google_fonts`
--

CREATE TABLE IF NOT EXISTS `google_fonts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `font_family` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=186 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_pages`
--

CREATE TABLE IF NOT EXISTS `master_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

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
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=271 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

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
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `category_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  `sold` int(11) NOT NULL DEFAULT '0',
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
  `country_id` int(11) NOT NULL,
  `alone_price` decimal(10,0) NOT NULL,
  `with_price` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

-- --------------------------------------------------------

--
-- Table structure for table `store_themes`
--

CREATE TABLE IF NOT EXISTS `store_themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `store_theme_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `theme_tpl_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=>install,1=>publish',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=103 ;

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
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `theme_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `theme_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `theme_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `theme_slider_images`
--

CREATE TABLE IF NOT EXISTS `theme_slider_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `design_settings_id` int(11) NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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



/** 
* CHANGES-------------------
* Don't forget to run these queries.
**/

ALTER TABLE `promocodes` DROP `pc_value` ;
ALTER TABLE `promocodes` CHANGE `pc_percent` `value` DOUBLE NOT NULL ;
ALTER TABLE `promocodes` ADD `unit` VARCHAR( 100 ) NOT NULL AFTER `value` ;
ALTER TABLE `orders` CHANGE `order_status` `order_status` VARCHAR( 100 ) NOT NULL COMMENT 'pending,shipped,cancel,complete';
ALTER TABLE `customers` CHANGE `country` `country` VARCHAR( 500 ) NOT NULL ,
CHANGE `state` `state` VARCHAR( 500 ) NOT NULL ;
ALTER TABLE `customers` CHANGE `zip_code` `zip_code` VARCHAR( 11 ) NOT NULL ;
ALTER TABLE `order_items` ADD `option_id` INT NOT NULL AFTER `item_quantity` ;

