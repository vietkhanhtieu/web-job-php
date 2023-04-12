-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 01:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jh`
--
CREATE DATABASE `jh`;
USE `jh`;
-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ACC_ID` int(11) NOT NULL,
  `ACC_NAME` varchar(100) NOT NULL,
  `ACC_PASS` varchar(100) NOT NULL,
  `ACC_ROLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ACC_ID`, `ACC_NAME`, `ACC_PASS`, `ACC_ROLE`) VALUES
(4, 'com@com.com', '123456', 1),
(6, 'client@client.com', '123456', 0),
(7, 'nguyen@com.com', 'nnnnnn', 1),
(8, 'nguyen@client.com', 'nnnnnn', 0),
(9, 'nguyen2@client.com', 'nnnnnn', 0),
(10, 'phuocnguyen@client.com', 'nnnnnn', 0),
(11, 'n@client.com', 'nnnnnn', 0),
(12, 'npn@client.com', 'nnnnnn', 0),
(13, 'thientamgk123@gmail.com', 'thientamgk123', 1),
(14, 'rhino@client.com', '123456', 0),
(15, 'ipc@company.com', '123456', 1),
(16, 'dmch@company.com', '123456', 1),
(17, 'yum@company.com', '123456', 1),
(18, 'hado@company.com', '123456', 1),
(19, 'datxanh@company.com', '123456', 1),
(20, 'tdthang@company.com', '123456', 1),
(21, 'dreamteach@company.com', '123456', 1),
(22, 'edge@company.com', '123456', 1),
(23, 'ngocdung@company.com', '123456', 1),
(24, 'prudential@company.com', '123456', 1),
(25, 'oppo@company.com', '123456', 1),
(26, 'pnj@company.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `APP_ID` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `JOB_ID` int(11) NOT NULL,
  `APP_KQ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`APP_ID`, `ACC_ID`, `JOB_ID`, `APP_KQ`) VALUES
(2, 6, 15, 'no'),
(3, 6, 4, 'yes'),
(4, 6, 16, 'yes'),
(5, 8, 20, 'waiting'),
(6, 12, 4, 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(100) DEFAULT NULL,
  `USER_AGE` int(11) DEFAULT NULL,
  `USER_GENDER` varchar(10) DEFAULT NULL,
  `USER_EMAIL` varchar(100) NOT NULL,
  `USER_PHONE` varchar(10) DEFAULT NULL,
  `USER_CER` varchar(300) DEFAULT NULL,
  `USER_EDU` varchar(300) DEFAULT NULL,
  `USER_ACH` varchar(300) DEFAULT NULL,
  `ACC_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`USER_ID`, `USER_NAME`, `USER_AGE`, `USER_GENDER`, `USER_EMAIL`, `USER_PHONE`, `USER_CER`, `USER_EDU`, `USER_ACH`, `ACC_ID`) VALUES
(1, 'Lee PG', 24, 'Nam', 'client@client.com', '0123456789', 'Công nghệ Thông Tin', 'Đại học Tôn Đức Thắng', 'Tốt nghiệp loại Giỏi', 6),
(2, 'Nguyễn Phước Nguyên', 20, 'Nam', 'nguyen@client.com', '123456', 'Kỹ thuật phần mềm', 'Ton Duc Thang University', 'Sinh viên 5 tốt', 8),
(3, 'Nguyễn Thị Ánh Đào', 22, 'Nữ', 'nguyen2@client.com', '8923548723', 'Data Science', 'ĐH Khoa Học Tự Nhiên', 'Tốt nghiệp loại Giỏi', 9),
(4, 'Phước Nguyên', 20, 'Nam', 'phuocnguyen@client.com', '123456', 'Công nghệ thông tin', 'Tôn Đức Thắng', 'Tốt nghiệp loại Giỏi', 10),
(5, 'Lê Võ Quyết Thắng', 20, 'Nam', 'n@client.com', '1254780934', 'Kỹ thuật phần mềm', 'Đại học Tôn Đức Thắng', 'Nghiên cứu khoa học Sinh Viên', 11),
(6, 'Võ Hưu Tri', 22, 'Nam', 'npn@client.com', '7927980441', 'Kỹ thuật phần mềm', 'Đại học Tôn Đức Thắng', 'Tốt nghiệp loại Giỏi', 12),
(7, 'Mai Đắc Thiên Tâm', 20, 'Nam', 'rhino@client.com', '7927980441', 'Software Engineering', 'Ton Duc Thang University', 'Good Graduate', 14);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `COM_ID` int(11) NOT NULL,
  `COM_NAME` varchar(100) DEFAULT NULL,
  `COM_DES` varchar(1000) DEFAULT NULL,
  `COM_EMAIL` varchar(100) NOT NULL,
  `ACC_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COM_ID`, `COM_NAME`, `COM_DES`, `COM_EMAIL`, `ACC_ID`) VALUES
(1, 'CÔNG TY TOUTEC VIỆT NAM', 'Có trụ sở chính tại Tokyo Nhật Bản, được thành lập từ năm 1948, hơn 70 năm kinh nghiệm trong lĩnh vực thiết kế và thi công các công trình điện công nghiệp và dân dụng.', 'com@com.com', 4),
(3, 'FPT Trading Group', 'FTG là Công ty phân phối hàng đầu Việt Nam trong lĩnh vực phân phối các sản phẩm công nghệ thông tin và viễn thông, cung cấp các dịch vụ bảo hành và là đơn vị đem lại doanh thu hàng năm cao nhất cho Tập đoàn FPT', 'nguyen@com.com', 7),
(4, 'Coca-Cola Viet Nam', 'Coca Cola Beverages Vietnam Ltd. started its operation in 1994. It has plants in Ha Noi, Da Nang and Ho Chi Minh City. Ho Chi Minh City is the company\'s head office. Coca Cola Beverages Vietnam Ltd. is a 100% foreign-invested company', 'thientamgk123@gmail.com', 13),
(5, 'IPC GROUP\r\n', 'Tập đoàn IPC (IPC Group) được thành lập từ năm 2000. Trải qua 20 năm phát triển và trưởng thành, với triết lý “Tạo dựng niềm tin, phát triển bền vững”, IPC Group đã trở thành một tập đoàn kinh tế đa ngành, hoạt động trong nhiều lĩnh vực, tiêu biểu là logistic, xây dựng, kết cấu thép, năng lượng tái ', 'ipc@company.com', 15),
(6, 'Công ty TNHH TMDV Kỹ Thuật Cao Hùng\r\n', 'Cao Hùng được thành lập từ năm 2004 với tâm huyết và lòng đam mê kinh doanh của đội ngũ Nhân viên trẻ năng động, nhiệt huyết phát triển nghề nghiệp và cống hiến nhằm khẳng định bản thân, phục vụ xã hội. Cao Hùng được biết đến là một trong những Công ty hàng đầu trong lĩnh vực phân phối chủ lực các m', 'dmch@company.com', 16),
(7, 'Công Ty TNHH Pizza Việt Nam\r\n', 'Pizza Hut là chuỗi nhà hàng pizza được yêu thích và lớn nhất thế giới, trực thuộc tập đoàn Yum! (www.yum.com). Pizza Hut tự hào hiện diện tại 100 quốc gia trên khắp thế giới từ tháng 4 năm 2016.\r\nSự kiện này đánh dấu một cột mốc ý nghĩa để minh chứng cho sự cam kết của nhãn hàng về chất lượng pizza hảo hạng và phong cách phục vụ chuyên nghiệp.', 'yum@company.com', 17),
(8, 'Công Ty CP Tập Đoàn Hà Đô', 'Tập đoàn Hà Đô Là Doanh nghiệp nhà nước thuộc Bộ Quốc phòng được Cổ phần hóa năm 2005. Tập đoàn là nhà đầu tư chuyên nghiệp về Bất động sản, khách sạn, văn phòng các khu Resort, khu nghỉ dưỡng; Đầu tư Năng lượng Tái tạo: Thủy điện, Điện Mặt trời, Điện gió; Đầu tư Tài chính; Quản lý vận hành BĐS sau đầu tư…thi công các công trình công nghiệp dân dụng, giao thông thủy lợi…Khẩu hiệu của Tập đoàn là: “Sáng tạo, đổi mới, phát triển” Tập đoàn Luôn chào đón các ứng viên có năng lực, nhiệt huyết và muốn phát triển bản thân', 'hado@company.com', 18),
(9, 'Công Ty Cổ Phần Dịch Vụ Bất Động Sản Đất Xanh\r\n', 'Với tiềm lực mạnh về tài chính, đội ngũ cán bộ nhân viên được đào tạo bài bản, lực lượng kinh doanh hùng hậu, thiện chiến, cộng với kinh nghiệm và năng lực triển khai, chiến lược bán hàng hợp lý, ứng dụng công nghệ bán hàng BĐS, Dat Xanh Services đã và đang khẳng định vị thế “Nhà cung cấp dịch vụ Bất động sản số 1 Việt Nam” với việc tổng thầu phân phối và môi giới hàng loạt dự án lớn của các chủ đầu tư trên toàn quốc.', 'datxanh@company.com', 19),
(10, 'Công Ty TNHH Thêu Dương Thăng\r\n', 'Công ty TNHH Thêu Dương Thăng với tên giao dịch Arise Embroidery, tên quốc tế Arise Embroidery Co.,Ltd, có lĩnh vực hoạt động trong ngành Sản xuất trang phục.\r\n\r\n', 'tdthang@company.com', 20),
(11, 'Công ty TNHH Dreamtech Việt Nam\r\n', 'Dreamtech Việt Nam - Số 100, đường Hữu Nghị, KCN VSIP, TP Từ Sơn, tỉnh Bắc Ninh - là công ty sản xuất đồ điện tử và linh kiện điện thoại với 100% vốn Hàn Quốc. Với quy mô của nhà máy lên tới 8,000 công nhân viên tại 2 nhà máy - Dreamtech 1 và Dreamtech 2, chúng tôi tự hào là một trong những công ty có quy mô lớn nhất tại KCN VSIP hiện nay.', 'dreamteach@company.com', 21),
(12, 'Công Ty Cổ Phần Phát Triển Và Tăng Trưởng Xanh - EDGE\r\n', 'Ngành nghề hoạt động:\r\n\r\n- Phát triển các dự án bất động sản, từ các tòa nhà căn hộ đơn lẻ đến các khu đô thị, khu công nghiệp, cảng biển xanh.\r\n\r\n- Quy hoạch, thiết kế, xây dựng các công trình dân dụng và công nghiệp đảm bảo tiêu chuẩn xanh.\r\n\r\n- Kinh doanh, quản lý bất động sản dân dụng\r\n\r\n- Kinh doanh, quản lý bất động sản công nghiệp\r\n\r\n- Kinh doanh các dịch vụ lữ hành, quản lý nghỉ dưỡng', 'edge@company.com', 22),
(13, 'CÔNG TY TNHH THẨM MỸ NGỌC DUNG\r\n', 'Suốt hơn 2 thập kỷ đồng hành cùng triệu phụ nữ Việt, TMV Ngọc Dung đã vươn mình trở thành hệ thống thẩm mỹ viện dẫn đầu về chất lượng, đáp ứng mọi nhu cầu thẩm mỹ của phái đẹp.', 'ngocdung@company.com', 23),
(14, 'Công Ty TNHH BHNT Prudential Việt Nam - Bộ Phận Hợp Tác Kinh Doanh\r\n', 'Prudential Việt Nam tự hào là thành viên của Tập đoàn Prudential, tập đoàn tài chính hàng đầu thế giới được thành lập từ năm 1848, có trụ sở chính tại Vương quốc Anh với bề dày lịch sử kinh doanh, phát triển bền vững, cam kết đầu tư lâu dài, an toàn và hiệu quả.', 'prudential@company.com', 24),
(15, 'CÔNG TY OPPO VIỆT NAM\r\n', '- OPPO là thương hiệu toàn cầu cung cấp các thiết bị và dịch vụ công nghệ đột phá để đem lại cho người dùng một hệ sinh thái kết nối thông minh trong tương lai. OPPO đã ra mắt điện thoại di động Smile Phone đầu tiên vào năm 2008, đánh dấu sự khởi đầu của một hành trình khám phá và tiên phong khác biệt trong công nghệ.', 'oppo@company.com', 25),
(16, 'Công Ty Cổ Phần Vàng Bạc Đá quý Phú Nhuận - PNJ\r\n', 'PNJ là Tập đoàn hàng đầu tại Việt Nam trong lĩnh vực chế tác và bán lẻ trang sức bằng vàng, bạc, đá quý. Sản phẩm PNJ ngày càng được các nước tại thị trường Châu Á và Châu Âu ưu chuộng.\r\n\r\nHiện tại, Công ty có hơn 6.600 nhân viên với hệ thống bán sỉ, và hơn 360 cửa hàng bán lẻ trải rộng trên toàn quốc; Công ty PNJP có công suất sản xuất đạt trên 4 triệu sản phẩm/năm, được đánh giá là một trong những xí nghiệp chế tác nữ trang lớn nhất khu vực Châu Á.', 'pnj@company.com', 26);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `CT_ID` int(11) NOT NULL,
  `CT_NAME` varchar(100) NOT NULL,
  `CT_EMAIL` varchar(100) NOT NULL,
  `CT_MSG` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CT_ID`, `CT_NAME`, `CT_EMAIL`, `CT_MSG`) VALUES
(1, 'dasdfsdfadfadd', 'adfd@sdfadaf.com', 'asdfadf'),
(2, 'efaefeef', 'werq33rdf3@sddf.ccd', 'afifjadnuqendadikfl'),
(3, 'asfdafsd', 'sdww@sdgewf.com', 'sdqwniwheirekd'),
(4, 'Nguyễn Phước Nguyên', 'nguyen@gmail.com', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `CV_ID` int(11) NOT NULL,
  `CV_DES` varchar(300) NOT NULL,
  `ACC_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`CV_ID`, `CV_DES`, `ACC_ID`) VALUES
(1, 'lam khong nghi trong 48 tieng', 6);

-- --------------------------------------------------------

--
-- Table structure for table `favo`
--

CREATE TABLE `favo` (
  `FAV_ID` int(11) NOT NULL,
  `ACC_ID` int(11) NOT NULL,
  `JOB_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favo`
--

INSERT INTO `favo` (`FAV_ID`, `ACC_ID`, `JOB_ID`) VALUES
(2, 6, 16),
(3, 6, 17),
(4, 6, 17),
(5, 8, 15),
(6, 8, 20),
(7, 8, 17),
(8, 8, 16);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JOB_ID` int(11) NOT NULL,
  `JOB_NAME` varchar(100) NOT NULL,
  `JOB_DES` varchar(1200) NOT NULL,
  `JOB_IMG` varchar(100) NOT NULL,
  `JOB_TYPE` varchar(50) NOT NULL,
  `JOB_LOC` varchar(200) NOT NULL,
  `COM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JOB_ID`, `JOB_NAME`, `JOB_DES`, `JOB_IMG`, `JOB_TYPE`, `JOB_LOC`, `COM_ID`) VALUES
(4, 'NHÂN VIÊN THIẾT KẾ BẢN VẼ ĐIỆN', '- Thiết kế bản vẽ điện liên quan tới siêu thị cửa hàng tiện lợi ở Nhật.\r\n- Nhận chỉ thị trao đổi công việc trực tiếp với sếp người Nhật.\r\n- Công việc cụ thể sẽ được trao đổi khi phỏng vấn.', 'images/1.jpg', 'front-end', 'MN', 1),
(15, 'Nhân Viên Bán Hàng Kênh Đại Lý', '- Triển khai bán hàng, lấy đơn hàng từ khách hàng và báo về công ty.\r\n\r\n- Thực hiện những trương trình khuyến mãi của công ty.\r\n\r\n- Phát triển mạng lưới khách hàng, duy trì mối quan hệ tốt với khách hàng để đạt chỉ tiêu doanh số Ngày / Tuần / Tháng.\r\n\r\n- Phục vụ khách hàng, giải đáp thắc mắc của khách hàng, theo dõi đơn hàng của khách hàng.\r\n\r\n- Vị trí này báo cáo cho các Giám sát Bán hàng khu vực', 'images/2.jpg', 'other', 'MN', 4),
(16, 'Cán Bộ Quan Hệ Đối Tác', '- Thực hiện báo cáo số liệu cho hãng và nhà cung cấp\r\n\r\n- Nắm bắt thông tin chương trình hãng, theo dõi và tính toán chương trình\r\n\r\n- Quản lý các chương trình và khoản hỗ trợ hãng trên hệ thống nội bộ\r\n\r\n- Theo dõi hãng/nhà cung cấp thanh toán các khoản hỗ trợ (fund hãng)\r\n\r\n- Thực hiện phân bổ và hạch toán các khoản hỗ trợ của hãng trên hệ thống nội bộ\r\n\r\n- Phối hợp và hỗ trợ Cán bộ Quản lý sản phẩm trong hoạt động báo cáo và quản lý fund hãng', 'images/1.jpg', 'fullstack', 'MN', 3),
(17, 'NHÂN VIÊN QC KẾT CẤU THÉP LÀM VIỆC TẠI HƯNG YÊN\r\n', '- Kiểm tra kích thước, chất lượng sản phẩm kết cấu thép\r\n\r\n- Đọc bản vẽ thiết kế, bản thông số kỹ thuật, tiêu chuẩn quy cách của sản phẩm kết cấu thép\r\n\r\n- Lập bảng đánh giá sản phẩm theo từng giai đoạn theo quy trình, tiến độ sản xuất.\r\n\r\n- Các công việc liên quan phát sinh hoặc theo yêu càu của trưởng bộ phận\r\n\r\n- Phê duyệt cho phép xuất sản phẩm xuất cho khách hàng\r\n\r\n- Đưa ra biện pháp khắc phục trong trường hợp kiểm tra bị lọt lỗi', 'images/1.jpg', 'fullstack', 'MB', 5),
(19, 'Web Developer Intern (React JS) - 6 Months', 'Responsibility for Design, Coding, Troubleshooting and work with project team for development or optimize IT digital system / projects.\r\n- Support project management on any Digital projects as assigned by the IT Management.\r\n- Development and optimize for current digital system as such: Ordering website, etc……\r\n- Develop new report templates to support for relevant users and Management team on tracking promotion activities.\r\n- Work with relevant departments, vendors and stores to fix the online transaction issues if any.', 'images/3.jpg', 'fullstack', 'NN', 7),
(20, 'Kiến Trúc Sư Quy Hoạch\r\n', ' Quản lý, theo dõi, kiểm tra quy hoạch, thiết kế ý tưởng, cơ sở bản vẽ thi công các dự án của Công ty làm chủ đầu tư.\r\n- Kiểm tra, có ý kiến chỉ đạo các đơn vị thiết kế; Giám sát toàn bộ quá trình thi công xây lắp của các nhà thầu\r\n- Nghiệm thu, tiếp nhận vật tư, thiết bị từ nhà cung cấp, lắp đặt theo quy định và nội dung hợp đồng ký kết\r\n- Giám sát các nhà cung cấp, lắp đặt trong suốt quá trình lắp đặt, vận hành, chạy thử, nghiệm thu, bàn giao đưa máy móc thiết bị vào khai thác sử dụng.', 'images/3.jpg', 'front-end', 'MB', 8),
(21, 'Giám Sát Kinh Doanh Khu Vực Bình Dương\r\n', '- Tìm kiếm khách hàng mới tại từng thị trường mà mình phụ trách\r\n- Hoàn thành doanh số, doanh thu tại khu vực phụ trách theo chỉ tiêu được giao\r\n- Là cầu nối của Khách hàng với Công ty tại thị trường được giao\r\n- Tuyển dụng, đào tạo, hướng dẫn NVBH của NPP tại thị trường\r\n- Thực hiện các báo cáo, bản khảo sát theo yêu cầu từ cấp trên và Công ty', 'images/3.jpg', 'other', 'MN', 6),
(22, 'Chuyên Viên Khai Thác', '- Tìm kiếm và khai thác dự án đầu tư theo định hướng của Ban Tổng giám đốc\r\n- Xây dựng và tiếp cận danh sách các CĐT, dự án đang và chuẩn bị triển khai.\r\n- Xây dựng hệ thống Ngân hàng dữ liệu thị trường bất động sản\r\n- Thực hiện các công việc khác theo yêu cầu của Trưởng phòng, Giám đốc khai thác.', 'images/3.jpg', 'back-end', 'MN', 9),
(23, 'Nhân Viên Nghiệp Vụ - Biết Tiếng Trung', '- Nhận đơn hàng, phát triển mẫu\r\n- Liên lạc khách hàng\r\n- Công việc cụ thể trao đổi khi phỏng vấn', 'images/3.jpg', 'other', 'MN', 10),
(24, 'NHÂN VIÊN AN NINH - CCTV\r\n', '- Update dữ liệu hệ thống an ninh\r\n- Làm thẻ cho công nhân viên mới\r\n- Kiểm tra dữ liệu, thiết bị an ninh\r\n- Điều tra xử lý vi phạm an ninh, làm báo cáo hàng ngày\r\n- Đào tạo nội dung liên quan đến an ninh cho công nhân viên mới', 'images/2.jpg', 'other', 'MB', 11),
(25, 'Nhân Viên Kế Toán Tổng Hợp\r\n', '- Theo dõi, thiết lập hệ thống kế toán, sổ sách, chứng từ, báo cáo nội bộ và thuế của Công ty đảm bảo các chứng từ, số liệu kế toán đúng theo quy định của Nhà nước, Pháp luật về Thuế;\r\n\r\n- Theo dõi sổ quỹ của cửa hàng, sân bóng rổ và làm báo cáo quyết toán tiền bán hàng định kỳ;\r\n\r\n- Chịu trách nhiệm về hạch toán kế toán theo đúng các quy định hiện hành. Làm việc với cơ quan Thuế và các cơ quan chức năng;', 'images/3.jpg', 'other', 'MB', 12),
(26, 'NHÂN VIÊN THIẾT KẾ 2D\r\n', '- Thiết kế các ấn phẩm quảng cáo như catalogue, tờ rơi, tờ gập, sticker…\r\n- Thiết kế các Key Visual, mẫu quảng cáo cho các chiến dịch.\r\n- Thiết kế các banner, poster,… để quảng cáo trên các kênh online\r\n- Thực hiện các công việc khác theo sự phân công của Trưởng bộ phận.', 'images/2.jpg', 'front-end', 'MN', 13),
(27, 'Tư Vấn Viên Bảo Hiểm - Bancassurance - Kênh Hợp Tác Ngân Hàng', '- Làm việc trực tiếp tại Chi nhánh Ngân hàng là đối tác của công ty khu vực quận Ba Đình, xây dựng mối quan hệ và hỗ trợ nhân viên Ngân hàng và Chi nhánh trong các hoạt động kinh doanh.\r\n- Tận dụng nguồn khách hàng có sẵn từ đối tác Ngân Hàng của Prudential, đại diện Prudential tư vấn và giới thiệu cho khách hàng về các giải pháp tài chính và chương trình Bảo hiểm phù hợp;\r\n- Hỗ trợ, hướng dẫn và chăm sóc khách hàng chu đáo;\r\n- Lên ý tưởng và tham gia xây dựng kế hoạch kinh doanh theo từng giai đoạn; định kỳ báo cáo và cập nhật kết quả kinh doanh đến Quản lý kinh doanh trực tiếp.', 'images/3.jpg', 'other', 'MB', 14),
(28, 'Kỹ Thuật Viên Sửa Chữa Điện Thoại', '- Thực hiện công tác sửa chữa bảo hành điện thoại di động;\r\n\r\n- Phối hợp với tiếp tân/ điều phối thẩm định chính xác tình trạng máy, thiết bị của khách hàng khi nhận bảo hành, sửa chữa (tình trạng, nguyên nhân lỗi,…);\r\n\r\n- Thực hiện việc sửa chữa điện thoại đảm bảo tiến độ, chất lượng;', 'images/2.jpg', 'other', 'MN', 15),
(29, 'GIAO DỊCH VIÊN - MẢNG MUA BÁN ĐỒ HIỆU & CẦM ĐỒ ', '- Triển khai các chương trình phát triển doanh số mảng Tài chính Cầm Đồ.\r\n- Hỗ trợ khách hàng trong dịch vụ Kiểm Định, Thu Mua, Bán kim cương, túi xách hàng hiệu đồng hồ cao cấp.\r\n- Các bước để hoàn tất 1 giao dịch cầm cố cho khách: Đón tiếp khách -> Nhận sản phẩm kiểm tra (có công cụ hỗ trợ) -> Định giá sản phẩm -> Tư vấn, thuyết phục -> Hỗ trợ làm hợp đồng -> Hỗ trợ khách đóng lãi, chuộc, chăm sóc khách hàng...\r\n- Thực hiện giao dịch với với khách hàng tại Phòng Giao dịch chính và các Điểm Giao dịch lân cận', 'images/3.jpg', 'other', 'MN', 16),
(30, 'NHÂN VIÊN IT KIÊM PHIÊN DỊCH TIẾNG HÀN', '- Xử lý các vấn đề liên quan tới PC, user .\r\n- Nâng cấp và đảm bảo hệ thống server, firewall…\r\n- Quản trị hệ thống mạng nội bộ, internet, hệ thống cammera công ty.\r\n- Xử lý cấn về đề liên quan tới deskphone, máy in, cửa tripod, turngate, máy chấm công…\r\n- Đảm bảo an toàn, nâng cao tính bảo mật , nắm được các kỹ thuật xâm nhập và các biện pháp phòng, chống tấn công mạng\r\n- Đề xuất và sắp xếp lịch sửa chữa , bảo trì mạng LAN/WAN cho công ty\r\n- Giám sát hiệu suất mạng ( băng thông, độ trễ…) và kiểm tra các điểm yếu\r\n- Cài đặt và vận hành hệ thống chuông hẹn giờ\r\n- Lắp đặt, bảo trì hệ thống Access control, IR Sensor, turngate…\r\n- Phiên dịch trong các cuộc họp, làm phê duyệt báo cáo của phòng IT', 'images/2.jpg', 'fullstack', 'MB', 11),
(31, 'PHÓ PHÒNG KẾ HOẠCH SẢN XUẤT\r\n', '- Nhận kế hoạch sản xuất từ khách hàng, cân đối với năng lực sản xuất đưa ra kế hoạch tối ưu\r\n\r\n- Làm các báo cáo kết quả sản xuất\r\n\r\n- Lập kế hoạch sản xuất cho công đoạn SMD\r\n\r\n- Làm các công việc khác theo yêu cầu của cấp trên', 'images/3.jpg', 'other', 'MB', 11),
(32, 'KỸ SƯ CÂY XANH - XANH VILLAS RESORT\r\n', '- Xây dựng kế hoạch và thực hiện việc thu mua, gom các loại cây phục vụ các giai đoạn của Dự án\r\n- Triển khai, giám sát các nhà thầu, công nhân kỹ thuật liên quan đến các hoạt động: đánh chuyển cây, vườn ươm cây giống, phát triển các kỹ thuật ươm, trồng, chăm sóc theo đúng quy trình kỹ thuật và đảm bảo cây xanh tăng trưởng, phát triển tốt.\r\n- Chủ trì triển khai hệ thống san gạt, tạo vườn ươm, tưới tiêu và che nắng Vườn ươm tại Dự án.\r\n- Tổ chức các hoạt động phòng, ngừa sâu bệnh, nấm trong các khu vực của Dự án và Vườn ươm\r\n- Tham gia tuyển dụng, góp ý đánh giá chất lượng công việc của công nhân, kỹ thuật viên được giao quản lý', 'images/1.jpg', 'other', 'MB', 12),
(33, 'FACEBOOK ADS\r\n', '- Xây dựng các kế hoạch chạy quảng cáo Google Ads chi tiết, phù hợp với chiến dịch Marketing của công ty.\r\n- Thực hiện các hoạt động quảng cáo Online theo kế hoạch đã được phê duyệt: Facebook ads; GG ads…\r\n- Quản lí nội dung truyền thông Fanpage, Website, youtube;\r\n- Quản lí Comment, Feedback, xử lí những Comment tiêu cực;\r\n- Quản lí hệ thống tài khoản quảng cáo, quản lí dòng tiền, đảm bảo tính liên tục của quảng cáo Facebook Ads;\r\n- Trực tiếp triển khai các chiến dịch quảng cáo trên Google theo ngân sách được duyệt;\r\n- Theo dõi, phân tích, thống kê các số liệu, hiệu chỉnh và tối ưu các chiến dịch quảng cáo;\r\n- Nghiên cứu và đưa ra các thông điệp quảng cáo phù hợp với đối tượng khách hàng;\r\n- Theo dõi, đánh giá để tối ưu thiết kế/nội dung/chi phí và tỷ lệ chuyển đổi của các chiến dịch quảng cáo Google Ads của Công ty;', 'images/1.jpg', 'back-end', 'MN', 13),
(34, 'CHUYÊN VIÊN BÁN HÀNG AEON MALL BÌNH DƯƠNG', '- Giới thiệu, quảng bá, tư vấn sản phẩm cho khách hàng\r\n- Chăm sóc và Giữ gìn hình ảnh thương hiệu\r\n- Ghi nhận thông tin bán hàng, cập nhật thông tin thị trường\r\n- Thiết lập quan hệ gần gũi và thân thiện với khách hàng\r\n- Hoàn thành chỉ tiêu bán hàng được giao cho từng khu vực Shop\r\n- Báo cáo công việc cho cấp quản lý trực tiếp hàng kì.', 'images/3.jpg', 'other', 'MN', 15),
(35, 'Marketing Intern', '- Assist in content production for Marketing channels to promote the brand\r\n- Handle the files, documents, contracts of Marketing\r\n- Other works relating to Marketing as assigned by Line Manager', 'images/2.jpg', 'other', 'MN', 7),
(36, 'Quality Controller (QC) - Nhân Viên Kiểm Soát Chất Lượng', '1. Thực hiện kiểm soát chất lượng trên dây chuyền theo kế hoạch chất lượng. Tham gia giải quyết các vấn đề liên quan đến chất lượng tại khu vực kiểm soát/dây chuyền sản xuất.\r\n\r\n2. Kiểm soát GMP trên dây chuyền, khu vưc làm việc và phòng Lab\r\n\r\n3. Là thành viên hoặc trưởng nhóm tham gia vào các thử nghiệm sản phẩm mới/nguyên vật liệu mới/các dự án cải tiến/thay đổi quy trình ..\r\n\r\n4. Tham gia vào giải quyết vấn đề và thực hiện những hành động cải tiến.', 'images/1.jpg', 'other', 'MN', 4),
(37, 'Nhân Viên IT Helpdesk', '- Hỗ trợ người dùng cuối:\r\n- Trong các ứng dụng/dịch vụ phục vụ cho người dùng trong môi trường doanh nghiệp.\r\n- Quản lý hệ thống và xử lý các yêu cầu, khắc phục sự cố phần mềm/ phần cứng trên các thiết bị người dùng.\r\n- Thực hiện kiểm tra và đề xuất bảo hành, bảo trì , nâng cấp hệ thống và các thiết bị CNTT\r\n- Cài đặt các chương trình ứng dụng và các thiết bị CNTT.\r\n- Các công việc cụ thể khác được trao đổi trong buổi phỏng vấn', 'images/2.jpg', 'back-end', 'MB', 3),
(38, 'CB Kinh Doanh Dự Án Cisco', '- Kinh doanh dự án các sản phẩm công nghệ (phần mềm tin học, hệ thống máy chủ, thiết bị mạng… của sản phẩm Cisco.\r\n- Duy trì chăm sóc, củng cố quan hệ, khai thác hệ thống đại lý hiện có, tìm kiếm và phát triển đại lý mới.\r\n- Thu thập thông tin về đại lý, tìm kiếm và phát triển đại lý mới.\r\n- Thực hiện các dịch vụ chăm sóc khách hàng phụ trách\r\n- Nghiên cứu thông tin thị trường, về đối thủ cạnh tranh,', 'images/2.jpg', 'other', 'MN', 3),
(39, 'Nhân Viên Vận Hành Máy Sản Xuất - Khâu Pha Chế Siro - HCM', '1/ Vận hành máy pha chế/thiết bị trong dây chuyền sản xuất\r\n\r\n- Nhận kế hoạch sản xuất, nhận đầu vào nguyên vật liệu để vận hành máy pha chế Sirô.\r\n\r\n- Vận hành máy/thiết bị tại khu vực mình quản lý trong dây chuyền sản xuất đảm bảo 100% an toàn, chất lượng, tuân thủ yêu cầu GMP.\r\n\r\n- Chịu trách nhiệm kiểm tra mẫu, theo dõi đầu vào-đầu ra và duy trì hoạt động của khâu pha chế một cách hiệu quả, đầy đủ.\r\n\r\n- Theo dõi máy để đảm bảo việc bảo dưỡng và bôi trơn thiết bị/máy tự động với thời gian ngắn nhất.', 'images/1.jpg', 'other', 'MN', 4),
(40, 'Chuyên Viên Tài Chính\r\n', '- Lập báo cáo phân tích hiệu quả sử dụng chi phí, hiệu quả hoạt động, tình hình thực hiện so với kế hoạch tại các phòng ban, công ty con/công ty liên kết.\r\n- Lập, phân tích và thẩm định báo cáo dòng tiền cho các hoạt động đầu tư của công ty mẹ và các công ty con/liên kết, đề xuất nâng cao công tác quản trị và đảm bảo tính thanh khoản cho tất cả các hoạt động đầu tư của công ty mẹ và các công ty con/liên kết\r\n- Phối hợp cùng cấp trên xây dựng kế hoạch kinh doanh, kế hoạch tài chính của Công ty.\r\n- Đánh giá hiệu quả tài chính và hiệu quả hoạt động của các phòng ban.', 'images/3.jpg', 'other', 'MN', 9),
(41, 'Giám Sát Ca Nhà Hàng Pizza Hut', '- Trợ giúp quản lý và trợ lý nhà hàng trong công việc\r\n\r\n- Tuân thủ tiêu chuẩn CHAMPS (Cleanliness, Hospitality, Accuracy, Maintenance, Product Quality, Speed of Service) và các tiêu chuẩn, quy định khác của nhà hàng\r\n\r\n- Là tấm gương hướng dẫn và đào tạo nhân viên trong công việc\r\n\r\n- Đảm bảo chuẩn bị thực phẩm theo quy cách và quy trình chuẩn Yum!\r\n\r\n- Sắp xếp công việc, duy trì chất lượng dịch vụ, dọn dẹp thường xuyên đảm bảo sự sạch sẽ và gọn gàng\r\n\r\n- Giám sát các thành viên của ca làm việc một cách hiệu quả và điều phối công việc của nhân viên\r\n\r\n- Hỗ trợ quản lý, trợ lý quản lý các hoạt động hằng ngày bằng cách lập kế hoạch và quản lý lao động, kiểm kê hàng tồn kho, xử lý khiếu nại và phát triển nhóm\r\n\r\n- Cụ thể sẽ trao đổi thêm khi phỏng vấn', 'images/1.jpg', 'other', 'MN', 7),
(42, 'Trưởng Phòng Pháp Chế\r\n', '- Đảm bảo công tác Pháp chế, pháp lý cho toàn bộ hoạt động SXKD của Công ty và Tập đoàn;\r\n- Chịu trách nhiệm giúp việc Ban Điều hành và tổ chức cung cấp, hướng dẫn áp dụng các văn bản pháp luật,:\r\n- Tham gia giải quyết các vụ việc pháp lý của doanh nghiệp, (xử lý kỷ luật, tranh chấp lao động, triển khai dự án, hợp đồng, thủ tục hành chính, sở hữu trí tuệ....).\r\n- Tham gia triển khai thực hiện các hoạt động phát hành cổ phiếu, niêm yết chứng khoán, quản lý cổ đông của Công ty:\r\n- Hỗ trợ pháp lý cho các bộ phận ở Văn phòng Tập đoàn và các Công ty Con;\r\n- Phối hợp thực hiện các công việc khác theo yêu cầu của Ban Điều hành.\r\n- Soạn thảo các Hợp đồng Kinh tế, Tư vấn cảnh báo các vấn đề pháp lý của công ty\r\n- Các công việc thực hiện khác theo sự phân công của Lãnh đạo', 'images/3.jpg', 'other', 'MB', 8),
(43, 'NHÂN VIÊN XUẤT HÀNG LÀM VIỆC TẠI HƯNG YÊN\r\n', '- Tiếp nhận thành phẩm từ công đoạn trước và phòng kế hoạch sản xuất\r\n- Thực hiện giám sát việc đóng kiện, giao hàng\r\n- Thống kê khối lượng, cấu kiện theo dự án được giao và báo cáo\r\n- Lập tiến độ đóng kiện + giao hàng cho dự án\r\n- Kiểm soát quá trình đóng kiện bảo đảm giao đúng yêu cầu giao hàng và báo cáo\r\n- Lập kế hoạch và liên hệ xe chuyển hàng theo tiến độ dự án\r\n- Làm biên bản bàn giao hàng cho khách hàng\r\n- Tiếp nhận phản hồi về việc giao hàng\r\n- Các việc khác theo chỉ đạo từ quản đốc, phó quản đốc nhà máy.', 'images/1.jpg', 'other', 'MB', 5),
(44, 'CÔNG NHÂN ĐỨNG MÁY THÊU VI TÍNH\r\n', '- Công nhân đứng máy thêu vi tính\r\n- Đi 2 ca, 2 tuần ngày, 2 tuần đêm\r\n- Lương tính cả thời gian và sản lượng', 'images/1.jpg', 'other', 'MN', 10),
(45, 'web', 'web developer', 'images/1.jpg', 'front-end', 'MB', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ACC_ID`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`APP_ID`),
  ADD KEY `FK_APP_ACC` (`ACC_ID`),
  ADD KEY `FK_APP_JOB` (`JOB_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `FK_CL_ACC` (`ACC_ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `FK_COM_ACC` (`ACC_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`CT_ID`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`CV_ID`),
  ADD KEY `FK_CV_ACC` (`ACC_ID`);

--
-- Indexes for table `favo`
--
ALTER TABLE `favo`
  ADD PRIMARY KEY (`FAV_ID`),
  ADD KEY `FK_FAV_ACC` (`ACC_ID`),
  ADD KEY `FK_FAV_JOB` (`JOB_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JOB_ID`),
  ADD KEY `FK_JOB_COM` (`COM_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ACC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `APP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `CV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favo`
--
ALTER TABLE `favo`
  MODIFY `FAV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `JOB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `FK_APP_ACC` FOREIGN KEY (`ACC_ID`) REFERENCES `account` (`ACC_ID`),
  ADD CONSTRAINT `FK_APP_JOB` FOREIGN KEY (`JOB_ID`) REFERENCES `job` (`JOB_ID`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_CL_ACC` FOREIGN KEY (`ACC_ID`) REFERENCES `account` (`ACC_ID`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `FK_COM_ACC` FOREIGN KEY (`ACC_ID`) REFERENCES `account` (`ACC_ID`);

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_CV_ACC` FOREIGN KEY (`ACC_ID`) REFERENCES `account` (`ACC_ID`);

--
-- Constraints for table `favo`
--
ALTER TABLE `favo`
  ADD CONSTRAINT `FK_FAV_ACC` FOREIGN KEY (`ACC_ID`) REFERENCES `account` (`ACC_ID`),
  ADD CONSTRAINT `FK_FAV_JOB` FOREIGN KEY (`JOB_ID`) REFERENCES `job` (`JOB_ID`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `FK_JOB_COM` FOREIGN KEY (`COM_ID`) REFERENCES `company` (`COM_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
