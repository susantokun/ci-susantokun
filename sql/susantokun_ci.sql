/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `tbl_konfigurasi` VALUES (1,'SUSANTOKUN','member.png','admin.png','admin@susantokun.com','081906515912','KOMPLEK BTN Munjul No.12A 02/06, Sukaresmi, Cianjur, Jawa Barat, Indonesia (43253)','https://facebook.com/susantokundotcom','https://instagram.com/susantokun','Susanto ganteng banget loh','Susanto ganteng banget','Susanto ganteng');
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `tbl_role` VALUES (1,'Administrator','Hak akses Administrator'),(2,'Member','Hak akses Member');
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `activation_code` varchar(50) NOT NULL,
  `forgotten_password_code` varchar(50) NOT NULL,
  `forgotten_password_time` datetime NOT NULL,
  `remember_code` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `tbl_user` VALUES (1,1,'Administrator','$2y$05$6YXr8WY51xwBYs3jJl3LE.dBFeDAVrPNbbQjWI9EAc.UrmA.nrn5C','Administrator','Susantokun','admin@mail.com','081906515912','1526456245974.png','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','2018-05-22 20:58:33',1),(2,2,'Member','$2y$05$I/LMp0RtjGQYzpt.HVVJw.Z1y68BCD871T3jvl6K8wHuQxxsK1pLy','Member','Susantokun','member@mail.com','09876545678','1583991814826.png','','','0000-00-00 00:00:00','','2018-05-16 14:31:53','2018-05-22 21:15:27',1);
