-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: ottermart
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `om_category`
--

DROP TABLE IF EXISTS `om_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `om_category` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(25) NOT NULL,
  `catDescription` varchar(255) NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `om_category`
--

LOCK TABLES `om_category` WRITE;
/*!40000 ALTER TABLE `om_category` DISABLE KEYS */;
INSERT INTO `om_category` VALUES (1,'Electronics','TVs, Audio equipment, phones, etc'),(2,'Video Games','Game consoles, controls, games'),(3,'Sports','Sport balls, rackets, weights,  sport bats, etc.'),(4,'Computers','Laptops, tablets, desktops'),(5,'Books','Books, textbook, manuals, magazine, novels'),(6,'Toys','Board games, lego, trading cards'),(7,'Movies','Movies, DVD, Blu Ray');
/*!40000 ALTER TABLE `om_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `om_product`
--

DROP TABLE IF EXISTS `om_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `om_product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(25) NOT NULL,
  `productDescription` varchar(300) NOT NULL,
  `productImage` varchar(300) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `catId` smallint(6) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `om_product`
--

LOCK TABLES `om_product` WRITE;
/*!40000 ALTER TABLE `om_product` DISABLE KEYS */;
INSERT INTO `om_product` VALUES (1,'Lenovo ideapad','Lenovo ideapad 330 15.6\" Laptop, Windows 10, Intel Celeron N4000 Dual-Core Processor, 4GB RAM, 1TB Hard Drive - Plum Purple','https://i5.walmartimages.com/asr/1ff89e48-f337-4db0-8e79-0cb9241e53fc_1.adadeddcebd391cd77674b51115f0c94.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',229.00,1),(3,'Apple iPad Pro','Apple 10.5-inch iPad Pro Wi-Fi 64GB Gold','https://i5.walmartimages.com/asr/bd785e91-c2f1-4bbd-bf48-33338317cf81_1.d797bbe458786d2a8ea385dbaa0a3081.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',570.99,1),(5,'Tickle Me Elmo','Playskool Friends Sesame Street Tickle Me Elmo','https://i5.walmartimages.com/asr/178554d0-a564-4413-85dd-0472e0d08b8e_1.c681da5fb244ec3b6fb9963a22b87612.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',19.45,6),(6,'SAMSUNG 43\" Class 4K TV','SAMSUNG 43\" Class 4K (2160P) Ultra HD Smart LED TV UN43NU6900 (2018 Model)','https://i5.walmartimages.com/asr/a4aa8214-30ee-4fd0-b177-21828eeebbf0_1.07981d95fc037f64329d3ff996885549.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',327.99,1),(7,'iPhone X','Straight Talk Apple iPhone X 64GB, Prepaid Smartphone, Space Gray','https://i5.walmartimages.com/asr/1c7e3080-da80-4ce8-a0fa-073d9c3a0580_1.41b0c0f35e248393a3984baa605b524b.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',899.00,1),(8,'Acer CB3','Chrome OS, Intel Celeron N3060 Dual-Core Processor, 2GB RAM, 16GB Internal Storage','https://i5.walmartimages.com/asr/f3077845-8786-4bfa-ba98-482f06af91a2_1.2bdade6ddc986cbd875304164a98aa06.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',199.00,4),(9,'Sceptre 55\" 4K LED TV','Sceptre 55\" Class 4K (2160P) LED TV (U550CV-U)','https://i5.walmartimages.com/asr/587e8a6f-6f44-45d1-81b7-2f66753b4610_2.fc0d5afbb58ec1fd983a0378788c4dc3.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',259.99,1),(10,'KOSS Headphones','KOSS 192980 UR20 Full-Size, Over-the-Ear Headphones','https://i5.walmartimages.com/asr/df25de6b-90dd-4ac1-8e2c-e0219e91d27c_1.6e5118293d8e6bdd8ae369e6e46e570e.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',26.88,1),(11,'ASUS ROG Strix GL503GE-ES','15.6\" FHD Intel Core i7-8750H, NVIDIA GeForce GTX 1050 Ti 16GB DDR4 RAM, 128GB PCIe SSD + 1TB SSHD, Windows 10','https://i5.walmartimages.com/asr/10f136dd-961a-4b1f-a6aa-cc9dce369f62_1.03b4992f403ef8dc77bdcba7d2d9b3eb.jpeg',1199.00,4),(12,'My Pal Scout','LeapFrogÂ® My Pal Scout','https://i5.walmartimages.com/asr/ebb8604a-328e-41db-8d9d-fa52b23eb3db_1.256773940176c93c62a5eee959759578.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',14.29,6),(13,'HP Stream','HP Stream 14\" Laptop, Windows 10 Home, Office 365 Personal 1-year included, Intel Celeron N3060 Processor, 4GB RAM, 32GB eMMC Storage','https://i5.walmartimages.com/asr/e269955d-0406-497c-ba3c-1e5f75866789_1.5c9fe380b4ed308e7ab058570235f711.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',254.46,4),(15,'Apple Pencil','Multi-touch subsystem','https://i5.walmartimages.com/asr/43e89bcf-0109-4dca-be4c-327e4360397f_1.654c9f461e84feee0b7a6c0b955802f5.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',95.00,1),(18,'Little Tikes TotSports Ea','Childrens basketball play set','https://i5.walmartimages.com/asr/7efabe5e-68a6-4420-905c-8e5563e7d1a1_1.36862bc222d817790ea846548a810cb5.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',29.99,3),(19,'Skullcandy - Crusher Wire','Enjoy thumping bass from your personal playlists with these Skullcandy Crusher Bluetooth headphones. The wireless functionality lets you listen from across the room, and the thick padded earpieces keep your ears comfortable during long listening sessions.','https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5589/5589000_rd.jpg;maxHeight=640;maxWidth=550',128.99,1),(20,'Super Mario Party - Ninte','The Mario Party series is coming to the Nintendo Switch system with super-charged fun for everyone. The original board game style has been kicked up a notch with deeper strategic elements, such as specific dice blocks for each character.','https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6255/6255373_sd.jpg;maxHeight=640;maxWidth=550',59.99,2),(25,'SIze 4 Soccer Ball','Size 4 soccer ball, black and white color','https://i5.walmartimages.com/asr/4368504c-8bbd-4a4e-9ab9-f42d0adc5920_1.1b3f6bc36d6f5b1dd95825755c67f678.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',3.93,3),(26,'Gold\'s Gym Vinyl Dumbbell','Set of 40lb dumbbells','https://i5.walmartimages.com/asr/a8acef7d-9349-4c84-a3c2-6f4d266e2f7d_1.35f820e86b158bb95e690ddc43691280.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',18.99,3),(27,'Grand Theft Auto V','Rockstar Games, PlayStation 4','https://i5.walmartimages.com/asr/ae8894e1-e85f-4260-892c-934bc9a780ca_1.5c2be588c5fe33763f6581f831b5b3f1.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',27.98,2),(28,'Wiffle 32\" Wiffle Bat','Wiffle 32\" Wiffle Bat','https://i5.walmartimages.com/asr/3bcf2d81-45b7-4382-86e7-bcb4d84c3b52_1.bc8cf41a545bd00f0fedb8a1b200f667.jpeg?odnHeight=100&amp;odnWidth=100&amp;odnBg=FFFFFF',3.33,3),(29,'Rawlings Official League ','Rawlings Official League Baseball','https://i5.walmartimages.com/asr/21c4eb98-c123-416c-9d6c-a9b8834225f4_1.8cdc5a529c23e827f0600932527e6cfc.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',2.98,3),(30,'Elephant-Dunphy','Lambs & Ivy Animal Choo Choo Express Plush Elephant-Dunphy','https://i5.walmartimages.com/asr/26435264-a748-414f-82d9-a11bfa742a8c_1.869c2a15bd54fa45b5d7bc577be5ebb8.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',7.46,6),(31,'HP Desktop PC ','	\r\nHP Desktop PC Tower System Windows 10 Intel Core 2 Duo 2.13GHz Processor 4GB Ram 80GB Hard Drive DVD-RW Wifi with a 17\" LCD and Keyboard and Mouse-Refurbished Computer','https://i5.walmartimages.com/asr/7bd6cf84-93a7-4885-aaaa-f63423528424_1.d0268b64b5fbf3d8315dce8a515ba18a.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',107.00,4),(32,'Minnie Mouse','Disney Baby Musical Crawling Pals Plush - Minnie Mouse','https://i5.walmartimages.com/asr/f4a7000d-2e07-4ab0-b6c5-3a40dde11dd9_1.d3813d67a85ae9d220633dde336ce6cf.jpeg?odnHeight=100&odnWidth=100&odnBg=ffffff',19.97,6),(33,'Need for Speed Rivals','EA, PlayStation 4, 014633730623','https://i5.walmartimages.com/asr/e043c71c-daf9-4f8f-86eb-728151f8ac83_1.7478f03b60180c79dd02b6a02ee48da1.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',16.82,2),(34,'Plush Mickey','Disney Clubhouse Fun Talking 11\" Plush Mickey','https://i5.walmartimages.com/asr/83837e48-5716-4819-95e8-4d30466f3c0c_1.35d223d4f53ee90a83c09135559ff41d.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',15.38,6),(35,'Super Smash Bros','Nintendo, Nintendo Wii U, 045496903404','https://i5.walmartimages.com/asr/4c3fc777-e296-4af1-8870-c2b7a510256f_1.70430a06cc169ee1f0d22100eb94b41e.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',53.50,2),(36,'HP Slim 270-p043w','HP Slim 270-p043w DesktopTower, Intel Core i3-7100 Processor, 8GB Memory, 1TB Hard Drive, Wireless Keyboard and Mouse, Windows 10','https://i5.walmartimages.com/asr/9119a973-1311-4efe-a722-14f287930d36_2.886242f7be537421ee6aa577a0f08562.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',349.00,4),(37,'SAMSUNG Chromebook','SAMSUNG Chromebook 3 11.6\" Intel Celeron, 16GB eMMC Storage 4GB Memory - XE500C13-K04US','https://i5.walmartimages.com/asr/6026cac4-e047-4280-b469-b4d8dc95a5ac_1.4bee899459cddd7997ba905430b3d179.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',700.00,4),(38,'A Goofy Movie','A Goofy Movie (DVD)','https://i5.walmartimages.com/asr/ad0cdd35-bbf5-456e-8961-de1a170f5bda_1.3f34ff3bfc95e3af8018fb3b43f4587d.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',15.00,7),(39,'Care for Me Learning Carr','VTechÂ® Care for Me Learning Carrierâ„¢','https://i5.walmartimages.com/asr/2e950afa-fca8-41e8-b30c-c43cd44ea2b7_1.40dad926bcf10fd3a356ed6ecf486d69.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',24.88,6),(40,'Dell Inspiron 15.6\"','Dell Inspiron 15.6\" - Intel Core i5 - 8GB 2400MHz DDR4 - 1 TB 5400 RPM HDD - Intel HD graphics 620 - i3567-5149BLK','https://i5.walmartimages.com/asr/30479c85-5ec5-41be-a289-83d235cf0207_1.b94e70cc3d493cac7380cb0ef5aa636e.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',499.00,4),(41,'HP 15','HP 15-bs244wm 15.6\" Touchscreen Laptop, Windows 10, Intel Pentium N5000 Processor, 4GB Memory, 500 GB Hard Drive, DVD, Scarlet Red','https://i5.walmartimages.com/asr/107062e3-ea86-40bc-b189-ffdb17174f3a_1.66c7edb7a9dc354524bd5cbdcc70fde0.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',349.00,4),(42,'SAW','	\r\nSaw: The Complete Movie Collection (DVD) (VUDU Instawatch Included)','https://i5.walmartimages.com/asr/8080bbce-be81-4a01-9806-2a664b7f5306_1.bea3dea3055591f5377338059dcf501d.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',9.96,7),(43,'Inspiron','15.6\" - Intel Core i5 - 8GB 2400MHz DDR4 - 1 TB 5400 RPM HDD - Intel HD graphics 620 - i3567-5149BLK','https://i5.walmartimages.com/asr/30479c85-5ec5-41be-a289-83d235cf0207_1.b94e70cc3d493cac7380cb0ef5aa636e.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',499.00,4),(44,'Acer CB3-532-C47C','Acer CB3-532-C47C 15.6\" Chromebook, Chrome OS, Intel Celeron N3060 Dual-Core Processor, 2GB RAM, 16GB Internal Storage','https://i5.walmartimages.com/asr/f3077845-8786-4bfa-ba98-482f06af91a2_1.2bdade6ddc986cbd875304164a98aa06.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',199.00,4),(45,'Certified Refurbished HP ','Certified Refurbished HP Stream 14\" Laptop, Windows 10 Home, Intel Celeron N3060 Processor, 4GB RAM, 32GB eMMC Storage\r\n','https://i5.walmartimages.com/asr/f3a9039d-33fd-4d2e-88f9-6aa003db7c57_1.6344d5cae1d99d04b057fe70ff4b760c.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',139.00,4),(46,'iView MAXIMUS III','iView MAXIMUS III - 11.6\" Convertible Touchscreen Laptop (2 in 1) with Windows 10, Intel Atom Processor, 2GB memory, 32GB storage, 2MP Front Camera, 2MP Rear Camera, 10 hour battery - Blue\r\n','https://i5.walmartimages.com/asr/0454332e-4163-48b1-bbe3-54c349f3820a_2.8a482b46b37c5b7d4e89746f288fc487.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',129.00,4),(47,'NANNY MCPHEE-2 MOVIE','FAMILY FUN PACK (DVD) (DVD) (VUDU Instawatch Included)','https://i5.walmartimages.com/asr/d63e9354-f091-44b6-8b42-9ffd707999da_1.aefee78d29115f7e1f8a4ea64167f3a1.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',9.96,7),(48,'Acer Nitro 5','7th Gen Intel Core i5-7300HQ, GeForce GTX 1050 Ti Graphics, 16GB DDR4, 256GB SSD, Windows 10 Home','https://i5.walmartimages.com/asr/e4cfa19d-2812-4984-8d76-8c105c6f2d77_3.fd63ecab04a1eb17200a832dfec87170.jpeg',830.00,4),(49,'Unbroken','VUDU Instawatch Included','https://i5.walmartimages.com/asr/0db1070c-e26b-4d26-abd4-9cbf23e1a631_1.181fa300f341547fd8c51328313635b2.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',9.96,7),(50,'Imaginext Jurassic World ','Jurassic World Jurassic Rex','https://i5.walmartimages.com/asr/c2335bb3-e7ad-4de4-81d0-ce60599cd4a0_1.9c8f2d3c433a7464ec6faf761fe67f05.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',99.00,6),(51,'Tyler Perry\'s A Madea Chr',' The Movie (DVD + Digital) (VUDU Instawatch Included)','https://i5.walmartimages.com/asr/9c16cc2e-f81d-42c2-b34b-af620c15c6b4_1.ac2249d8a06249fd5ba77eb9e2623162.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',9.96,7),(52,'The Peanuts Movie ','VUDU Instawatch Included','https://i5.walmartimages.com/asr/b992e5eb-8ae5-4519-90cd-ad657f42f8fb_1.0e76aa490314dc53d2cf6753e7a1898e.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',9.96,7),(53,'Step2 Thomas the Train Up','Step2 Thomas the Train Up & Down Roller Coaster Ride-On','https://i5.walmartimages.com/asr/dddbc31d-c2c3-4d4b-815a-46179603aa7f_1.a138cb6c4f9c815453b74861f48ac163.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',88.99,6),(54,'Wonder','good book!','https://i5.walmartimages.com/asr/a43107ad-c189-4501-b9a6-771e888c8562_1.70f055397731f39dea5a4e91cea0c0ef.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',10.19,5),(55,'Puppy Birthday to You! (P','Puppy Birthday to You! (Paw Patrol)','https://i5.walmartimages.com/asr/7db2f9c9-6345-41b3-859e-da20d984ca0b_1.05dc73dc189e03a4ed3b1b5bf100b275.jpeg?odnHeight=100&odnWidth=100&odnBg=FFFFFF',4.99,5),(56,'PS4 Pro','Good ps4','https://i5.walmartimages.com/asr/33de3a32-863c-4457-9cce-1fb65036d73c_1.93c6433ebb65dc7ef7d0a3d30dee21fc.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',479.00,1);
/*!40000 ALTER TABLE `om_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `om_purchase`
--

DROP TABLE IF EXISTS `om_purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `om_purchase` (
  `purchaseId` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `unitPrice` float NOT NULL,
  `purchaseDate` date NOT NULL,
  PRIMARY KEY (`purchaseId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `om_purchase`
--

LOCK TABLES `om_purchase` WRITE;
/*!40000 ALTER TABLE `om_purchase` DISABLE KEYS */;
INSERT INTO `om_purchase` VALUES (1,8,7,1,890.99,'2018-09-03'),(2,6,8,2,199,'2018-09-01'),(3,6,13,1,255,'2018-09-01'),(4,4,18,3,30,'2018-08-02'),(5,2,11,2,1200,'2018-08-18'),(6,1,3,2,590,'2018-09-06'),(7,1,5,3,21.97,'2018-09-04'),(8,9,56,1,450.99,'2018-09-05'),(9,7,42,2,10.99,'2018-08-17'),(10,7,53,2,90,'2018-08-03'),(11,10,50,1,100,'2018-08-22'),(12,10,27,1,30.99,'2018-09-28');
/*!40000 ALTER TABLE `om_purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `om_user`
--

DROP TABLE IF EXISTS `om_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `om_user` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `sex` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `om_user`
--

LOCK TABLES `om_user` WRITE;
/*!40000 ALTER TABLE `om_user` DISABLE KEYS */;
INSERT INTO `om_user` VALUES (1,'Isaac','Avila','M','iavila@aol.com'),(2,'Mytchell','Beaton','M','mbeaton@aol.com'),(3,'Ruby','Boyle','F','rboyle@yahoo.com'),(4,'Zobeyda','Chavez','F','zchavez@apple.com'),(5,'Shuyan','Chi','F','schi@yahoo.com'),(6,'Mac','Cooper','M','mcooper@apple.com'),(7,'Ivonne','Garcia','F','igarcia@gmail.com'),(8,'Jorge','Lopez','M','jlopez@gmail.com'),(9,'Kevin','Shofner','M','kshofner@gmail.com'),(10,'Antonio','Vega','M','avega@aol.com'),(11,'Elizabeth','Limon','F','elimon@aol.com'),(12,'Jay','Arrieta','F','jarrieta@aol.com');
/*!40000 ALTER TABLE `om_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-13 22:26:26
