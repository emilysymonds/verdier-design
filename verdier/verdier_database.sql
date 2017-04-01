-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipw01.eigbox.net
-- Generation Time: Mar 31, 2017 at 12:26 AM
-- Server version: 5.6.32
-- PHP Version: 4.4.9
-- 
-- Database: `verdier`
-- 
CREATE DATABASE `verdier` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `verdier`;

-- --------------------------------------------------------

-- 
-- Table structure for table `eventos`
-- 

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `eventos`
-- 

INSERT INTO `eventos` VALUES (1, '1.jpg');
INSERT INTO `eventos` VALUES (2, '2.jpg');
INSERT INTO `eventos` VALUES (3, '3.jpg');
INSERT INTO `eventos` VALUES (4, '4.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `general`
-- 

CREATE TABLE `general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `general`
-- 

INSERT INTO `general` VALUES (1, 'Verdier Landscape Design Studio is the largest multidisciplinary team in South America, based in Montevideo, Uruguay, committed to the creation of functional, beautiful, artistic, personal and public open areas in gentle harmony with its created or natural surroundings, pouring an intense sense appeal towards unique lifestyles.<br><br>\r\n\r\nVerdier PROVIDES every resource needed to fulfil attractive landscaping projects with a strong emphasis on design concepts.We evaluate, we design, we create proficiently, we solve...we move.Verdier is seeking new world destinations for its work: to deliver, each project, a one of a kind creation...exceeding expectations...and beyond...setting free our passion to move emotions.Verdier designs and completes first world quality projects.<br><br>\r\n\r\nWe have sold and managed numerous projects internationally, and are now focusing on the most exquisite and demanding markets such as the Middle East and Asia. Verdier has established strategic associations with leader companies in their fields of expertise which perform, in accordance with the established work plan, in a coordinated manner, generating a synergy, to ensure the accomplishment of the team''s goals as a unity.<br><br>\r\n\r\nEach supplemental need is contemplated and scheduled ahead to be completed in a timely manner, according to pre-established deadlines.The Verdier team studies, observes, designs and solves in a sensible manner within a functional manner and environmental awareness, with respect for the ecosystems which creates and those that coexist.Gabriela Verdier, Chief Designer, has studied, investigated and developed an extensive knowledge about the theory and philosophy of each style of garden design.  She is constantly updating her education and incorporating the latest design concepts, trends, strategies, techniques, solutions, accessories with the advice from the most outstanding teachers and her specially admired mentors in the landscape design field Worldwide.<br><br>\r\n\r\nHer ideas contemplate colour, rhythm, balance, mystery, aromas, botanical and biological species interaction and comfort. She knows how important it is for her to do an extensive research concerning soil, water and climate conditions whenever a new project is to be developed and especially the PURPOSE the area to be designed it is intended for. Gabriela has been honoured with international awards and prizes which back up her natural skills to create innovate and appeal to the senses when being evaluated by the experts.  A feeling of natural balance to the untrained eye also is achieved. Nevertheless, her most appreciated reward has always been the customer''s enjoyment of the  spaces she designs.Verdier Landscape Design Studio supplements her design concepts with solutions to soil movement, filling or excavations, setting in place life, colour and texture.<br><br>\r\n\r\nWe provide ground covers, lawns, ornamental elements of nature, watering systems, water features, fountains, lighting, paving, musical ambiance, thematic elements, fun accessories, amenities, decorative items, pieces of art, outdoor furniture, shade canopies or vegetal umbrellas, mirrors, natural stone and glass.With regards to plant varieties which are foreign to the region, Verdier has the logistics to obtain, transport and implant species adaptable to the soil and weather conditions anywhere in the world so as to achieve from the most traditional to the most snobbish fantasy area conceived.<br><br>\r\n\r\nAt Verdier we care about the use of water. Water quantity and quality control, maintenance, pumping circulation and aeration accessories are carefully selected in our ponds, aquatic gardens and water mirrors.In as much as possible we implement the use of drought resistant plants and shrub species, groundcovers and our lawn specialists especially promote the use of saline water tolerant grasses.');

-- --------------------------------------------------------

-- 
-- Table structure for table `persona`
-- 

CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `persona`
-- 

INSERT INTO `persona` VALUES (1, 'Gabriela Verdier Mazzara', 'Landscape Designer', 'Principal at Verdier Estudio Paisaj&iacute;stico, a multidisciplinary landscaping design studio based in Uruguay, South America with executed projects in different parts of the world ranging from South America to the U.A.E. <br>\r\nShe graduated as a Decorator at the Scuola di Disenio Gino Moncalvo. <br>\r\nMrs. Verdier has been President of The Garden Clubs of Uruguay and The Uruguayan Rose Society. She is a devoted Horticulturist who won several prizes such as The Bronze Medal from The Royal Horticultural Society, UK. \r\n', '1ee73cb23bcdc02470ab8486012e8772.jpg');
INSERT INTO `persona` VALUES (2, 'Pedro Verdier Mazzara', 'Architect', 'Important proyects and construction of housing, comercial instalations, farming constructions, educational and religious. Project Manager for International Companies such as Louis Vuitton, Ermenegildo Zegna. He has been working for 30 years with the National Civil Aviation and Aeronautical Infrastractural Agency and is actually Director of the Architect Division. Worked in various programs of International Cooperation for the ONU Development Program as the National counterpart. Goverment Consultant regarding Pathology of the Construction. ', '2a5fde97f7aaef9a5588788616574711.jpg');
INSERT INTO `persona` VALUES (3, 'Ignacio Verdier Mazzara', 'Biologist', 'He is a specialist in Fauna & Flora.\r\n\r\nHe is the Head of Fauna & Flora at Verdier Estudio Paisaj&iacute;stico. He has worked in several UN Projects regarding the conservation of the Ecosystem.', '73bc88f2d2ed261f0fcc538130dd24fd.jpg');
INSERT INTO `persona` VALUES (4, 'Daniel Vazquez Ferrari', 'Persepectivist', 'Mr. Vazquez is one of the best lift hand designers and a recognized artist.\r\nHe is an important water colourist and his works are widely recognized. \r\nMr. Vazquez is Head of Design at Verdier Estudio Paisaj&iacute;stico.', 'b5e0e4c5d2d618df15b469e013a58d19.jpg');
INSERT INTO `persona` VALUES (6, 'Germaine Carter Decurnex', 'Agriculture Engineer', 'Agriculture Engineer\r\nProject Designer \r\nWatering specialist', '03cd74c68b797641d11ac8dcee04d72d.JPG');
INSERT INTO `persona` VALUES (7, 'Fortunata Buono', 'Design Manager', '', '7651005497c8c8e0fcad01346a0ac5d1.JPG');
INSERT INTO `persona` VALUES (8, 'Agustina Aldabalde', 'Exterior Public Relations', '', 'c503e896a2612e33b840f6465a277d2c.jpg');
INSERT INTO `persona` VALUES (15, 'Diego Verdier Benia', 'Economist', 'Logistic backing', 'e27c062223ebe3f9591299eee3b7f626.jpg');
INSERT INTO `persona` VALUES (17, 'Gonzalo Capraio', 'Civil and Environmental Engineer', 'Education obtained at Cornell University where he acquired a Master in Enginnering.\r\nKnowledge on Hydrolgy.', 'a61876434c0f4760e10c63e69a979738.jpg');
INSERT INTO `persona` VALUES (18, 'Sara Perrone Gaudin', 'Public Relations', '', '73585358b80411154d2716a4166d8d8d.jpg');
INSERT INTO `persona` VALUES (19, 'Emilia Baluga Gonz&aacute;lez', 'Interior Designer', '', 'IMG_9284.JPG');
INSERT INTO `persona` VALUES (20, 'Mar&iacute;a In&eacute;s Chicurel Anso', 'Architect', '', 'yooo.jpg');
INSERT INTO `persona` VALUES (21, 'Mar&iacute;a P&iacute;a L&oacute;pez', '', 'Commercial Training Program - PFC. ISEDE, Business School. <br>\r\nDigital Marketing University Expert - Facultad Regional de Buenos Aires <br>\r\nCulture and University Extension Secretary <br>\r\nDegree in Communication. Communication Faculty - Universidad de Montevideo.<br>', 'perfil.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `prensa`
-- 

CREATE TABLE `prensa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `prensa`
-- 

INSERT INTO `prensa` VALUES (7, '97182832a93fde5689ab6d718554618a.jpg');
INSERT INTO `prensa` VALUES (10, '56af23c485ece15f15f6e93c467961dd.jpg');
INSERT INTO `prensa` VALUES (11, '31f5a0923e6dbe011d04be7566af4d6e.jpg');
INSERT INTO `prensa` VALUES (12, '1e0a18e3554ee3dd208857076a94a092.jpg');
INSERT INTO `prensa` VALUES (14, 'f3cec3d5bdcbe5a031545317d4be198a.jpg');
INSERT INTO `prensa` VALUES (15, '8e256cba63d7de82d953b1ae48defa41.jpg');
INSERT INTO `prensa` VALUES (16, '47b2734826b0268bb9bf1b15b80c06ab.jpg');
INSERT INTO `prensa` VALUES (18, '06e8d86995be34990ce9d8590341705e.jpg');
INSERT INTO `prensa` VALUES (19, 'ba1b31ad1f359e0a8482f3e7ff82ce71.jpg');
INSERT INTO `prensa` VALUES (21, 'f0bbab6ee27d3191d2e2ec2cfe86e259.jpg');
INSERT INTO `prensa` VALUES (22, '89498808888690bf84bab74ea7f915ed.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `proyecto`
-- 

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

-- 
-- Dumping data for table `proyecto`
-- 

INSERT INTO `proyecto` VALUES (30, 'fca985abf5cfcb5a0d21e932e4f936fb.jpg');
INSERT INTO `proyecto` VALUES (31, '0a15a25f8bd9e40bc982c8394bcd60e4.jpg');
INSERT INTO `proyecto` VALUES (32, '1e83eb7e4b3d3e2f412cd690d5f69b13.jpg');
INSERT INTO `proyecto` VALUES (33, '47e1b9d09435b583797a6038cd4f9e68.jpg');
INSERT INTO `proyecto` VALUES (35, 'db88aee50c4f370682f0a3d2a30bd78f.jpg');
INSERT INTO `proyecto` VALUES (36, '99733bdbb474924b64a18c6bffa07215.jpg');
INSERT INTO `proyecto` VALUES (37, '85c866ca7e7df1defa2750a181722221.jpg');
INSERT INTO `proyecto` VALUES (38, 'a9cc782f73a7b6caa02364839411599f.jpg');
INSERT INTO `proyecto` VALUES (39, '9a019935fef0d8dc88baf90ac5810f3b.jpg');
INSERT INTO `proyecto` VALUES (40, '24813af3083b42f653e5a68aaf3847dc.jpg');
INSERT INTO `proyecto` VALUES (41, '38435c30694d34ca6bd6461dd5bedde9.jpg');
INSERT INTO `proyecto` VALUES (42, 'b5835497075e7c6c1df20243b39f9980.jpg');
INSERT INTO `proyecto` VALUES (43, '78383fe6e59363ddcf8f134c7d01a6ba.jpg');
INSERT INTO `proyecto` VALUES (44, 'a1b892d2e9dc402727650d73b3664f9f.jpg');
INSERT INTO `proyecto` VALUES (45, '4136e563b88e4e41144060211a7f43b1.jpg');
INSERT INTO `proyecto` VALUES (46, '21da39c8d86d18c8c5d296acc59674b8.jpg');
INSERT INTO `proyecto` VALUES (47, '5c508e9841249c38f7d2cd6b6e0b4a0d.jpg');
INSERT INTO `proyecto` VALUES (48, 'e5cfacf59900b63aa1b3d60062bea884.jpg');
INSERT INTO `proyecto` VALUES (49, 'efeddbe737a0ab7ab43f5f90ff31f6eb.jpg');
INSERT INTO `proyecto` VALUES (50, 'e4219f9c892104e6b9e8487c8998d29f.jpg');
INSERT INTO `proyecto` VALUES (51, 'c44c1e6c36395e1dd5db952c74eb6209.jpg');
INSERT INTO `proyecto` VALUES (52, 'ee483ef6c415171fb8165f52db20292b.jpg');
INSERT INTO `proyecto` VALUES (53, '83e91055d2f538125c2244bbc2df412e.jpg');
INSERT INTO `proyecto` VALUES (54, '8b41385c1b1c047fdb43ace8fe5c2e32.jpg');
INSERT INTO `proyecto` VALUES (55, '61229cb877be14d95f88a87ef611dcc3.jpg');
INSERT INTO `proyecto` VALUES (56, 'b42f20238fc8776a70e70509616f5bea.jpg');
INSERT INTO `proyecto` VALUES (57, '52be88a34ecb2456cf8d53cbb0da8695.jpg');
INSERT INTO `proyecto` VALUES (58, '4df211acd95c8a35b18c44b0b9035ad1.jpg');
INSERT INTO `proyecto` VALUES (59, 'f927f1f1c1476ca06945c6a9f7932074.jpg');
INSERT INTO `proyecto` VALUES (60, '84544835d25ecb680e96ad88d0b1f9e6.jpg');
INSERT INTO `proyecto` VALUES (61, '909f167252dd39d829cc2946511750ab.jpg');
INSERT INTO `proyecto` VALUES (62, 'c5a695c825b1057d6bb2078282e6af50.jpg');
INSERT INTO `proyecto` VALUES (64, 'e7b9300199d1f011b3ef67f67e41d5e6.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `trabajo`
-- 

CREATE TABLE `trabajo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(255) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

-- 
-- Dumping data for table `trabajo`
-- 

INSERT INTO `trabajo` VALUES (37, '2e72c1cea577bba75b8d6f269e84ad22.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (39, 'bb6449771e7c31136202145c3dc485b1.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (40, '64fdd3e73d5b65776a024af9b8f71c55.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (41, '4e87a1acb18bee992368c027a2fe166e.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (42, 'c7357abf885749a1535792bc57beb681.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (43, '9d52548bb95a4754625e0b200a4c57f3.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (44, 'c7b083201342f15a8d38a903d089ce97.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (45, '5e7a77ec3a3c8624f38c403f32d8809e.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (46, '9943fcb76ea3e0228172553ac311a171.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (48, 'd26185e3eefa1a10fbd79082148194e0.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (49, 'b249a4114d816e9c70c4c70f5587a298.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (50, '57d6f95330652207152c98578b3657f1.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (51, '2a83eccb9a25533255f9e8b775430303.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (52, 'fe57591a1d099b8c2cb7ff15c0c4156a.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (54, '0077cfda89e458cef38ca51d5f171fc8.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (55, '0b7bb939c9f7bb3fc409302ff382fc0f.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (56, '83719f567cf8b62d796468a5af5efeaf.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (57, 'eb42fe5ef1ab717e1b1618faf4719f3b.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (59, '0f4331cfaf56ebf3784e3d5c6d92911c.JPG', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (60, 'a792afaabbba690847649fc7876d7d50.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (61, 'd64e0c6971f89064aa4979bc8a85175c.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (62, 'f1c73ad33c2b1592f2d04e33c8be60f4.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (63, 'bc72d65c97f8f7568b67f0be41420351.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (64, '7b457e4e917948d8fb8bd3484fde4c57.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (65, 'a4647ebe263241126163759cc9be7a86.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (66, '0477d4cedd68649df90e680d8b5c98cf.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (67, '60b38db8a8d39ec747a8bbf6ca8e4168.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (68, 'bda52755818cfb63bd55f3fa5cc14873.jpg', 'Punta Ballena');
INSERT INTO `trabajo` VALUES (73, 'b20d35e571987afe3504f8487cd336a0.jpg', '');
INSERT INTO `trabajo` VALUES (74, 'f43dbb2cd4b60b1b5cc04166b67d00fd.jpg', '');
