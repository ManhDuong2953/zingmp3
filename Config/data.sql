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
INSERT INTO `album` VALUES (1,1,'Nhạc EDM Gây Nghiện 2023','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528767/thumbnail_album/bia.jpg.jpg','Tự do','Nhiều nghệ sỹ'),(2,1,'Born Pink','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531217/thumbnail_album/Born_Pink_Digital.jpeg.jpg','Tự do','BLACKPINK'),(3,1,'Nhạc Trẻ Vinahouse','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695634462/thumbnail_album/9e8c67c23bace04d5e0e99b850ced883.jpg.jpg','Tự do','Nhiều nghệ sỹ');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `favorite_list`
--

LOCK TABLES `favorite_list` WRITE;
/*!40000 ALTER TABLE `favorite_list` DISABLE KEYS */;
INSERT INTO `favorite_list` VALUES (17,16,1),(18,12,1),(19,14,1),(20,1,1);
/*!40000 ALTER TABLE `favorite_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
INSERT INTO `song` VALUES (1,1,1,'BT REMIX','The Hills x Where Have You Been Thereon Remix','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528878/song_thumbnail/maxresdefault%20%282%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695528882/audio/y2mate.com%20-%20The%20Hills%20x%20Where%20Have%20You%20Been%20Thereon%20Remix%20%20Nh%E1%BA%A1c%20Xu%20H%C6%B0%E1%BB%9Bng%20Tiktok%20G%E1%BA%A7n%20%C4%90%C3%A2y.mp3.mp3','2023-09-24 06:14:43','4:09',17,1),(2,1,1,'THEREON REMIX','LIGHT IT UP X RISE THEREON REMIX','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528928/song_thumbnail/1686051523405_640.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695528934/audio/y2mate.com%20-%20LIGHT%20IT%20UP%20X%20RISE%20THEREON%20REMIX%20NH%E1%BA%A0C%20HOT%20TREND%20TIKTOK%20M%E1%BB%9AI%20NH%E1%BA%A4T%202023.mp3.mp3','2023-09-24 06:15:34','4:32',36,0),(3,1,1,'THEREON REMIX','Dadada - Thereon Remix Nhạc Hot Tiktok 2023','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695529051/song_thumbnail/artworks-000549583251-iylikg-t500x500.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695529055/audio/y2mate.com%20-%20Dadada%20%20Thereon%20Remix%20%20Nh%E1%BA%A1c%20Hot%20Tiktok%202023.mp3.mp3','2023-09-24 06:17:35','3:24',24,0),(4,1,1,'Exclusive Team','Grow Up - Guhancci Remix Exclusive Team','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695529134/song_thumbnail/maxresdefault%20%281%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695529138/audio/y2mate.com%20-%20Grow%20Up%20%20Guhancci%20Remix%20%20Exclusive%20Team%20%20Nh%E1%BA%A1c%20N%E1%BB%81n%20G%E1%BA%ADy%20Nghi%E1%BB%87n%20Hot%20Tik%20Tok%20Vi%E1%BB%87t%20Nam%20.mp3.mp3','2023-09-24 06:18:59','4:23',46,0),(5,2,1,'BLACKPINK ','BLACKPINK - ‘Yeah Yeah Yeah’ (Official Audio)','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531294/song_thumbnail/maxresdefault%20%283%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695531299/audio/y2mate.com%20-%20BLACKPINK%20%20Yeah%20Yeah%20Yeah%20Official%20Audio_320kbps.mp3.mp3','2023-09-24 06:55:00','2:59',6,0),(6,2,1,'BLACKPINK ','Pink Venom · BLACKPINK','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531366/song_thumbnail/blackbink%204.png.png','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695531370/audio/y2mate.com%20-%20Pink%20Venom.mp3.mp3','2023-09-24 06:56:11','3:07',4,0),(7,2,1,'BLACKPINK ','BLACKPINK X PUBG MOBILE Ready For Love','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695531483/song_thumbnail/default.webp.webp','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695531487/audio/y2mate.com%20-%20BLACKPINK%20X%20PUBG%20MOBILE%20%20Ready%20For%20Love%20MV.mp3.mp3','2023-09-24 06:58:07','3:06',4,0),(8,1,1,'SLEX REMIX','HILK HILK REMIX','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695631898/song_thumbnail/maxresdefault%20%284%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695631905/audio/y2mate.com%20-%20Hik%20Hik%20Slex%20Remix%20nhactre2023%20kunzmusic%20hottrend2023%20nhachaymoingay_320kbps.mp3.mp3','2023-09-25 10:51:47','4:59',8,0),(9,1,1,'KORDHELL','KORDHELL - MURDER PLOT','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695632249/song_thumbnail/maxresdefault%20%285%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695632253/audio/y2mate.com%20-%20KORDHELL%20%20MURDER%20PLOT_320kbps.mp3.mp3','2023-09-25 10:57:35','2:06',2,0),(10,1,1,'TVT REMIX','NEVADA ft. LANTERNS - TVT REMIX','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695632496/song_thumbnail/artworks-aCw4bkY7YE8h9xS3-NVQIyA-t500x500.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695632501/audio/y2mate.com%20-%20Nevada%20x%20Lantern%20%20TvT%20Remix%20%20%20Nh%E1%BA%A1c%20Hot%20tiktok%20Bu%C3%B4ng%20H%C3%A0ng_320kbps.mp3.mp3','2023-09-25 11:01:43','4:30',2,0),(11,3,1,'THÁI HOÀNG REMIX','TATU (THÁI HOÀNG REMIX)','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695634732/song_thumbnail/38.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695634736/audio/y2mate.com%20-%20TATU%20TH%C3%81I%20HO%C3%80NG%20REMIX%20%20NH%E1%BA%A0C%20REMIX%20TIKTOK%20HOT%20NH%E1%BA%A4T%20HI%E1%BB%86N%20NAY_320kbps.mp3.mp3','2023-09-25 11:38:58','3:01',2,0),(12,3,1,'TBynz Remix','Lừa Dối - TBynz Remix','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695634910/song_thumbnail/37.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695634915/audio/y2mate.com%20-%20L%E1%BB%ABa%20D%E1%BB%91i%20TBynz%20Remix%20%20Nh%E1%BA%A1c%20Hot%20Trending%20Tik%20Tok%20Th%C3%A1i%20Ho%C3%A0ng%20Remix_320kbps.mp3.mp3','2023-09-25 11:41:56','1:23',2,1),(14,3,1,'NAMINO REMIX','Cho Em Gần Anh Thêm Chút Nữa Remix ','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695635279/song_thumbnail/artworks-000311128110-1x9wq1-t500x500.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695635654/audio/df.mp3.mp3','2023-09-25 11:54:16','3:44',1,1),(15,3,1,'MR T X YANBI X HẰNG BINGBOONG ft. NIN HOÀNG & BIBO REMIX','Thu Cuối Remix','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695635968/song_thumbnail/maxresdefault%20%286%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695635972/audio/y2mate.com%20-%20MR%20T%20X%20YANBI%20X%20H%E1%BA%B0NG%20BINGBOONG%20%20THU%20CU%E1%BB%90I%20REMIX%20NIN%20HO%C3%80NG%20%20BIBO%20%20TIK%20TOK_320kbps.mp3.mp3','2023-09-25 11:59:34','3:27',4,0),(16,3,1,'Dương Minh Tuấn & DN Team','Quá Khứ Anh Không Thể Quên Remix','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695636721/song_thumbnail/sddefault.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695636770/audio/dd.mp3.mp3','2023-09-25 12:12:54','3:14',5,1),(17,3,1,'Hieii Remix ft.Thomas Xynh','Về Đây Em Lo Remix','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695637060/song_thumbnail/maxresdefault%20%287%29.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695637068/audio/y2mate.com%20-%20V%E1%BB%81%20%C4%90%C3%A2y%20Em%20Lo%20Hieii%20remix%20HOT%20TIKTOK_320kbps.mp3.mp3','2023-09-25 12:17:49','1:08',1,0),(18,3,1,'Đại Mèo Remix','THUYỀN QUYÊN X DIỆU KIÊN','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695637329/song_thumbnail/1678186054355_640.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695637334/audio/d.mp3.mp3','2023-09-25 12:22:15','2:13',4,0),(19,3,1,'Dunghoangpham & Exclusive Music','Mật Ngọt (Nam Con Remix)','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695637508/song_thumbnail/artworks-uLUnnW6h3gKIFXpc-pF0p5w-t500x500.jpg.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695637515/audio/g.mp3.mp3','2023-09-25 12:25:17','4:24',2,0),(20,3,1,'KAIZ ft. ATOM | Thanh Phong Remix','Thời Gian Sẽ Trả Lời','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695637697/song_thumbnail/ab67616d0000b273607bfeb85b5550baf7b2a908.jfif.jpg','https://res.cloudinary.com/dnhps1jbn/video/upload/v1695637701/audio/y2mate.com%20-%20Th%E1%BB%9Di%20Gian%20S%E1%BA%BD%20Tr%E1%BA%A3%20L%E1%BB%9Di%20Remix%20%20Thanh%20Phong%20Ft%20EDM%20Hot%20Tik%20Tok_320kbps.mp3.mp3','2023-09-25 12:28:22','1:10',2,0);
/*!40000 ALTER TABLE `song` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Dương Văn Mạnh','manhduong2953','manhme62','https://res.cloudinary.com/dnhps1jbn/image/upload/v1695528696/avatar_link/Hinh-anh-chan-dung-nam-dep-nghe-thuat-400x600.jpg.jpg',NULL),(2,'Tiêu Công Lộc','locnguyen99','123','https://static2.yan.vn/YanNews/2167221/202003/dan-mang-du-trend-thiet-ke-avatar-du-kieu-day-mau-sac-tu-anh-mac-dinh-b0de2bad.jpg',NULL);
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

-- Dump completed on 2023-09-25 22:23:51
