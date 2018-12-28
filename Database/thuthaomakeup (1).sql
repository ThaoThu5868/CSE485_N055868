-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2018 lúc 05:09 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuthaomakeup`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `MAAD` int(11) NOT NULL,
  `TENDNAD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAILAD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSAD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENAD` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIACHIAD` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGAYSINHAD` date NOT NULL,
  `SDTAD` char(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`MAAD`, `TENDNAD`, `EMAILAD`, `PASSAD`, `TENAD`, `DIACHIAD`, `NGAYSINHAD`, `SDTAD`) VALUES
(1, 'ThanhThu', 'thuntt62@wru.vn', '12345', 'Nguyen Thi Thanh Thu', '54 lang', '1998-01-01', '019384333'),
(2, 'PhuongThao', 'thaotp62@wru.vn', '12345', 'Truong Phuong Thao', '19 Truong Chinh', '1998-06-24', '01931111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihoc`
--

CREATE TABLE `baihoc` (
  `MABH` int(11) NOT NULL,
  `TENBAI` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `LINKVD` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `THOIGIAN` time NOT NULL,
  `MAKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihoc`
--

INSERT INTO `baihoc` (`MABH`, `TENBAI`, `LINKVD`, `THOIGIAN`, `MAKH`) VALUES
(1, 'Bài 1: Cách sử dụng và công dụng của bộ dụng cụ trang điểm', '', '00:00:00', 1),
(2, 'Bài 2: Cách chăm sóc da cho da đẹp và mịn màng', '', '00:00:00', 1),
(3, ' Bài 3: Cách đánh kem lót', '', '00:00:00', 1),
(4, ' Bài 4: Cách đánh kem nền láng mịn và đẹp hoàn hảo', '', '00:00:00', 1),
(5, 'Bài 5: Cách dặm phấn sao cho mịn màng và không bị bết phấn', '', '00:00:00', 1),
(6, 'Bài 6: Cách vẽ lông mày theo tỷ lệ chuẩn', '', '00:00:00', 1),
(7, ' Bài 7: Cách tán màu mắt', '', '00:00:00', 1),
(8, ' Bài 8: Cách kẹp mi, chuốt masscara dài và cong', '', '00:00:00', 1),
(9, ' Bài 9: Cách tạo khối và đánh má hồng', '', '00:00:00', 1),
(10, ' Bài 10: Cách tô son cho môi căng mọng và tự nhiên', '', '00:00:00', 1),
(11, ' Bài 1: Các bước làm sạch da và thoa kem dưỡng', '', '00:00:00', 2),
(12, 'Bài 2: Cách thoa kem lót và kem nền tự nhiên nhất', '', '00:00:00', 2),
(13, ' Bài 3: Cách đánh kem che khuyết điểm và tạo khối high - light', '', '00:00:00', 2),
(14, ' Bài 4: Cách phủ phấn', '', '00:00:00', 2),
(15, ' Bài 5: Cách vẽ lông mày và dán mi đẹp tự nhiên', '', '00:00:00', 2),
(16, 'Bài 6: Cách tán màu mắt đẹp tự nhiên', '', '00:00:00', 2),
(17, ' Bài 7: Cách kẹp lông mi, chốt masscara', '', '00:00:00', 2),
(18, ' Bài 8: Cách tạo mũi cao và đánh phấn má', '', '00:00:00', 2),
(19, ' Bài 9: Cách trang điểm cho đôi môi gợi cảm', '', '00:00:00', 2),
(20, ' Bài 1: Cách làm sạch xác định các điểm trên khuôn mặt để tạo khối', '', '00:00:00', 3),
(21, ' Bài 2: Cách tán lớp phấn lót', '', '00:00:00', 3),
(22, '  Bài 3: Cách đánh lớp nền', '', '00:00:00', 3),
(23, '  Bài 4: Tạo khối cho khuôn mặt V-line', '', '00:00:00', 3),
(24, '  Bài 5: Tán phấn và bột tạo khối cho khuôn mặt V-line', '', '00:00:00', 3),
(25, ' Bài 1: Giới thiệu phong cách trang điểm Thái Lan', '', '00:00:00', 4),
(26, ' Bài 2: Cách đánh kem lót và kem nền', '', '00:00:00', 4),
(27, 'Bài 3: Che khuyết điểm vùng sáng tối trên khuôn mặt', '', '00:00:00', 4),
(28, ' Bài 4: Đánh phấn má và vẽ lông mày cong phong cách Thái Lan', '', '00:00:00', 4),
(29, ' Bài 5: Tán base mắt và phối màu mắt', '', '00:00:00', 4),
(30, ' Bài 6: Vẽ high light tự nhiên', '', '00:00:00', 4),
(31, ' Bài 7: Đánh son thẩm mĩ', '', '00:00:00', 4),
(32, ' Bài 1: Làm sạch mặt và đánh lớp lót đầu tiên', '', '00:00:00', 5),
(33, 'Bài 2: Đánh kem nền che khuyết điểm và tạo khối cho sống mũi, xương gò má', '', '00:00:00', 5),
(34, ' Bài 3: Phủ phấn high light và vẽ chân mày', '', '00:00:00', 5),
(35, ' Bài 4: Vẽ base mắt và phủ phấn mắt', '', '00:00:00', 5),
(36, ' Bài 5: Tán phấn má tròn và vẽ môi hồng', '', '00:00:00', 5),
(37, ' Bài 1: Lớp đánh kem lót đầu tiên', '', '00:00:00', 6),
(38, ' Bài 2: Tạo khối cho khuôn mặt', '', '00:00:00', 6),
(39, ' Bài 3: Tán màu mắt và nối mi', '', '00:00:00', 6),
(40, ' Bài 4: Vẽ sống mũi cao và chân mày cong', '', '00:00:00', 6),
(41, ' Bài 5: Đánh má hồng và tô son trẻ trung theo phong cách áo dài', '', '00:00:00', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MAGV` int(11) NOT NULL,
  `TENGV` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `LINKGV` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIEUDEGV` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `TOMTATGV` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOIDUNGGV` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MAGV`, `TENGV`, `LINKGV`, `TIEUDEGV`, `TOMTATGV`, `NOIDUNGGV`) VALUES
(1, 'MR. LÊ TÙNG', '1', '\"SỐNG ĐỂ LÀM ĐẸP – LÀM ĐẸP ĐỂ SỐNG\"', 'Tôi rất mong muốn được chia sẽ những kiến thức và kinh nghiệm cùng với các bạn có cùng đam mê, hãy cùng tôi xây dựng và phát triễn ngành Make Up tại T&T MAKE UP.', 'Đã qua rồi thời kỳ con người chỉ biết nghĩ tới việc “ăn no mặc ấm”, ngày nay, xu hướng không chỉ phái yếu mà cả phái mạnh cũng đặc biệt chú trọng hơn đến việc chăm sóc sắc đẹp cho bản thân, chính vì vậy, nhu cầu Thẩm mỹ  – Làm đẹp ngày càng trở nên cần thiết. Và cũng vì thế yêu cầu của một chuyên viên Thẩm Mỹ ngày nay không chỉ giỏi về kĩ thuật mà còn phải am hiểu về kiến thức chuyên ngành.\r\n\r\nVới niềm đam mê về ngành Thẩm Mỹ nói chung và bộ môn Trang Điểm nói riêng từ lúc bé. Và cũng chính Trang Điểm là ngã rẽ và là bước ngoặt lớn trong cuộc đời tôi khi tôi còn là sinh viên năm 2 của một trường đại học. Từ bỏ con đường đại học đã được sắp xếp để theo đuổi niềm đam mê là một điều không dễ vào thời điểm ấy.\r\n\r\nVới tôi, nếu mình đam mê thì học nghề cũng là một con đường tốt. Học mà không có đam mê và mục đích thì rất khó học. Tôi rất mong muốn được chia sẽ những kiến thức và kinh nghiệm cùng với các bạn có cùng đam mê, hãy cùng tôi xây dựng và phát triễn ngành MAKE UP tại T&T.'),
(2, 'MS. HƯƠNG HỒ', '2', '\"Ước mơ chính là niềm đam mê\"', 'Chúc các bạn thành công và tìm được con đường nghề nghiệp đúng với sở trường của mình, giống như tôi đã từng lựa chọn.', 'Tôi tốt nghiệp tại trường Đại Học Khoa Học Xã Hội & Nhân Văn, chuyên ngành tôi lựa chọn tại thời điểm đó là khoa Ngữ Văn Pháp.Sau khi tốt nghiệp, tôi cũng như nhiều bạn trẻ khác vẫn chưa thực sự  tìm thấy niềm vui trong công việc văn phòng công sở, trong tôi luôn cháy bỏng ước mơ trở thành chuyên viên trang điểm chuyên nghiệp.\r\n\r\nNgay khi biết thông tin về trung tâm T&TMakeUp mở tại Việt Nam và đào tạo các chuyên ngành thẩm mỹ theo tiêu chuẩn của Nhật, tôi đã đăng kí tham gia khóa học trang điểm chuyên nghiệp 1 năm với mong muốn đặt viên gạch vững chắc đầu tiên cho niềm đam mê của mình.\r\n\r\nKết thúc khóa học, tôi đi làm một thời gian cho một nhãn hiệu mĩ phẩm lớn của nước ngoài,học hỏi thêm những kinh nghiệm quí giá, cũng như tôi luyện bản thân, và quay lại T&T với tư cách là giảng viên bộ môn Make up. Và trong 5 năm qua đứng  ở vị trí giáo viên của T&T, ngọn lửa đam mê về trang điểm trong tôi ngày càng bùng cháy cùng với các tác phẩm của học trò. Mong rằng trong tương lai tôi sẽ thành công hơn nữa ở bộ môn mình đã chọn lựa. Chúc các bạn thành công và tìm được con đường nghề nghiệp đúng với sở trường của mình, giống như tôi đã từng lựa chọn.\r\n\r\n '),
(3, 'MS. LÊ THẢO', '3', '\" Dám nghĩ , dám làm là 1 phần tính cách con người tôi\"', 'Đam mê và tìm đến với ngành thẩm mỹ như một bước ngoặc đối với cuộc đời tôi. Tôi nghĩ cho dù bạn  làm gì chỉ cần có sự cố gắng và yêu thích thì bạn sẽ thành công.', 'Đam mê và tìm đến với ngành thẩm mỹ như một bước ngoặc đối với cuộc đời tôi….Khi bước vào ngành make up tôi chỉ nghĩ đơn giản: làm đẹp cho bản thân, tôi nghĩ mình thành công khi mọi người nói tôi bây giờ xinh đẹp, khác ngày xưa rất nhiều ( cười )… chính vì vậy mà  tôi không muốn mình dừng lại ở đây, tôi muốn tất cả mọi người ai cũng có thể giống như tôi…vì vậy mà tôi đã  quyết tâm để trở thành 1 giáo viên trong ngành  make up … tôi nghĩ cho dù bạn  làm gì chỉ cần có sự cố gắng và yêu thích thì bạn sẽ thành công.\r\n\r\nHiện tôi là giảng viên Makeup của T&T, với cương vị là giáo viên bộ môn đứng lớp trong suốt hơn 4 năm qua.Tôi hứa sẽ giữ mãi LỬA để cùng các bạn đi hết con đường .'),
(4, 'MS. VŨ HẰNG', '4', '\"Nhan sắc là thước đo đánh giá con người\"', 'Tôi tin rằng các bạn sẽ thành công nếu các bạn biết chấp nhận và cố gắng vượt qua những khó khăn ban đầu để đến được đỉnh vinh quang trong tương lai.\r\nTôi và T&T rất hoan nghênh chào đón các bạn đến với Học viện ', 'Thời của tôi, các bạn cũng đã biết phân biệt về cái đẹp, tuy nhiên cách đánh giá cũng còn hạn chế.\r\n\r\nÔng bà ta ngày xưa vẫn thường định hướng con cháu đi theo con đường chữ nghĩa hơn là chọn cái nghề, đặc biệt là nghề trang điểm mà người ta vẫn gọi là nghề  “ Làm dâu trăm họ”.\r\n\r\nRiêng tôi đến với ngành make up trước hết đó là sự tò mò, rồi đến thích thú, và hâm mộ các đàn anh, đàn chị đi trước. Tôi đã tự mày mò học hỏi. tự đem người thân ra làm mẫu rồi nhờ cả đến bạn bè, để tôi được tập tành.Năm 2009, qua tìm hiểu thông tin và được biết ở Việt Nam lần đầu có 1 trường nghề được đào tạo nghề thẩm mỹ bài bản, chuyên nghiệp. Tôi đã dự tuyển và trải qua những kỳ sát hạch Giảng viên của các Chuyên gia Nhật Bản, để trở thành Trưởng bộ môn Make Up chuyên nghiệp tại T&T. Tôi đã mất hơn 2 năm để học kỹ năng nghề từ cơ bản đến chuyên sâu, chính xác và khoa học từ đội ngũ chuyên gia Nhật Bản. Đến hôm nay, tôi đã là một giảng viên vững tay nghề và giỏi nghiệp vụ sư phạm tại TPHCM.\r\n Vì thế, T&T chính là ngôi nhà thứ 2 của tôi. Đối với  các học viên khi chọn T&T là nơi khởi nghiệp, tôi mong  các bạn hãy xác định được mục tiêu nghề nghiệp rõ ràng, phải kiên nhẫn, luôn đam mê & hi sinh cho niềm đam mê ấy.'),
(5, 'MS. PHAN HUYỀN TRÂN', '5', '\"Make Up chính là cuộc đời tôi!\"', 'Đối với tôi, tôi đến với ngành trang điểm như một cái duyên, một sự sắp đặt của thượng đế, và cuối cùng tôi đã tìm được nguồn sống của chính bản thân tôi, tôi tin tôi cũng sẽ truyền ngọn lửa tình yêu đó đến cho các bạn !', 'Sau khi trải qua nhiều công việc khác nhau, tôi lựa chọn công việc trở thành một giáo viên tại T&T làm điểm dừng cho nghề nghiệp của mình.Tôi vốn thích làm đẹp nên mỗi tuần tôi đều đến tiệm make up để làm đẹp. Nhưng dù làm make up ở nhiều nơi tôi vẫn không đặc biệt thích nơi nào. Đến với ngành này, những kiến thức, những kỹ năng đã khơi dậy trong tôi sự say mê, tìm tòi học hỏi những cái mới, cái đẹp trong ngành. Càng say mê tôi càng không ngừng cố gắng.\r\n\r\nĐây là một môi trường tuyệt vời để tôi không ngừng học hỏi cũng như truyền hết những kỹ năng, kiến thức, đam mê của bản thân cho các em học viên. Tôi nghĩ , biết được một nghề để mưu sinh đã quý; bản thân tôi thấy mình hạnh phúc với nghề thì càng quý biết bao.'),
(6, 'MS. HUYỀN TRINH', '6', '“vững kiến thức- giỏi kỹ thuật”', ' Sự thành công trong tương lai của các bạn chính là mục tiêu phấn đấu và là niềm mơ ước của tôi. Tôi sẽ song hành và vun đắp cho định hướng, cho sự khát khao, cho niềm đam mê của các bạn.', 'Xin chào, tôi tên Phan Thị Huyền Trinh là giáo viên bộ môn Make Up, một bộ môn mà đại đa số chuyên viên thẩm mỹ đang cần.. Người Việt Nam chúng ta có câu “ Nhất nghệ tinh, nhất thân vinh”, và tôi tự hào là cầu nối mở cửa ước mơ, mở cửa con đường đi đến sự vinh quanh trong đỉnh cao nghề nghiệp của các bạn.Thẫm mỹ nữ từng là nghề gia truyền của gia đình tôi. Sau hơn 15 năm gắn bó với nghề,  4 năm được học hỏi, làm việc trong môi trường Make Up chuyên nghiệp của OPI – Mỹ, 03 năm trao dồi, học hỏi hỏi, giảng dạy, đào tạo thêm kỹ năng tiên tiến của Nhật Bản từ Japan Beauty Art  Academy, tôi nhận thấy rằng: thẩm mỹ nói chung và ngành thẩm mĩ nói riêng luôn luôn đổi mới, đầy thách thức, sáng tạo.\r\n\r\nTôi tâm niệm rằng  sẽ đem tất cả những kinh nghiệm đúc kết được, những gì đã học hỏi,  tích lũy trong thời gian qua và trong tương lai tới truyền đạt hết cho các bạn. Mỗi người giáo viên sẽ có các phương pháp và hình thức giảng dạy khác nhau. Nhưng với tôi, ngoài tâm huyết, sự nhiệt tình, trách nhiệm, đào tạo bài bản theo phương pháp sư phạm, logic…tôi luôn hướng đến sự gợi mở trong tư duy, và phát huy tối đa khả năng sáng tạo đang tiềm tàng trong các bạn.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHD` int(11) NOT NULL,
  `NGAYHD` date NOT NULL,
  `TONGTIEN` float NOT NULL,
  `MAHV` int(11) NOT NULL,
  `MAAD` int(11) NOT NULL,
  `MAKM` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `CHECKTT` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MAHD`, `NGAYHD`, `TONGTIEN`, `MAHV`, `MAAD`, `MAKM`, `MAKH`, `CHECKTT`) VALUES
(1, '2018-12-02', 0, 1, 1, 1, 1, 1),
(2, '2018-12-01', 0, 2, 2, 2, 2, 0),
(3, '2018-12-03', 0, 3, 1, 3, 3, 1),
(4, '2018-12-05', 0, 4, 1, 4, 4, 0),
(5, '2018-12-07', 0, 5, 2, 5, 5, 1),
(6, '2018-12-08', 0, 6, 2, 6, 6, 1),
(7, '2018-12-04', 0, 7, 2, 7, 2, 1),
(8, '2018-12-09', 0, 8, 1, 8, 5, 0),
(9, '2018-12-21', 0, 9, 2, 5, 6, 0),
(10, '2018-12-26', 0, 10, 1, 7, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvien`
--

CREATE TABLE `hocvien` (
  `MAHV` int(11) NOT NULL,
  `TENDNHV` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAILHV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSHV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trn_date` date NOT NULL,
  `TENHV` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIACHIHV` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGAYSINHHV` date NOT NULL,
  `SDTHV` char(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocvien`
--

INSERT INTO `hocvien` (`MAHV`, `TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`) VALUES
(1, 'Lan Huong', 'lhuongqq@gmail.com', '999991', '0000-00-00', 'Mai Lan Huong', '95 Xuan Dieu', '1991-02-03', '0193827237'),
(2, 'Huy Nam', 'hhh@gmail.com', '987864', '0000-00-00', 'Vu Huy Nam', '10 Nhoc Hoi', '1995-03-09', '0164433756'),
(3, 'Ngoc Quynh', 'Ngocquynh@gmail.com', '34232', '0000-00-00', 'Vu Ngoc Quynh', '91 Hoang Mai', '1998-03-01', '0193827434'),
(4, 'Hoang Linh', 'hoanglinh@gmail.com', '3442323', '0000-00-00', 'Nguyen Hoang Linh', '100 Truong Chinh', '1992-05-09', '019384232'),
(5, 'Xuan Dieu', 'xuandieu@gmail.com', 'acbbj1', '0000-00-00', 'Hoang Xuan Dieu', '84 Hoang Hoa Tham', '1995-02-12', '019382212'),
(6, 'Mai Ngoc', 'maingoc@gmail.com', 'aa111', '0000-00-00', 'Nguyen Mai Ngoc', '1 Hang Bai', '1995-12-12', '0193827786'),
(7, 'Ngoc Lan', 'ngoclan@gmail.com', '545qsx', '0000-00-00', 'Hoang Ngoc Lan', '12 Hang Trong', '1992-01-06', '0193827232'),
(8, 'Tu Quynh', 'tuquynh@gmail.com', '99999112', '0000-00-00', 'Hoang Tu Quynh', '12 Thai Thinh', '1998-12-09', '0198665544'),
(9, 'Dieu Huong', 'dhuong@gmail.com', '923131', '0000-00-00', 'Nguyen Dieu Huong', '36 Lang', '1992-06-08', '0193820990'),
(10, 'Thu Phuong', 'tp123@gmail.com', 'vdvds1', '0000-00-00', 'Dinh Thu Phuong', '12 Hang Man', '1993-04-05', '0193828888'),
(11, 'Mai Linh', 'mailinh@gmail.com', 'bbbbb', '0000-00-00', 'MaiThi Linh', '99 Hang Bong', '1994-01-01', '01938132321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MAKH` int(11) NOT NULL,
  `TENKH` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `LOAIKH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LINKKH` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIEUDEKH` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `TOMTATKH` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `GIAKH` float NOT NULL,
  `MAAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `LOAIKH`, `LINKKH`, `TIEUDEKH`, `TOMTATKH`, `GIAKH`, `MAAD`) VALUES
(1, 'Trang điểm tại nhà', 'ONL', '1', 'Phần 1: Phong cách trang điểm cá nhân tại nhà', 'Một trong những lý do được nhiều người lựa chọn khoá học trang điểm tại nhà là bạn có thể tự điều chỉnh thời gian của mình, không phải đi tới tiệm trang điểm nên tiết kiệm rất nhiều thời gian và công sức đi lại', 8000000, 1),
(2, 'Cơ bản tự nhiên', 'ONL', '2', 'Phần 2: Các bước trang điểm cơ bản tự nhiên nhất dành cho những bạn gái lần đầu học makeup', 'Trang điểm tự nhiên là xu thế makeup chưa bao giờ hết hot. Với vẻ ngoài dịu dàng, đặc biệt hơn cả, đây cũng là một trong những “mẹo” giúp bạn trẻ trung hơn', 9000000, 1),
(3, 'Tạo khối V- line', 'ONL', '3', 'Phần 3: Phong cách trang điểm tạo khối mặt V - line', 'Khuôn mặt V-line (V shaped face) thon gọn thanh thoát hiện nay đang được các bạn gái trẻ coi là chuẩn mực cho nét đẹp tinh tế và có phần sang trọng. Khoá học sẽ giúp các bạn có khuôn mặt V-Line hằng mơ ước', 6000000, 1),
(4, 'Thái Lan', 'ONL', '4', 'Phần 4: Phong cách trang điểm Thái Lan', 'Nếu bạn là một tín đồ trang điểm, yêu thích làm đẹp thì không thể bỏ qua trào lưu trang điểm mới đang được giới trẻ yêu thích – trang điểm phong cách Thái Lan đúng không? Hãy đăng ký khoá học và bắt đầu ngay nào!', 7000000, 2),
(5, 'Một mí', 'ONL', '5', 'Phần 5: Phong cách trang điểm dành cho các bạn mắt 1 mí', 'Một mí thì sao chứ?! Kể cả khi không có đôi mắt hai mí sâu rõ rệt, đôi mắt của bạn vẫn sẽ cực long lanh với những kiểu trang điểm một mí trong khoá học này', 5000000, 2),
(6, 'Áo dài', 'ONL', '6', ' Phần 6: Phong cách trang điểm áo dài', 'Áo dài gắn liền với vẻ đẹp giản dị, nữ tính, tinh khôi chính vì thế mà bí quyết trang điểm thích hợp với áo dài là vô cùng quan trọng, tránh làm mất đi vẻ đẹp tinh khiết đó. Bạn gái đã biết cách make up khi mặc áo dài chưa? Chắc chắn bạn sẽ đẹp hơn và duyên dáng hơn với những bài học dưới đây', 9000000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` int(11) NOT NULL,
  `TENKM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `LINKKM` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIEUDEKM` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `TOMTATKM` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `TENKM`, `LINKKM`, `TIEUDEKM`, `TOMTATKM`, `MAAD`) VALUES
(1, 'KM50%', '1', 'KM50% - Chương trình khuyến mãi học phí lớn nhất năm 2018', 'Hòa cùng không khí sôi động ăn mừng chiến thắng ngoạn mục đội tuyển Việt Nam và giành chiếc cup vô địch mùa AFF cup 2018 sau 10 năm chờ đợi Trung tâm T&T Make Up vui mừng thông báo khuyến mãi những suất ưu đãi học phí giảm 50% học phí tất cả các khóa học', 1),
(2, 'KM10%', '2', 'KM10% - Chương trình khuyến mãi học phí tháng 12', 'Chào đón tháng 12 – Một mùa Nô En sắp đến. Các chàng trai cùng tặng những món quà ý nghĩa nhất cho bạn gái vào dịp giáng sinh cận kề đi nào . Phái đẹp đẹp là Phái đẹp vui ', 2),
(3, 'KM35%', '3', 'KM35% - Khuyến mại ngày Tết, nhận ngay kẻo hết” chào Tết dương lịch 2019!', 'Chuyến tàu thời gian mang tên 2018 đang di chuyển những bước đi cuối cùng. Một hành trình dài chuẩn bị khép lại. Đồng thời đây cũng là cơ hội  để mỗi người kiểm tra lại “hành lí”, chuẩn bị cho lộ trình mới trong năm 2019 đang tới rất gần. ', 2),
(4, 'KM20%', '4', 'KM20%-Khuyến mãi tháng 1 - Ring ngay ưu đãi!', 'Năm mới mừng Xuân, T&T đưa ra những khuyến mãi hot nất mùa năm nay - lung linh cùng phái đẹp. Cùng T&T tôn lên vẻ đẹp của những cô gái trong màu nắng mới xinh tươi năng động tự tin cho một khởi đầu mới của một năm', 2),
(5, 'KM70%', '5', 'KM70%-Cùng T&T- không lo sợ Nắng!', 'Một mùa hè nóng nực đã quay trở lại cùng chị em cúng ta, bên cạnh đó là khói bụi, mồ hôi, thật khó chịu phải không nào? Nhưng đừng lo! Mọi thứ cứ để T&T lo, bạn chỉ cần xinh xắn và tự tin toả nắng thôi! Đã thế lại còn được FREE SHIP!! Thật tuyệt phải không nàooo', 2),
(6, 'KM15%', '6', 'KM15%-Tri ân ngày Nhà giáo Việt Nam!', 'Hòa chung vào không khí khai giảng của các bạn học sinh – sinh viên trên cả nước. T&T MAKE UP xin trân trọng thông báo với các bạn học viên tương lai chương trình ưu đãi, khi tham gia vào các khóa học làm đẹp chuyên nghiệp trong tháng 11 tại Trung Tâm', 1),
(7, 'KM40%', '7', 'KM40%-Tháng 10 sang Thu- Xin thầy u đi học!', 'Một mùa thay lá lại sang, các bạn có lo âu vì tuổi tác? Các bạn không tự tin về vẻ bề ngoài? Mùa khô hanh da mặt lại nứt nẻ bong tróc? thật già nua ư? Chỉ cần đến với T&T Makeup, chúng tôi sẽ giúp bạn quay ngược thời gian về tuổi đôi mươi!', 1),
(8, 'KM60%', '8', 'KM60%- Black Friday!!! Tưng bừng giảm giá!', 'Mùa mua sắm đã đến trên mọi nẻo đường và hoà quyện vào lòng người. Vì sao? Vì đây chính là mùa mua sắm lớn nhất năm được các tín đồ mua sắm luôn chờ đợi! T&T cũng không ngoại lệ! Hãy đến với T&T và rinh ngay những khoá học với mức giá hấp dẫn nhất chưa từng có!!!', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MAAD`);

--
-- Chỉ mục cho bảng `baihoc`
--
ALTER TABLE `baihoc`
  ADD PRIMARY KEY (`MABH`),
  ADD KEY `MAKH` (`MAKH`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MAGV`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `MAKM` (`MAKM`),
  ADD KEY `MAAD` (`MAAD`),
  ADD KEY `MAKH` (`MAKH`),
  ADD KEY `MAHV` (`MAHV`);

--
-- Chỉ mục cho bảng `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`MAHV`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MAKH`),
  ADD KEY `MAAD` (`MAAD`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`),
  ADD KEY `MAAD` (`MAAD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `MAAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `MABH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `MAGV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MAHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `MAHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baihoc`
--
ALTER TABLE `baihoc`
  ADD CONSTRAINT `baihoc_ibfk_1` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MAKM`) REFERENCES `khuyenmai` (`MAKM`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MAAD`) REFERENCES `admin` (`MAAD`),
  ADD CONSTRAINT `hoadon_ibfk_3` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`),
  ADD CONSTRAINT `hoadon_ibfk_4` FOREIGN KEY (`MAHV`) REFERENCES `hocvien` (`MAHV`);

--
-- Các ràng buộc cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD CONSTRAINT `khoahoc_ibfk_1` FOREIGN KEY (`MAAD`) REFERENCES `admin` (`MAAD`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`MAAD`) REFERENCES `admin` (`MAAD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
