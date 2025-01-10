-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2025 lúc 12:02 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htkdtm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `duong_link_youtube` varchar(255) DEFAULT NULL,
  `noi_dung` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `mo_ta` varchar(1000) DEFAULT NULL,
  `ten_nguoi_tao` varchar(255) NOT NULL,
  `nganh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id`, `ten`, `anh`, `duong_link_youtube`, `noi_dung`, `created_at`, `updated_at`, `deleted_at`, `mo_ta`, `ten_nguoi_tao`, `nganh`) VALUES
(1, 'Cấu trúc dữ liệu và giải thuật', 'images/8ptk6C8Pht46TNzvxzD91L9HxoYUAS3jpUKlHzYM.jpg', 'https://www.youtube.com/watch?v=ZEJ6MKuUZds&list=PLux-_phi0Rz0nsE6QikvCgve8afhistvU&ab_channel=28tech', NULL, '2025-01-09 02:37:42', '2025-01-09 02:37:42', NULL, NULL, 'Lâm', '1'),
(2, 'An toàn bảo mật thông tin', 'images/RmL6EjQBP2TROavi8Qn30m6WG5E3wMR9qdpawCJW.jpg', 'https://www.youtube.com/watch?v=N3DQJPOiMkc&list=PL_jAnFPw7i2GQoIpMSXcitacj_3qDcD16&ab_channel=MsIT%28MS_IT%29', NULL, '2025-01-09 05:14:33', '2025-01-09 05:14:33', NULL, NULL, 'Lâm', '1'),
(3, 'Hệ điều hành', 'images/FLB6pO5RzWeHDaWkNgUEcSNosgGLipXph3JSXDYY.jpg', 'https://www.youtube.com/watch?v=Krjb7cnhsdY&list=PLyxSzL3F7487ypL1n3rLSb6MC4uV-iqSb&ab_channel=TITV', '<p>Hệ điều hành (Operating System) là một môn học trong lĩnh vực công nghệ thông tin, tập trung nghiên cứu cách các hệ thống máy tính quản lý tài nguyên và cung cấp giao diện giữa phần cứng và phần mềm. Môn học này bao gồm các chủ đề như quản lý tiến trình, quản lý bộ nhớ, hệ thống tập tin, và bảo mật. Sinh viên sẽ tìm hiểu cách hệ điều hành tổ chức và điều phối các tiến trình nhằm tối ưu hiệu năng và đảm bảo tính ổn định. Các hệ điều hành phổ biến như Windows, Linux, và macOS thường được sử dụng làm ví dụ minh họa. Môn học này không chỉ quan trọng trong việc phát triển phần mềm mà còn hỗ trợ hiểu rõ hơn về cách các hệ thống máy tính vận hành.</p>', '2025-01-09 05:34:38', '2025-01-09 05:34:38', NULL, 'Hệ điều hành là môn học nghiên cứu cách quản lý tài nguyên và tương tác giữa phần cứng với phần mềm. Nội dung chính gồm quản lý tiến trình, bộ nhớ, hệ thống tập tin, và bảo mật. Nó giúp hiểu cách hệ thống máy tính hoạt động và tối ưu hóa hiệu năng.', 'Lâm', '1'),
(4, 'Lập trình Java', 'images/sHcEYMbLfhd3oXRx2PuiapuJ7hpzhL5ZQybqFD7f.jpg', 'https://www.youtube.com/watch?v=3gtOAlcovoQ&list=PL33lvabfss1yGrOutFR03OZoqm91TSsvs&ab_channel=Kteam', '<p><h3></h3></p><p>Lập trình Java là môn học tập trung vào việc sử dụng ngôn ngữ lập trình Java để xây dựng các ứng dụng phần mềm. Nội dung môn học bao gồm các khái niệm cơ bản như biến, vòng lặp, mảng, và các tính năng nâng cao như lập trình hướng đối tượng, đa luồng, và xử lý ngoại lệ. Sinh viên sẽ học cách viết mã hiệu quả, tổ chức chương trình theo cấu trúc rõ ràng và áp dụng các nguyên tắc thiết kế phần mềm. Môn học này rất quan trọng trong việc phát triển các ứng dụng web, ứng dụng di động (như Android), và hệ thống doanh nghiệp. Java là một trong những ngôn ngữ phổ biến và được sử dụng rộng rãi, giúp sinh viên có lợi thế lớn trong ngành công nghệ thông tin.</p>', '2025-01-09 05:37:28', '2025-01-09 05:37:28', NULL, 'Lập trình Java dạy cách sử dụng ngôn ngữ Java để xây dựng phần mềm và ứng dụng theo hướng đối tượng.', 'Lâm', '1'),
(5, 'Kiến trúc máy tính', 'images/zZypYoH3tGE0VO5kXbWNt9V6Xw4uapQcrcD9lc3r.jpg', 'https://www.youtube.com/watch?v=iUwUgCdpBIc&list=PL54DF7EQeBp6a3T4DBIIZrqCzmMoRgvbK&ab_channel=TT', '<p><h3></h3></p><p>Kiến trúc máy tính là môn học nghiên cứu cách thiết kế và tổ chức các thành phần bên trong của một máy tính, như CPU, bộ nhớ, và các thiết bị ngoại vi. Sinh viên sẽ tìm hiểu nguyên lý hoạt động của các bộ xử lý, cách lưu trữ dữ liệu, và cách các thành phần giao tiếp với nhau. Nội dung môn học còn bao gồm các khái niệm như tập lệnh, đường dẫn dữ liệu, và quản lý bộ nhớ cache. Môn học giúp người học hiểu rõ hơn về cách tối ưu hóa hiệu suất hệ thống và thiết kế các hệ thống máy tính hiệu quả. Đây là nền tảng quan trọng cho những ai muốn nghiên cứu sâu hơn về phần cứng hoặc phát triển phần mềm hệ thống.</p>', '2025-01-09 05:41:39', '2025-01-09 05:41:39', NULL, 'Kiến trúc máy tính nghiên cứu thiết kế và tổ chức các thành phần bên trong máy tính để tối ưu hóa hiệu suất.', 'Lâm', '1'),
(6, 'Nhập môn học máy và khai phá dữ liệu', 'images/52w4gAxE1jm7KFIKCfWN9y9TvnToxd8JIbwPtnfT.jpg', 'https://www.youtube.com/watch?v=jc1wo_8VA1w&list=PLgaUq0lEBS4asEXPmOFObr6tmBs__sR-j&ab_channel=Th%C3%A2nQuangKho%C3%A1t', '<p><h3></h3></p><p>Học máy (Machine Learning) là môn học nghiên cứu cách máy tính học từ dữ liệu và đưa ra dự đoán hoặc quyết định mà không cần lập trình cụ thể. Nội dung bao gồm các thuật toán như học có giám sát, học không giám sát, và học tăng cường. Sinh viên sẽ khám phá các mô hình như hồi quy, cây quyết định, mạng nơ-ron nhân tạo, và máy vector hỗ trợ. Môn học này có ứng dụng rộng rãi trong nhiều lĩnh vực như nhận diện hình ảnh, xử lý ngôn ngữ tự nhiên, và phân tích dữ liệu. Đây là nền tảng quan trọng trong trí tuệ nhân tạo và khoa học dữ liệu hiện đại.</p>', '2025-01-09 05:44:22', '2025-01-09 05:44:22', NULL, 'Học máy dạy cách máy tính học từ dữ liệu để dự đoán hoặc ra quyết định trong các ứng dụng thực tế.', 'Lâm', '1'),
(7, 'Mạng máy tính', 'images/Qh4YCJ6L5I2Ak5PstoUm2l6aBabHCcNvDzmnOdFP.jpg', 'https://www.youtube.com/watch?v=vA9wWoqruO8&list=PL54DF7EQeBp5SmpaoNB5-UTAfuH2U8Lfz&ab_channel=TT', '<p><h3></h3></p><p>Mạng máy tính là môn học nghiên cứu cách các máy tính và thiết bị kết nối với nhau để trao đổi dữ liệu. Nội dung bao gồm các khái niệm về kiến trúc mạng, giao thức truyền thông (như TCP/IP), và các tầng của mô hình OSI. Sinh viên sẽ tìm hiểu về các công nghệ mạng như LAN, WAN, và Internet, cùng với các vấn đề bảo mật mạng. Môn học giúp hiểu cách xây dựng, quản lý, và tối ưu hóa mạng để đảm bảo hiệu suất và tính bảo mật. Đây là lĩnh vực thiết yếu trong thời đại số hóa, ứng dụng trong mọi hệ thống công nghệ thông tin.</p>', '2025-01-09 05:45:27', '2025-01-09 05:45:27', NULL, 'Mạng máy tính nghiên cứu cách các thiết bị kết nối và truyền dữ liệu, tập trung vào giao thức, hiệu suất, và bảo mật.', 'Lâm', '1'),
(8, 'Lập trình hướng đối tượng', 'images/guG0Mkm32MJMc0wuwh0oIfKaLfWXzZGvyNrcYouf.png', 'https://www.youtube.com/watch?v=4-soR3NmaRM&list=PL54DF7EQeBp4cISw2w3r1pA0X2XStNx4o&ab_channel=TT', '<p><h3></h3></p><p>Lập trình hướng đối tượng (Object-Oriented Programming - OOP) là môn học tập trung vào phương pháp lập trình dựa trên các đối tượng và lớp. Nội dung bao gồm các khái niệm cốt lõi như kế thừa, đa hình, đóng gói, và trừu tượng. Sinh viên sẽ học cách thiết kế phần mềm bằng cách chia nhỏ hệ thống thành các đối tượng có trách nhiệm và hành vi cụ thể. Môn học này giúp xây dựng mã nguồn rõ ràng, dễ bảo trì và tái sử dụng trong các dự án lớn. Đây là phương pháp lập trình phổ biến được áp dụng rộng rãi trong nhiều ngôn ngữ như Java, C++, Python, và C#.</p>', '2025-01-09 05:46:58', '2025-01-09 05:46:58', NULL, 'Lập trình hướng đối tượng dạy cách tổ chức phần mềm bằng các đối tượng, nhấn mạnh tính tái sử dụng và bảo trì mã nguồn.', 'Lâm', '1'),
(9, 'Phân tích thiết kế hệ thống', 'images/Q0BgiO4h8wIKX4PZfhm2CyERzJGE8WPjPaz8Wm9h.png', 'https://www.youtube.com/watch?v=Opqfwr1td8M&list=PL54DF7EQeBp6zna8b1dHa_7rlpbYL3VCR&ab_channel=TT', '<p><h3></h3></p><p>Phân tích thiết kế hệ thống thông tin là môn học nghiên cứu cách xây dựng và cải tiến các hệ thống thông tin để đáp ứng nhu cầu kinh doanh và quản lý. Nội dung bao gồm các giai đoạn phân tích yêu cầu, thiết kế kiến trúc, mô hình hóa dữ liệu, và thiết kế giao diện người dùng. Sinh viên sẽ học cách sử dụng các công cụ và phương pháp như UML, sơ đồ ERD, và thiết kế hướng đối tượng. Môn học giúp hiểu rõ quy trình phát triển hệ thống từ ý tưởng đến triển khai, đảm bảo tính hiệu quả và linh hoạt. Đây là kỹ năng quan trọng trong việc phát triển phần mềm và quản trị công nghệ thông tin.</p>', '2025-01-09 05:49:00', '2025-01-09 05:49:00', NULL, 'Phân tích thiết kế hệ thống thông tin tập trung vào xây dựng và tối ưu hóa hệ thống đáp ứng nhu cầu quản lý và kinh doanh.', 'Lâm', '1'),
(10, 'Toán rời rạc', 'images/hw2VA6nFCu3lxShCGgTOVYndLz7ON00reRWloCoJ.jpg', 'https://www.youtube.com/watch?v=yy5R1trPP5s&list=PL54DF7EQeBp49cQvXD0L_J9_dSguLRCle&ab_channel=TT', '<p><h3></h3></p><p>Toán rời rạc là môn học nghiên cứu các cấu trúc toán học rời rạc, không liên tục, được sử dụng trong khoa học máy tính và kỹ thuật. Nội dung bao gồm các chủ đề như lý thuyết tập hợp, đồ thị, tổ hợp, logic, và xác suất. Sinh viên sẽ học cách áp dụng các khái niệm này để giải quyết các bài toán liên quan đến thuật toán, mạng máy tính, và cơ sở dữ liệu. Môn học giúp phát triển tư duy logic, khả năng phân tích, và kỹ năng giải quyết vấn đề một cách hiệu quả. Đây là nền tảng quan trọng cho nhiều lĩnh vực trong công nghệ thông tin và khoa học máy tính.</p>', '2025-01-09 05:50:57', '2025-01-09 05:50:57', NULL, 'Toán rời rạc nghiên cứu các cấu trúc toán học rời rạc, ứng dụng trong thuật toán, logic, và mạng máy tính.', 'Lâm', '1'),
(11, 'Lập trình C++', 'images/iHvH7BiX5MSSMzKOZ4Abcgl2xkH6AnoI3zB5S90C.png', 'https://www.youtube.com/watch?v=hu20Ld4Yf-A&list=PLux-_phi0Rz0Hq9fDP4TlOulBl8APKp79&ab_channel=28tech', '<p><h3></h3></p><p>Lập trình C++ là môn học giới thiệu về ngôn ngữ lập trình C++, một ngôn ngữ mạnh mẽ được sử dụng rộng rãi trong phát triển phần mềm. Nội dung bao gồm các khái niệm cơ bản như biến, vòng lặp, mảng, hàm, và các tính năng nâng cao như lập trình hướng đối tượng, con trỏ, và quản lý bộ nhớ. Sinh viên sẽ học cách viết chương trình hiệu quả và tối ưu hóa mã nguồn cho các ứng dụng yêu cầu hiệu suất cao. Môn học này giúp xây dựng các kỹ năng thiết yếu để phát triển phần mềm hệ thống, trò chơi, và ứng dụng nhúng. C++ là ngôn ngữ quan trọng trong khoa học máy tính, được nhiều tổ chức công nghệ lớn sử dụng.</p>', '2025-01-09 07:02:35', '2025-01-09 07:02:35', NULL, 'Lập trình C++ dạy cách sử dụng ngôn ngữ C++ để phát triển phần mềm hiệu quả và tối ưu hóa hiệu suất.', 'Lâm', '1'),
(12, 'Cơ sở dữ liệu', 'images/1lqqmG49QAQ9ZWqWs8Xja21ICxxx6w5c4Z52v5vK.png', 'https://www.youtube.com/watch?v=uOctK3kVgv0&list=PL54DF7EQeBp4CLS8efeXphJ0XTjdYa6cc&ab_channel=TT', '<p><h3></h3></p><p>Cơ sở dữ liệu là môn học nghiên cứu cách lưu trữ, quản lý, và truy vấn dữ liệu một cách hiệu quả và an toàn. Nội dung bao gồm các khái niệm cơ bản như mô hình dữ liệu, thiết kế cơ sở dữ liệu quan hệ, và ngôn ngữ truy vấn SQL. Sinh viên sẽ học cách phân tích yêu cầu, thiết kế sơ đồ ERD, và triển khai cơ sở dữ liệu phục vụ các ứng dụng thực tế. Môn học cũng đề cập đến các chủ đề nâng cao như tối ưu hóa truy vấn, quản lý giao dịch, và bảo mật dữ liệu. Đây là nền tảng quan trọng trong lĩnh vực công nghệ thông tin, hỗ trợ phát triển hệ thống quản lý và phân tích dữ liệu.</p>', '2025-01-09 07:05:07', '2025-01-09 07:05:07', NULL, 'Cơ sở dữ liệu nghiên cứu cách lưu trữ và quản lý dữ liệu hiệu quả, tập trung vào thiết kế, truy vấn SQL, và bảo mật.', 'Lâm', '1'),
(13, 'Lập trình mạng', 'images/H1MPui71F5lJxvQipWPZgYrXEzdfHRQqDSz5f9Zm.jpg', 'https://www.youtube.com/watch?v=VKoV4lykMFY&list=PL54DF7EQeBp6smoPZt1yufjgHWcUJMT_v&ab_channel=TT', '<p><h3></h3></p><p>Lập trình mạng là môn học nghiên cứu cách xây dựng các ứng dụng giao tiếp qua mạng máy tính bằng cách sử dụng các giao thức và API mạng. Nội dung bao gồm các khái niệm cơ bản về lập trình socket, giao thức TCP/UDP, và các mô hình truyền thông client-server. Sinh viên sẽ học cách thiết kế và triển khai các ứng dụng như chat, truyền tệp, và dịch vụ web. Môn học cũng đề cập đến các vấn đề về bảo mật mạng, tối ưu hóa hiệu năng và xử lý đồng thời. Đây là kỹ năng quan trọng để phát triển các ứng dụng kết nối mạng trong thời đại công nghệ số.</p>', '2025-01-09 07:06:27', '2025-01-09 07:06:27', NULL, 'Lập trình mạng dạy cách xây dựng ứng dụng giao tiếp qua mạng bằng lập trình socket và giao thức TCP/UDP.', 'Lâm', '1'),
(14, 'Lập trình nhúng', 'images/OyeTiAqOXmXJ3mGAC10q9EhKMOxpYVrdlnN31sSx.jpg', 'https://www.youtube.com/watch?v=QJ0AjL3K7Wo&list=PLpq_FLpqGnQKguxVADDSWduxl-AwbNtlk&ab_channel=ph%C6%B0%C6%A1ngnamnguy%E1%BB%85n', '<p><h3></h3></p><p>Lập trình nhúng là môn học nghiên cứu cách phát triển phần mềm điều khiển các thiết bị phần cứng, thường là các hệ thống có tài nguyên hạn chế. Nội dung bao gồm các khái niệm về lập trình trên vi điều khiển, giao tiếp với thiết bị ngoại vi, và tối ưu hóa hiệu suất hệ thống. Sinh viên sẽ học cách sử dụng ngôn ngữ lập trình như C/C++ và các công cụ phát triển đặc thù để xây dựng các ứng dụng nhúng. Môn học cũng đề cập đến các vấn đề như quản lý bộ nhớ, thời gian thực, và giao thức truyền thông. Đây là kỹ năng quan trọng để phát triển các sản phẩm trong lĩnh vực IoT, thiết bị điện tử, và tự động hóa.</p>', '2025-01-09 07:08:29', '2025-01-09 07:08:29', NULL, 'Lập trình nhúng tập trung vào phát triển phần mềm cho thiết bị phần cứng, ứng dụng trong IoT và tự động hóa.', 'Lâm', '1'),
(15, 'Quản trị dự án CNTT', 'images/Y1lZz3NEA7ad4XEF85ZWaLDIEIwu8bRdkM5AFVx3.png', 'https://www.youtube.com/watch?v=tKViJrqa-rM&list=PLUnF_QTCIbHtgqmqEO4fHuRfyUgAiNYJx&ab_channel=Trungt%C3%A2mPh%C3%A1ttri%E1%BB%83nC%C3%B4ngngh%E1%BB%87Th%C3%B4ngtin-CITD', '<p>Quản trị dự án CNTT là môn học nghiên cứu cách lập kế hoạch, tổ chức, triển khai, và giám sát các dự án trong lĩnh vực công nghệ thông tin. Nội dung bao gồm các khái niệm về quản lý phạm vi, thời gian, chi phí, và rủi ro của dự án. Sinh viên sẽ học cách sử dụng các công cụ như Gantt Chart, PERT, và phần mềm quản lý dự án để theo dõi tiến độ và đảm bảo chất lượng. Môn học cũng đề cập đến các phương pháp quản lý như Agile, Scrum, và Waterfall để phù hợp với từng loại dự án. Đây là kỹ năng cần thiết cho các nhà quản lý và lãnh đạo trong lĩnh vực CNTT.</p>', '2025-01-09 07:10:22', '2025-01-09 07:10:22', NULL, 'Quản trị dự án CNTT dạy cách lập kế hoạch và giám sát dự án CNTT, tập trung vào phạm vi, thời gian, chi phí, và chất lượng.', 'Lâm', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_01_093050_create_khoa_hoc_table', 1),
(6, '2025_01_07_101633_add_role_to_users_table', 2),
(7, '2025_01_08_024406_create_user_khoa_hoc_table', 3),
(8, '2025_01_08_030126_drop_khoa_hoc_id_from_user_khoa_hoc', 4),
(9, '2025_01_08_030348_add_khoa_hoc_id_to_user_khoa_hoc', 5),
(10, '2025_01_09_063829_add_fields_to_users_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `GPA` decimal(3,2) DEFAULT NULL,
  `academic_year` varchar(255) DEFAULT NULL,
  `coding_ability` int(11) DEFAULT 1,
  `foreign_language` int(11) DEFAULT 1,
  `communication` int(11) DEFAULT 1,
  `desired_job` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `GPA`, `academic_year`, `coding_ability`, `foreign_language`, `communication`, `desired_job`, `last_updated`) VALUES
(1, 'Trần Tuyền', '0972612200tuyen@gmail.com', NULL, '$2y$10$QFrrXVulTiPh1CRQtAQjPOA9c8AfcU.0.voqaJRuUpfxMdAg8/bt6', NULL, '2025-01-07 03:15:50', '2025-01-09 00:09:23', 2, 2.30, NULL, 1, 1, 1, 'Web developer', '2025-01-10 17:44:46'),
(2, 'ADMIN', 'admin@gmail.com', NULL, '$2a$12$5lTkm/z53MiPxi6g4NKWe.IOIST2eC4o6INZipWsiMEYGL/4NCQmy', NULL, '2025-01-08 02:05:52', '2025-01-08 02:05:52', 1, NULL, NULL, 1, 1, 1, 'Server Administrator', '2025-01-10 17:44:46'),
(4, 'lâm', 'deodihocdau@gmail.com', NULL, '$2y$10$HX4hlUNWXRngkvwtPALPm.lMQc6ZB5KMb2DcFbjitT1SMqFdyn6sq', NULL, '2025-01-09 01:36:53', '2025-01-10 15:04:30', 2, 3.00, NULL, 5, 5, 3, 'Business Analyst', '2025-01-10 22:04:30'),
(5, 'hiếu', 'hieu@gmail.com', NULL, '$2y$10$Y4djFSpYPfgXeW6YwutqbeidPsmVWdmhIB3k2PtkzEP9Qu.JtB.0m', NULL, '2025-01-09 09:36:52', '2025-01-09 09:37:37', 2, 3.80, NULL, 3, 2, 5, 'Data Scientist', '2025-01-10 17:44:46');

--
-- Bẫy `users`
--
DELIMITER $$
CREATE TRIGGER `after_user_update` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
    DECLARE changed_user_id INT;
    IF NEW.desired_job != OLD.desired_job THEN
        SET changed_user_id = NEW.id;

        -- Lưu thông tin user_id vào bảng tạm (hoặc bảng queue)
        INSERT INTO user_update_queue (user_id, created_at)
        VALUES (changed_user_id, NOW());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_khoa_hoc`
--

CREATE TABLE `user_khoa_hoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `khoa_hoc_id` bigint(20) UNSIGNED NOT NULL,
  `goi_y` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_update_queue`
--

CREATE TABLE `user_update_queue` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_update_queue`
--

INSERT INTO `user_update_queue` (`id`, `user_id`, `created_at`) VALUES
(1, 9, '2025-01-10 23:10:51'),
(2, 11, '2025-01-10 23:41:55'),
(3, 4, '2025-01-10 23:43:29'),
(4, 4, '2025-01-11 00:16:11'),
(5, 4, '2025-01-11 00:17:30'),
(6, 4, '2025-01-11 00:58:34'),
(7, 4, '2025-01-11 02:28:36'),
(8, 4, '2025-01-11 02:44:37'),
(9, 4, '2025-01-11 02:49:43'),
(10, 4, '2025-01-11 02:58:25'),
(11, 4, '2025-01-11 05:03:00'),
(12, 4, '2025-01-11 05:03:39'),
(13, 4, '2025-01-11 05:04:00'),
(14, 4, '2025-01-11 05:04:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_khoa_hoc`
--
ALTER TABLE `user_khoa_hoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_khoa_hoc_user_id_foreign` (`user_id`),
  ADD KEY `user_khoa_hoc_khoa_hoc_id_foreign` (`khoa_hoc_id`);

--
-- Chỉ mục cho bảng `user_update_queue`
--
ALTER TABLE `user_update_queue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user_khoa_hoc`
--
ALTER TABLE `user_khoa_hoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT cho bảng `user_update_queue`
--
ALTER TABLE `user_update_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user_khoa_hoc`
--
ALTER TABLE `user_khoa_hoc`
  ADD CONSTRAINT `user_khoa_hoc_khoa_hoc_id_foreign` FOREIGN KEY (`khoa_hoc_id`) REFERENCES `khoa_hoc` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_khoa_hoc_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
