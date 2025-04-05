-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: purehealthdb
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assessments`
--

DROP TABLE IF EXISTS `assessments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assessments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `productcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessments`
--

LOCK TABLES `assessments` WRITE;
/*!40000 ALTER TABLE `assessments` DISABLE KEYS */;
INSERT INTO `assessments` VALUES (1,'PR687967','CU000001','ngon nha',5,'2025-03-22 13:50:21','2025-03-22 06:50:21');
/*!40000 ALTER TABLE `assessments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chatscript`
--

DROP TABLE IF EXISTS `chatscript`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chatscript` (
  `id` int NOT NULL,
  `poelink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chatboxlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `minilink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminminilink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chatscript`
--

LOCK TABLES `chatscript` WRITE;
/*!40000 ALTER TABLE `chatscript` DISABLE KEYS */;
INSERT INTO `chatscript` VALUES (1,'https://poe.com/s/eA7J736IPqEQcSVllQEA','<iframe src=\"https://www.chatfast.io/chat/4427fcc8-0fc8-46db-abf5-8648c0c73bc4\" style=\"width: 1200px; height: 1000px;\"></iframe>','<script src=\"https://app.tudongchat.com/js/chatbox.js\"></script> <script>   new TuDongChat(\'LaKm0AzxJvjmedPgA-Rwh\').initial() </script>','<script src=\"https://chatfast.io/chat.script.js\" data-chat-service=\"ChatFast\" data-bot-id=\"90da9995-fc16-47e9-b3e1-bded0ef6ec6c\" data-chat-width=\"450px\" data-chat-height=\"600px\"></script>');
/*!40000 ALTER TABLE `chatscript` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedbacks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `feedbackcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forgot_pass_requests`
--

DROP TABLE IF EXISTS `forgot_pass_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forgot_pass_requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `requestcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `forgot_pass_requests_requestcode_unique` (`requestcode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forgot_pass_requests`
--

LOCK TABLES `forgot_pass_requests` WRITE;
/*!40000 ALTER TABLE `forgot_pass_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `forgot_pass_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'create_assessments_table',1),(3,'create_feedback_table',1),(4,'create_forgot_pass_requests_table',1),(5,'create_order_details_table',1),(6,'create_order_status_table',1),(7,'create_orders_table',1),(8,'create_pending_users_table',1),(9,'create_products_table',1),(10,'create_types_table',1),(11,'create_units_table',1),(12,'create_users_table',1),(13,'create_chatscript_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ordercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `realprice` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,'OD011911','PR687967',1,170000.00,'2025-03-22 00:39:22','2025-03-21 17:39:22'),(2,'OD011911','PR536706',1,29000.00,'2025-03-22 00:39:22','2025-03-21 17:39:22'),(3,'OD367531','PR318576',1,100000.00,'2025-03-22 01:04:32','2025-03-21 18:04:32'),(4,'OD367531','PR536706',1,29000.00,'2025-03-22 01:04:32','2025-03-21 18:04:32'),(5,'OD270729','PR536706',10,29000.00,'2025-03-22 01:05:43','2025-03-21 18:05:43'),(6,'OD241475','PR344727',4,19000.00,'2025-03-22 01:07:10','2025-03-21 18:07:10'),(7,'OD666671','PR536706',5,29000.00,'2025-03-22 13:51:37','2025-03-22 06:51:37'),(8,'OD666671','PR344727',1,19000.00,'2025-03-22 13:51:37','2025-03-22 06:51:37');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_status`
--

DROP TABLE IF EXISTS `order_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `statuscode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_status_statuscode_unique` (`statuscode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_status`
--

LOCK TABLES `order_status` WRITE;
/*!40000 ALTER TABLE `order_status` DISABLE KEYS */;
INSERT INTO `order_status` VALUES (1,'OS1','Chờ xác nhận',NULL,NULL),(2,'OS2','Đang giao, chưa thanh toán',NULL,NULL),(3,'OS3','Đang giao, đã thanh toán',NULL,NULL),(4,'OS4','Đã giao thành công',NULL,NULL),(5,'OS5','Bị hủy',NULL,NULL);
/*!40000 ALTER TABLE `order_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ordercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receivername` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiverphone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipaddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `statuscode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orders_ordercode_unique` (`ordercode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'OD011911','CU000001','Nguyễn Văn Chí','0938271828','Số nhà 29, Phường 9, Quận Gò Vấp','Không',165000.00,'OS4','2025-03-22 00:39:22','2025-03-21 17:59:14'),(2,'OD367531','CU242602','Nguyễn Văn Chí','0938271828','Số nhà 29, Xã Hưng Long, Huyện Bình Chánh','Không',117000.00,'OS5','2025-03-22 01:04:32','2025-03-21 18:04:52'),(3,'OD270729','CU242602','Nguyễn Văn Chí','0938271828','Số nhà 29, Xã Tân Thạnh Tây, Huyện Củ Chi','Không',290000.00,'OS4','2025-03-22 01:05:43','2025-03-21 18:08:24'),(4,'OD241475','CU242602','Nguyễn Văn Chí','0938271828','Số nhà 29, Phường Hiệp Thành, Quận 12','Không',76000.00,'OS4','2025-03-22 01:07:10','2025-03-21 18:08:33'),(5,'OD666671','CU000001','Nguyễn Văn Chí','0938271828','Số nhà 29, Phường Thới An, Quận 12','Không',164000.00,'OS3','2025-03-22 13:51:37','2025-03-22 06:52:51');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pending_users`
--

DROP TABLE IF EXISTS `pending_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pending_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `usercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `role` int NOT NULL,
  `active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pending_users_usercode_unique` (`usercode`),
  UNIQUE KEY `pending_users_username_unique` (`username`),
  UNIQUE KEY `pending_users_email_unique` (`email`),
  UNIQUE KEY `pending_users_password_unique` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pending_users`
--

LOCK TABLES `pending_users` WRITE;
/*!40000 ALTER TABLE `pending_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `pending_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `productcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `unitcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picturelink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `typecode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_productcode_unique` (`productcode`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'PR635739','Bông Atiso Tươi Hữu Cơ loại 1','🏳️ Xuất xứ: Đà Lạt, Lâm Đồng  📦 Quy cách đóng gói: theo bông   ❄️ Hướng dẫn bảo quản: Bảo quản ngăn mát tủ lạnh.  📝 Hướng dẫn sử dụng: Dùng nấu các món canh, hầm, nấu soup, sao trà,...','Atiso có nhiều công dụng y học và gần như không có tác dụng phụ. Nó thường được dùng để kích thích sự tiết dịch của gan. Người ta cho rằng tác dụng này sẽ giúp giảm triệu chứng ợ nóng và xây xẩm sau khi say xỉn.\r\nKhông chỉ được dùng cho các bệnh về gan, tác dụng của atiso còn mở rộng sang phòng chống xơ vữa động mạch và chống tăng mỡ trong máu hoặc trị chứng khó tiêu.\r\nAtiso có khả năng giảm lượng cholesterol trong máu, giúp tăng sự thèm ăn, giúp hỗ trợ tiêu hóa và trị chứng khó tiêu ở dạ dày. Nó còn có tính năng chống oxy hóa và bảo vệ gan.\r\nCác tác dụng của atiso về mặt y tế bao gồm:\r\n- Điều trị cholesterol cao, giúp hạ thấp lượng đường trong máu\r\n- Hội chứng ruột kích thích (IBS)\r\n- Các vấn đề về thận, ngăn ngừa sỏi mật\r\n- Thiếu máu, hạ huyết áp\r\n- Giữ nước (phù)\r\n- Viêm khớp\r\n- Nhiễm trùng bàng quang, giúp lợi tiểu\r\n- Các vấn đề về gan\r\n- Dùng như nước dưỡng da hoặc kích thích làm lành da.\r\n- Khả năng giảm chất béo, chẳng hạn như giảm cholesterol trong máu của atiso, là nhờ hai thành phần cynarin và luteolin của loại hoa này.',390000.00,10.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 223914.png','TY706754',1,'2025-03-21 22:40:17','2025-03-21 15:40:17'),(2,'PR558248','Cà chua beef hữu cơ','Free ship 5km cho đơn hàng từ 499k','Cà chua beef hướng hữu cơ là giống cà chua cao cấp khác hẳn cà chua thông thường ở điểm quả cà chua to, chắc, ít hạt, cơm dày.  Cà chua beef cung cấp một lượng Vitamin A, C, K tuyệt vời. Những chất này có tác dụng giúp tăng cường thị lực, phòng bệnh quáng gà. Ngoài ra, cà chua beef hữu cơ còn là loại thực phẩm giúp kiểm soát lượng đường trong máu, có canxi hỗ trợ cho xương chắc khỏe. Cà chua là loại thực phẩm được sử dụng phổ biến trong mỗi bữa ăn cũng như trong làm đẹp của chị em phụ nữ. Tuy nhiên để đảm bảo an toàn thì chúng ta nên chọn cà chua beef hướng hữu cơ hoặc cà chua bi hướng hữu cơ. Thành phần dinh dưỡng của cà chua beef hướng hữu cơ: Cà chua beef là nguồn cung cấp vitamin A, C, K, Các chất carotenoid và bioflavonoid, chất xơ... Quy trình sản xuất cà chua beef hướng hữu cơ: Cà chua beef hướng hữu cơ được trồng bởi trang trại rau organicfood.vn theo phương pháp hữu cơ, đảm bảo không sử dụng thuốc trừ sâu, thuốc kích thích, phân bón hóa học hay bất kì chất độc hại nào.',39000.00,5.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 224816.png','TY706754',1,'2025-03-21 22:48:21','2025-03-21 15:48:48'),(3,'PR239123','Bông cải xanh baby hữu cơ','Bông cải xanh hoặc súp lơ xanh, là một loại cây thuộc họ cải, có hoa lớn ở đầu, thường được dùng như rau. Bông cải xanh thường được chế biến bằng cách luộc hoặc hấp, nhưng cũng có thể được ăn sống như là rau sống trong những đĩa đồ nguội khai vị.','CÁCH SỬ DỤNG \r\nCó rất nhiều món ăn được chế biến từ bông cải xanh chẳng hạn như pasta với bông cải xanh, súp bông cải xanh, bông cải xanh xào tôm... \r\nTa có bông cải xanh trộn dầu hàu, một món ăn giàu đạm và rất ngon hay gà xào bông cải xanh món ăn âm dương kết hợp hài hòa .... \r\nNgoài ra bông cải xanh được dùng để làm các món salad, xào thịt, xào hải sản, giúp món ăn hạ bớt lượng nhiệt từ dầu mỡ, thịt, đảm bảo hài hòa, cân bằng cho bữa ăn...\r\nCÁCH BẢO QUẢN \r\nKhông nên để bông cải xanh chung với các loại trái cây vì đây là loại rau rất nhạy cảm với khí ethylen sinh ra từ một số loại trái cây.',58000.00,50.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 224944.png','TY706754',1,'2025-03-21 22:49:57','2025-03-21 15:49:57'),(4,'PR318576','Cà chua trái cây cherry vàng','Thông tin sản phẩm đang được cập nhật','Thông tin sản phẩm đang được cập nhật',100000.00,12.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 233950.png','TY391824',1,'2025-03-21 23:40:24','2025-03-21 16:40:24'),(5,'PR382990','Bắp ngọt vô cơ','- Xuất Xứ: Việt Nam - Màu sắc: Vỏ xanh trong màu vàng - Ngô ngọt (hay ngô đường, bắp ngọt, bắp đường) là giống ngô có hàm lượng đường cao, hương vị dân dã, quen thuộc với nhiều người.','- Ngô ngọt là kết quả xuất hiện tự nhiên của đặc tính lặn của gen điều khiển việc chuyển đường thành tinh bột bên trong nội nhũ của hạt ngô. Trong khi các giống ngô thông thường được thu hoạch khi hạt đã chín thì ngô ngọt thường được thu hoạch khi bắp chưa chín (ở giai đoạn \"sữa\"), và thường dùng như một loại rau hơn là ngũ cốc. Đây là thực phẩm giàu năng lượng, chứa nhiều chất dinh dưỡng và vitamin, giúp tăng cường sức khỏe cho mắt, tăng cường trí nhớ, tăng cường hệ thống miễn dịch...\r\n+ Giàu calo Nếu trẻ bị suy dinh dưỡng hoặc bạn đang cần tăng cân gấp, hãy đưa ngô ngọt vào chế độ ăn uống thường ngày ngô ngọt cũng cung cấp nguồn năng lượng dồi dào cho sức khỏe\r\n+ Phòng ngừa bệnh trĩ và ung thư là loại thực phẩm giàu chất xơ, vì vậy nó rất có lợi cho tiêu hóa\r\n+ Nguồn vitamin dồi dào , giàu khoáng chất\r\n+ Chất chống oxi hóa ,bảo vệ tim\r\n+ Cải thiện tình trạng thiếu máu,Giảm mức cholesterol\r\n+ Giảm đau khớp, xương\r\n+ Tác dụng tốt cho bệnh nhân Alzheimer',20000.00,1.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234031.png','TY706754',1,'2025-03-21 23:41:18','2025-03-21 16:41:18'),(6,'PR940913','Su su vô cơ','Miếng su su luộc có màu xanh nõn nà, cắn sần sật, có vị ngọt lừ quyện với một chút muối vừng thơm thơm, bùi bùi. Su su luộc phải vừa chín tới và ăn nóng mới ngon.','Luộc quá lửa một chút hoặc để nguội ăn là mất hết vị su su Sapa. Nhưng đặc biệt nhất, chỉ có thể tìm thấy ở Sapa chính là ngọn su su còn xanh mơn mởn. Ngọn su su hợp nhất là xào tỏi chứ không mấy khi luộc hoặc nấu canh. Chỉ đơn giản ra giàn su su và chọn cắt vài đọt su su ở nhánh lá thứ hai kể từ ngọn vì đó là phần mềm và ngọt nhất. Sau đó, tước bỏ lớp xơ bên ngoài và bẻ thành những đoạn ngắn rồi rửa sạch và để ráo nước. Khi chế biến, trước tiên cho một ít dầu ăn vào chảo, sau đó đập một tép tỏi thả vào dầu cho chín vàng và bắt đầu thả ngọn su su đã cắt ngắn vào, đổ thêm một ít nước và nêm cho vừa ăn. Khi rau vừa chín tới, giã thêm một ít tỏi trộn vào rồi cho ra đĩa, dùng nóng',20000.00,2.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234129.png','TY706754',1,'2025-03-21 23:42:05','2025-03-21 16:42:05'),(7,'PR014160','Rong nho tách nước oki budo nhật bản','Rong nho được tách nước giúp bạn dễ bảo quản, chỉ cần ngâm trong nước 3 phút là có thể sử dụng','Món rong nho đầy dinh dưỡng. Rong nho tách nước OKI-BUDO hộp 10 gói x 25g được đóng gói cẩn thận, vệ sinh, có thể ăn sống hoặc ăn tái. Rong nho OKI-BUDO giòn ăn, ăn chung với các loại sốt để ngon miệng hơn',187000.00,1.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234304.png','TY391824',1,'2025-03-21 23:43:09','2025-03-21 16:43:09'),(8,'PR679355','Rau thơm hỗn hợp hữu cơ','Trong ẩm thực, rau thơm hay rau gia vị là khái niệm khái quát dùng để chỉ các loại rau ăn được, được trồng hoặc hái từ tự nhiên, có mùi thơm đặc biệt tùy theo loại do các tinh dầu trong rau bay hơi tạo thành','Trong ẩm thực, rau thơm hay rau gia vị là khái niệm khái quát dùng để chỉ các loại rau ăn được, được trồng hoặc hái từ tự nhiên, có mùi thơm đặc biệt tùy theo loại do các tinh dầu trong rau bay hơi tạo thành',200000.00,50.00,'UN491459','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234345.png','TY706754',1,'2025-03-21 23:43:49','2025-03-21 16:44:18'),(9,'PR376762','Ớt chuông đỏ organicfood','Ớt Chuông có nhiều màu như xanh, đỏ, cam, vàng, thân tròn như quả chuông, hương thơm, vị rất giòn ngọt, ít hăng.','CÔNG DỤNG • Ớt Chuông giàu Vitamin A, K, C, Kali, Magne, chất khoáng và chất xơ. Hổ trợ tiêu hóa, tốt cho mắt, hệ miễn dịch cao, giảm đường và cholesterol trong máu. Kích thích tuần hoàn máu, ngăn ngừa lão hóa. • Ngoài việc kích thích ngon miệng, nó còn bổ sung canxi và ngăn chặn ung thư khá cao. \r\nCÁCH SỬ DỤNG • Trộn salát, ăn tươi sống hoặc xào. • Có thể ép nước uống chung với Cần Tây và Dưa Leo. \r\nLƯỢNG DÙNG • Bạn có thể sử dụng tuỳ thích vì Ớt chứa ít calories và giúp bổ sung các loại vitamins và khoáng chất cần thiết cho cơ thể. \r\nCÁCH BẢO QUẢN •  Để bảo quản được lâu, Ớt được bỏ vào túi ni long có đục lổ hoặc bao bọc bằng giấy thấm nước. Sau đó giữ trong tủ mát nhiệt độ từ 2-10°C. •  Không nên rửa Ớt nếu chưa dùng đến vì nước sẽ làm mau hư Ớ',204000.00,20.00,'UN334834','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234616.png','TY391824',1,'2025-03-21 23:46:24','2025-03-21 16:46:24'),(10,'PR572860','Khoai mỡ hữu cơ','Tại Việt Nam, khoai mỡ được trồng nhiều ở khắp vùng nông thôn để lấy củ ăn.','Khoai mỡ tốt cho những người bị bệnh lý về tim mạch thường có hàm lượng homocysteine cao, gây tổn hại cho thành mạch máu. Vitamin B6 chứa trong khoai mỡ có thể giúp cơ thể phá vỡ homocysteine, ngăn ngừa bệnh tim và đột quỵ. Bên cạnh đó, khoai mỡ cũng giúp kiểm soát được đường huyết trong máu và trọng lượng cơ thể nhờ chứa nhiều chất xơ và carbohydrate phức hợp. Hàm lượng chất xơ cao không chỉ có lợi cho quá trình tiêu hóa, mà còn có tác dụng giảm cân, giúp phân bố đều trọng lượng nên đây cũng là thực phẩm rất thích hợp cho những người muốn giảm béo. Khoai mỡ cũng rất tốt cho phụ nữ tuổi mãn kinh vì giúp giảm những triệu chứng khó chịu của phụ nữ trong giai đoạn này. Khoai mỡ cũng là thực phẩm lợi tiểu nên có tác dụng chống viêm nhiễm, đặc biệt là viêm nhiễm đường tiểu, bàng quang, giảm đau bụng, đau thần kinh, chống căng cơ, chuột rút…',59000.00,10.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234653.png','TY706754',1,'2025-03-21 23:48:17','2025-03-21 16:48:17'),(11,'PR036673','Húng quế hữu cơ','Húng quế là cây rau xanh, lá nhỏ, cành tím','CÔNG DỤNG Húng quế có lợi cho sức khỏe: Tốt cho hệ tiêu hoá, kháng khuẩn, ngăn ngừa lão hóa, lợi sữa, giảm cholesterol, giảm đường trong máu, ngăn ngừa ung thư, trị mụn trứng cá,…     \r\nCÁCH SỬ DỤNG Vừa là một loại gia vị vừa là một vị thuốc. Húng quế có vị cay, thơm dễ chịu thường được ăn kèm với rau sống, bún bò, phở,…',20000.00,10.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234845.png','TY706754',1,'2025-03-21 23:48:51','2025-03-21 16:48:51'),(12,'PR344727','Chanh không hạt','Quả chanh không hạt có đường kính khoảng 6 cm, so với chanh ta thì có kích thước lớn hơn, không hạt, cứng hơn','CÔNG DỤNG \r\n1. Nhuận trường, dễ tiêu hóa Vắt một vài giọt chanh vào sữa để uống có tác dụng hỗ trợ tiêu hóa rất tốt, đặc biệt đối với trẻ em khi hệ tiêu hóa còn yếu. Người bị táo bón nên uống nước chanh hàng ngày sẽ thông đại tiện không những thế còn tăng cường sức đề kháng cho cơ thể.   \r\n2. Bệnh nóng nên uống nhiều nước chanh Các chứng phát nhiệt của cơ thể phần lớn không ăn được, kém ăn dẫn đến cơ thể suy nhược, mệt mỏi. Hãy uống 2-3 ly nước chanh pha đường mỗi ngày để cung cấp vitamin C, đường cho cơ thể đồng thời có tác dụng giải nhiệt, bệnh phát nhiệt nhanh lành.   \r\n3. Nước chanh pha muối Có tác dụng giải khát, tiêu đờm, thông cổ. Loại thức uống này đặc biệt phù hợp với người lao động nặng, nhiều vitamin và khoáng chất bị mất do bài tiết qua da dưới dạng mồ hôi.',19000.00,0.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 234942.png','TY391824',1,'2025-03-21 23:50:12','2025-03-21 16:50:12'),(13,'PR536706','Cà chua bee socola hữu cơ','Cà chua bi so cô la có kích thước nhỏ, quả tròn như viên bi, có màu nâu, mọng nước, ăn vào có vị hơi chua.','CÔNG DỤNG • Cà chua bi sô cô la có công dụng làm đẹp như: chống lão hóa, làm da mịn màng tươi sáng, bảo vệ bề mặt da .... • Cũng giống như các loại cà chua khác công dụng chữa bệnh của cà chua rất nhiều, phòng chống ung thư, chữa viêm gan mãn tính, hỗ trợ cho người bị viêm thận, chữa bệnh tim mach, chữa bí đại tiện, thiếu máu, chữa mún nhọt, bõng lửa, chữa sốt cao kèm theo khát nước hay chữa tăng huyết áp, chảy máu chân răng... \r\nCÁCH SỬ DỤNG • Cà chua bi sô cô la thường được chuộng ăn sống hơn là chế biến thành các món ăn trong bữa cơm. Người ta ăn cà chua bi như một loại trái cây. • Cà chua có thể được ăn sống với món salad, hay ép thành nước hoa quả bổ dưỡng...',29000.00,0.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 235020.png','TY706754',1,'2025-03-21 23:50:45','2025-03-21 16:50:45'),(14,'PR687967','Xà lách hỗn hợp asian','Xà Lách Hỗn Hợp Italian Hữu Cơ Hộp 150 gram : - Được chứng nhận hữu cơ - Giàu Chất xơ','Giàu vitamin và chất chống oxi hóa Xà Lách Hỗn Hợp Italian Hữu Cơ là sản phẩm được làm từ các loại rau hữu cơ - được canh tác tại nông trại Organicfood Dalat. Hơn nữa, qua quy trình xử lý đạt chuẩn HACCP để làm sạch nhất và cho ra sản phẩm có chất lượng cao nhất đến tay người tiêu dùng. Dùng ngay để bảo vệ sức khỏe cho mình và gia đình nhé!',170000.00,20.00,'UN491459','/storage/uploads/2025/03/21/Screenshot 2025-03-21 235109.png','TY391824',1,'2025-03-21 23:51:36','2025-03-21 16:51:36'),(15,'PR275127','Bắp cải tím hữu cơ','Bắp cải tím: tên khoa học là Brassica oleracea var capitata ruba là cây bắp cải có màu tím. Xuất xứ từ Địa Trung Hải, hiện nay được trồng rộng rãi khắp thế giới, thích hợp với khí hậu ôn đới và tại Việt Nam bắp cải tím được trồng nhiều ở Đà Lạt.','• Đặc biệt, lượng vitamin C trong bắp cải tím gấp 6-8 lần so với bắp cải xanh, đồng thời chứa nhiều chất dinh dưỡng thực vật hơn bắp cải xanh. \r\nCách sử dụng: Bắp cải thường được chế biến bằng cách luộc, hoặc xào, làm salad, cuốn thịt hoặc làm gỏi. (Các cách chế biến tham khảo mục món ngon) \r\nCách bảo quản: Khi mua về mà chưa dùng, bạn không rửa bởi khi dính nước nó sẽ nhanh hỏng, hãy để trong túi nhựa và cất ở ngăn mát của tủ lạnh (được khoảng 1 tuần). Nếu dùng một lần không hết cả cái, bạn có thể giữ phần bắp cải còn lại bằng cách vẩy lên một ít nước rồi cho vào túi nhựa và cất trong tủ lạnh.',29000.00,0.00,'UN332543','/storage/uploads/2025/03/21/Screenshot 2025-03-21 235219.png','TY706754',1,'2025-03-21 23:52:25','2025-03-21 16:52:25');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `typecode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `typename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `types_typecode_unique` (`typecode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'TY706754','Hữu cơ','Thực phẩm hữu cơ',1,'2025-03-21 15:36:40','2025-03-21 15:36:40'),(2,'TY391824','Vô cơ','Thực phẩm vô cơ',1,'2025-03-21 15:37:01','2025-03-21 15:37:01');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `unitcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `units_unitcode_unique` (`unitcode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,'UN332543','Kg','Tính theo kilogam','2025-03-21 15:37:36','2025-03-21 15:37:36'),(2,'UN491459','Bó','Tính theo bó','2025-03-21 15:37:47','2025-03-21 15:37:47'),(3,'UN334834','Củ','Tính theo củ','2025-03-21 15:37:58','2025-03-21 15:37:58');
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `usercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `role` int NOT NULL,
  `active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_usercode_unique` (`usercode`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_password_unique` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'CU000001','Admin','nullcommand1@gmail.com','$2y$10$aUSFw6e1XuZne5JYgDZck.WZBcKbH925SEW93AiW3EJAv3iibC6vq','0866860918','2002-07-12',1,1,NULL,'2025-03-22 06:48:21'),(2,'CU242602','nguyenhuutai','pro.chat.0ll5@gmail.com','$2y$10$o2MQxWc9wr6H59OxtdkY6.Fsw8g85n2nkohtuWl2w32eXpm3eG8YS','0866860918','2002-07-12',2,1,'2025-03-21 22:31:32','2025-03-21 18:02:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-23 20:11:11
