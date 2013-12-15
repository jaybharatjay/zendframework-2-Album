zendframework-2-Album
=====================

Zendframework2 based full Album project
https://github.com/jaybharatjay/zendframework-2-Album.git

##################################################### C:\Windows\System32\drivers\etc\hosts start #####################################
# Copyright (c) 1993-2009 Microsoft Corp.
#
# This is a sample HOSTS file used by Microsoft TCP/IP for Windows.
#
# This file contains the mappings of IP addresses to host names. Each
# entry should be kept on an individual line. The IP address should
# be placed in the first column followed by the corresponding host name.
# The IP address and the host name should be separated by at least one
# space.
#
# Additionally, comments (such as these) may be inserted on individual
# lines or following the machine name denoted by a '#' symbol.
#
# For example:
#
#      102.54.94.97     rhino.acme.com          # source server
#       38.25.63.10     x.acme.com              # x client host

# localhost name resolution is handled within DNS itself.
#	127.0.0.1       localhost
#	::1             localhost

127.0.0.1       localhost

#127.0.0.1       zend

#127.0.0.1       localhost

 127.0.0.1      myZend
 127.0.0.1      zend2
127.0.0.1      zf2
################################### C:\Windows\System32\drivers\etc\hosts  close ####################################


################################### C:\wamp\bin\apache\Apache2.4.4\conf\httpd.conf start  ####################################
#write below line in above fileC:\wamp\www\zf2\config\autoload
<VirtualHost *:80>
     ServerName myZend
     DocumentRoot C:/wamp/www/myZend/public
     SetEnv APPLICATION_ENV "development"
     <Directory C:/wamp/www/myZend>
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
 </VirtualHost>
 
 
 <VirtualHost *:80>
     ServerName zf2
     DocumentRoot C:/wamp/www/zf2/public
     #SetEnv APPLICATION_ENV "development"
	     RewriteEngine off
     <Directory C:/wamp/www/zf2>
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
 </VirtualHost>
 #No need to write here anything : C:\wamp\bin\apache\Apache2.4.4\conf\extra\httpd-vhosts.conf
 #Then in browser write: http://myzend/
 ################################### C:\wamp\bin\apache\Apache2.4.4\conf\httpd.conf close  ####################################
 
 ################################### Database setup start  ####################################
 C:\wamp\www\zf2\config\autoload\global.ph
 C:\wamp\www\zf2\config\autoload\local.php
 ################################### Database setup close  ####################################
 ################################### url for run start  ####################################
 http://zf2/album
 ################################### url for run close  ####################################
 
 ################################### Mysql dummy db start  ####################################
 -- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2013 at 10:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `myzend`
--
CREATE DATABASE IF NOT EXISTS `myzend` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myzend`;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `artist`, `title`) VALUES
(1, 'The  Military  Wives', 'In  My  Dreams'),
(2, 'Adele', '21'),
(3, 'Bruce  Springsteen', 'Wrecking Ball (Deluxe)'),
(4, 'Lana  Del  Rey', 'Born  To  Die'),
(5, 'Gotye', 'Making  Mirrors');

 ################################### Mysql dummy db close  ####################################
