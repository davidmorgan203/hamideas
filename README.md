hamideas
========

The Hamilton Ideas crowd sourcing pitch platform.

This repository contains the current development progress of the 3 stage Hamilton Ideas platform. 

Configuration wise I'd suggest a local development environment (XAMPP).

MYSQL Config -
username - root (I know we're bad people but its all local for now so shutup)
pw - 
database - hamideas

SQL to Create Current DB Config - 
CREATE TABLE `ideas` (
 `id` int(5) NOT NULL AUTO_INCREMENT,
 `email` varchar(100) DEFAULT NULL,
 `idea` varchar(10000) NOT NULL,
 `votes` int(11) DEFAULT NULL,
 `visible` int(11) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1


This structure is totally subject to change but its what I've written so far.

More to follow ...
