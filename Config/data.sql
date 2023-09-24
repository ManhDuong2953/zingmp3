-- MySQL dump 10.13  Distrib 8.1.0, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: zingmusic
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,1,'Nhạc EDM Gây Nghiện 2023','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528767/thumbnail_album/bia.jpg.jpg','Tự do','Nhiều nghệ sỹ'),(2,1,'Born Pink','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531217/thumbnail_album/Born_Pink_Digital.jpeg.jpg','Tự do','BLACKPINK');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `favorite_list`
--

LOCK TABLES `favorite_list` WRITE;
/*!40000 ALTER TABLE `favorite_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorite_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
INSERT INTO `song` VALUES (1,1,1,'BT REMIX','The Hills x Where Have You Been Thereon Remix','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528878/song_thumbnail/maxresdefault%20%282%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695528882/audio/y2mate.com%20-%20The%20Hills%20x%20Where%20Have%20You%20Been%20Thereon%20Remix%20%20Nh%E1%BA%A1c%20Xu%20H%C6%B0%E1%BB%9Bng%20Tiktok%20G%E1%BA%A7n%20%C4%90%C3%A2y.mp3.mp3','2023-09-24 06:14:43','4:09',4,0),(2,1,1,'THEREON REMIX','LIGHT IT UP X RISE THEREON REMIX','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528928/song_thumbnail/1686051523405_640.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695528934/audio/y2mate.com%20-%20LIGHT%20IT%20UP%20X%20RISE%20THEREON%20REMIX%20NH%E1%BA%A0C%20HOT%20TREND%20TIKTOK%20M%E1%BB%9AI%20NH%E1%BA%A4T%202023.mp3.mp3','2023-09-24 06:15:34','4:32',8,0),(3,1,1,'THEREON REMIX','Dadada - Thereon Remix Nhạc Hot Tiktok 2023','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695529051/song_thumbnail/artworks-000549583251-iylikg-t500x500.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695529055/audio/y2mate.com%20-%20Dadada%20%20Thereon%20Remix%20%20Nh%E1%BA%A1c%20Hot%20Tiktok%202023.mp3.mp3','2023-09-24 06:17:35','3:24',2,0),(4,1,1,'Exclusive Team','Grow Up - Guhancci Remix Exclusive Team','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695529134/song_thumbnail/maxresdefault%20%281%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695529138/audio/y2mate.com%20-%20Grow%20Up%20%20Guhancci%20Remix%20%20Exclusive%20Team%20%20Nh%E1%BA%A1c%20N%E1%BB%81n%20G%E1%BA%ADy%20Nghi%E1%BB%87n%20Hot%20Tik%20Tok%20Vi%E1%BB%87t%20Nam%20.mp3.mp3','2023-09-24 06:18:59','4:23',6,0),(5,2,1,'BLACKPINK ','BLACKPINK - ‘Yeah Yeah Yeah’ (Official Audio)','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531294/song_thumbnail/maxresdefault%20%283%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695531299/audio/y2mate.com%20-%20BLACKPINK%20%20Yeah%20Yeah%20Yeah%20Official%20Audio_320kbps.mp3.mp3','2023-09-24 06:55:00','2:59',0,0),(6,2,1,'BLACKPINK ','Pink Venom · BLACKPINK','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531366/song_thumbnail/blackbink%204.png.png','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695531370/audio/y2mate.com%20-%20Pink%20Venom.mp3.mp3','2023-09-24 06:56:11','3:07',0,0),(7,2,1,'BLACKPINK ','BLACKPINK X PUBG MOBILE Ready For Love','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531483/song_thumbnail/default.webp.webp','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695531487/audio/y2mate.com%20-%20BLACKPINK%20X%20PUBG%20MOBILE%20%20Ready%20For%20Love%20MV.mp3.mp3','2023-09-24 06:58:07','3:06',0,0);
/*!40000 ALTER TABLE `song` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Dương Văn Mạnh','manhduong2953','manhme62','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528696/avatar_link/Hinh-anh-chan-dung-nam-dep-nghe-thuat-400x600.jpg.jpg',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-24 17:31:44
