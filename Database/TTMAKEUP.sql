create database TTMakeupBeauTy
create table hocvien(
MAHV int AUTO_INCREMENT not null primary key,
TENDNHV varchar(50) not null,
EMAILHV  varchar(50) not null,
PASSHV  varchar(50) not null,
trn_date date not null ,
TENHV text not null  ,
DIACHIHV text not null  ,
NGAYSINHHV date not null ,
SDTHV char(11) not null)

create table khoahoc(
MAKH int AUTO_INCREMENT not null primary key,
TENKH text not null,
LOAIKH varchar(10) not null,
LINKKH char(50)not null ,
TIEUDE longtext not null,
NOIDUNG longtext not null,
DONGIA float not null)

create table hoadon(
MAHD  int AUTO_INCREMENT not null primary key,
NGAYHD date not null)
MAHV int not null,
MAAD int not null)


create table chitiethoadon(
MAKH  int  not null ,
MAHD int not null,
primary key( MAKH,MAHD),
TongTien float  not null)

create table admin(
MAAD int AUTO_INCREMENT not null primary key,
TENDNAD varchar(50) not null,
EMAILAD  varchar(50) not null,
PASSAD  varchar(50) not null,
TENAD text not null,
DIACHIAD	text not null ,
NGAYSINHAD date not null,
SDTAD char(11)  not null)

create table gioithieu(
MAGT  int AUTO_INCREMENT not null primary key,
TENGT text not null,
LINKGT char(50) not null,
TIEUDEGT longtext not null,
NOIDUNGGT longtext not null,
MAAD int not null)

create table khuyenmai(
MAKH int AUTO_INCREMENT not null primary key,
TENKH text not null,
LINKKH char(50) not null ,
TIEUDEKM longtext not null,
NOIDUNGKM longtext not null,
MAAD int not null,
MAHD int not null)

--------------------------
alter table hoadon add foreign key (MAHV) references hocvien(MAHV);
alter table hoadon add foreign key (MAAD) references admin(MAAD);
alter table gioithieu add foreign key (MAAD) references  admin(MAAD);
alter table khuyenmai add foreign key (MAAD) references  admin(MAAD);
alter table khuyenmai add foreign key (MAHD) references  hoadon( MAHD);
alter table chitiethoadon add foreign key (MAHD) references hoadon( MAHD);
alter table chitiethoadon add foreign key (MAKH) references khoahoc(MAKH);
-----------------------------

--hocvien----
-------------------------------
INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Lan Huong','lhuongqq@gmail.com','999991','','Mai Lan Huong','95 Xuan Dieu','1991/2/3','0193827237');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Huy Nam','hhh@gmail.com','987864','','Vu Huy Nam','10 Nhoc Hoi','1995-03-09','0164433756');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Ngoc Quynh','Ngocquynh@gmail.com','34232','','Vu Ngoc Quynh','91 Hoang Mai','1998/3/1','0193827434');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Hoang Linh','hoanglinh@gmail.com','3442323','','Nguyen Hoang Linh','100 Truong Chinh','1992/5/9','019384232');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Xuan Dieu','xuandieu@gmail.com','acbbj1','','Hoang Xuan Dieu','84 Hoang Hoa Tham','1995/2/12','019382212');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Mai Ngoc','maingoc@gmail.com','aa111','','Nguyen Mai Ngoc','1 Hang Bai','1995/12/12','0193827786');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Ngoc Lan','ngoclan@gmail.com','545qsx','','Hoang Ngoc Lan','12 Hang Trong','1992/1/6','0193827232');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Tu Quynh','tuquynh@gmail.com','99999112','','Hoang Tu Quynh','12 Thai Thinh','1998/12/9','0198665544');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Dieu Huong','dhuong@gmail.com','923131','','Nguyen Dieu Huong','36 Lang','1992/6/8','0193820990');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Thu Phuong','tp123@gmail.com','vdvds1','','Dinh Thu Phuong','12 Hang Man','1993/4/5','0193828888');
 INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`)
 VALUES ('Mai Linh','mailinh@gmail.com','bbbbb','','MaiThi Linh','99 Hang Bong','1994/1/1','01938132321');
 --------------------------------------
 
 --admin-----
INSERT INTO `admin`(`TENDNAD`, `EMAILAD`, `PASSAD`, `TENAD`, `DIACHIAD`, `NGAYSINHAD`, `SDTAD`)
 VALUES ('ThanhThu','thuntt62@wru.vn','12345',,'Nguyen Thi Thanh Thu','54 lang','1998-01-01','019384333');
INSERT INTO `admin`(`TENDNAD`, `EMAILAD`, `PASSAD`, `TENAD`, `DIACHIAD`, `NGAYSINHAD`, `SDTAD`)
 VALUES ('PhuongThao','thaotp62@wru.vn','12345','','Truong Phuong Thao','19 Truong Chinh','1998-06-24','01931111');
 ---------------------------------------
 
 ---khoahoc-----
 INSERT INTO `khoahoc`(`TENKH`, `LOAIKH`, `LINKKH`, `TIEUDE`, `NOIDUNG`,`DONGIA`) 
 VALUES ('Trang điểm Mắt','OFF','','5 Bước Trang Điểm Mắt Long Lanh Như Sao Hàn','BƯỚC #1 – LỚP NỀN CHO MẮT

a. Kem nền
Đầu tiên bạn chấm đều một lượng kem nền mắt vừa đủ cho cả mi trên và mi dưới. Sau đó, bạn sử dụng mút trang điểm (beauty blender) hoặc cọ tán kem nền thật đều tay thành một lớp mỏng trên mi mắt. Với lớp kem nền này sẽ hỗ trợ che phủ được các khuyết điểm và hiệu chỉnh màu sắc trên mi mắt và cho lớp trang điểm lâu trôi hơn hẳn.

b. Che khuyết điểm
Khu vực mi mắt dưới thường hay xuất hiện quầng thâm và nếp nhăn. Chính vì vậy bạn phải che khuyết điểm để giảm sự mệt mỏi cho đôi mắt và làm tăng thêm tươi tắn, có hồn.

Nếu bạn gái nào dùng cọ để tán kem che khuyết điểm thì bật mí có bạn một tip nhỏ. Bạn nên lấy lượng kem đều khắp đầu cọ, nghĩa là cả hai mặt cọ trang điểm đều có kem che khuyết điểm. Điều này sẽ giúp bạn tán kem đều hơn.

Sau khi bạn đã có lượng kem che khuyết điểm lên mắt xong, bạn có thể dùng cọ hoặc mút trang điểm tán đều chúng ra. Bạn lưu ý là bạn nên tán kem che khuyết điểm ra ngoài nhằm mục đích tiệp với màu kem nên, không bị quá chói và tương phản màu sắc da.

c. Phấn phủ
Tiếp tục bạn dùng cọ bản to lấy một lượng phấn phủ kiềm dầu đều khắp mi mắt thật nhẹ nhàng. Bước tiếp theo là bạn dùng cọ quét đi lượng phấn thừa trên mi mắt. Phấn phủ có tác dụng làm khô ráo bề mặt da và làm cho làn da mịn màng hơn.

BƯỚC #2 – KẺ CHÂN MÀY

Bạn dùng chì kẻ chân mày hoặc phấn bột gần với tông màu tóc để tạo vẻ tự nhiên. Bạn bắt đầu định hình khung chân mày như sau:

Đường viền trên của khung chân mày: Bạn bắt đầu vẽ chiều ngang từ đầu chân mày cho đến phần đỉnh chân mày rồi vẽ cong nhẹ hướng xuống.
Đường viền dưới của khung chân mày: Bạn vẽ một đường ngang từ giữa chân mày cho đến đuôi chân mày. Sau đó tô kín phần bên trong và dùng đầu chải, chải đều chân mày.

Để có được hàng chân mày tự nhiên như các Sao Hàn, bạn cần lưu ý không nên tạo khuôn chân mày quá đậm, sắc nét cũng như vẽ chân mày quá dài nhé. Bạn chỉ nên vẽ nhẹ nhàng sau đó dùng đầu chải chân mày chải đều chân mày

BƯỚC #3 – TÁN MÀU MẮT

Với kiểu trang điểm ánh nhìn trong veo, tự nhiên như Sao Hàn, các bạn chỉ dùng một hoặc 2 màu sắc và nên chọn các màu trang điểm tự nhiên nhẹ nhàng như: hồng da, đào, hồng nude,…

Ở đây, bạn sẽ sử dụng 2 màu mắt: một màu chủ đạo màu sắc nhẹ nhàng và một màu đậm hơn tạo độ sâu cho mắt. Và bạn chỉ việc tô đều màu mắt lên bầu mắt mà không cần áp dụng kĩ thuật tạo khối, nhấn đuôi mắt phức tạp

Tông màu chủ đạo: Bạn dùng cọ tán đều một lớp thật mỏng lên khắp bầu mắt.
Tông màu đậm hơn: Bạn dùng cọ tán đều một lớp lên bầu mắt ở sát hàng mi. Riêng các bạn gái nào sở hữu đôi mắt một mí  thì bạn có thể tán phần màu mắt này lên 3 – 5 mm so với hàng mi mắt để tạo đôi mắt sâu hơn.

BƯỚC #4 – KẺ MẮT

Để góp phần làm cho đôi mắt to long lanh và có chiều sâu hơn bạn sử dụng chì kẻ mắt hay mắt nước. Một tip nhỏ cho bạn, sự kết hợp giữa chì màu nâu và màu đen hoặc bạn sử dụng chì kẻ màu nâu đen sẽ tự nhiên hơn rất nhiều. Bạn sẽ áp dụng kiểu vẽ mắt mỏng nhẹ để trông thật tự nhiên nhất.

Kẻ mắt màu sử dụng một loại chì kẻ hoặc mắt nước
Để vẽ mắt dễ dàng hơn, bạn dùng ngón tay nâng nhẹ phần mi mắt trên, sau đó tô kín đường viền mi mắt bằng cách chuyển động theo đường zigzag. Cách chuyển động vẽ mắt này sẽ giúp bạn dễ vẽ hơn và không bị đau mắt. Sau đó bạn tô kín đường kẻ và kẻ đậm dần về ⅓ đuôi mắt, kéo nhẹ đường kẻ để tạo đôi mắt dài hơn, sắc nét hơn.

K ẻ mắt kết hợp chì kẻ mắt nâu và bút kẻ mắt màu đen hoặc chì kè mắt màu đen
Với cách trang điểm mắt này hơi phức tạp hơn một chút nhưng lại đạt chiều sâu và độ tự nhiên cho đôi mắt đến hoàn hảo. Với chì kẻ mắt hoặc bút kẻ mắt màu nâu nếu sử dụng thì quá nhạt, không đủ tạo độ sâu. Còn với chì kẻ màu nâu đen hoặc bút kẻ mắt màu nâu đen cũng là một lựa chọn tốt nhưng chưa phải là tối ưu vì màu sắc không hòa quyện đạt đến độ tự nhiên nhất.

BƯỚC #5 – BẤM CONG MI VÀ CHẢI MASCARA

Đôi mắt sẽ thêm to và long lanh hơn nếu có hàng mi cong vuốt. Bạn thực hiến bấm nhẹ cong hàng mi từ trong gốc ra ngoài.

Một mẹo nhỏ để việc bạn bấm mi thật dễ dàng: bạn giữ đầu thẳng, đôi mắt nhìn xuống và đặt gương phía trước ngực để soi cho thấy bạn làm được gì. Sau đó bạn dùng dụng cụ bấm mi đưa nhẹ vào hàng mi và bấm cong. Với phương pháp này bạn sẽ không còn sợ việc bấm vào mí trên nữa nhé.

Để chải mascara đều và đẹp không bị vón cục, bạn có thể dùng giấy lau đi lớp mascara thừa bám trên cọ rồi hãy thực hiện vuốt nhé.','1200000');

 
 INSERT INTO `khoahoc`(`TENKH`, `LOAIKH`, `LINKKH`, `TIEUDE`, `NOIDUNG`)
  VALUES ('Trang Điểm Đơn Gỉan','ONL','','5 Mẹo Trang Điểm Đơn Giản Hàng Ngày Cho Bạn Gái Bận Rộn','#1. Trang điểm đơn giản với lớp nền từ cushiotrang dn
Trang điểm bằng phấn nước có thể thay thế phấn phủ, lược bỏ được nhiều lớp trang điểm khác mà vẫn có thể mang lại làn da láng mịn. Lớp trang điểm trong suốt và căng tràn sức sống chính là những gì mà một sản phẩm phấn nước có thể đem lại cho bạn một cách tức khắc. Với những cải thiện vượt trội như được tích hợp cả chức năng chống nắng với chỉ số SPF 15-40, cushion thậm chí còn có thể giúp bạn lước bỏ bước sử dụng kem chống nắng.

#2. 30 giây trang điểm đơn giản để có má hồng xinh tươi
Cách trang điểm nhanh nhất là dùng phấn má hồng dạng kem hoặc son, đặc biệt lúc bạn không có thời gian và gấp gáp. Hãy chấm son môi màu đỏ, hồng hoặc cam lên vùng má, dùng mút hoặc ngón tay tán đều. Trong trường hợp đánh má hồng quá tay, bạn có thể dùng cushion để phủ đi.


#3. Trang điểm đơn giản cho lông mày và mắt chỉ trong 2 phút
Có một sự thật là không phải ai trong chúng ta đều có khiếu vẽ lông mày hoặc phải tốn ít nhất là 10 phút thì mới có hàng chân mày tự nhiên chuẩn và đẹp. Đừng lo, nếu gấp gáp, đã có khung lông mày giúp bạn. Với nhiều hình dáng da dạng, việc của bạn chỉ là cố định dúng vị trí của sản phẩm trên chân mày rồi tô chì mà thôi.



#4. Vẽ eyeline bằng kẹp tăm
Thừa nhận đi, nàng chắc hẳn phải mất rất nhiều thời gian mới có thể vẽ được eyeline hoàn chỉnh đúng không? Đặc biệt là với những nàng mới tập trang điểm thì lại càng khó khăn hơn. Có một mẹo siêu hay ho bạn có thể tham khảo đó là dùng kẹp tăm để vẽ phần đuôi eyeliner.
                                                                                

#5. Chuốt mascara không bị lem
Khi càng bận rộn, gấp gáp thì chúng ta không tránh được việc được makeup bị lem, đặc biệt là mascara. Để chải mascara đúng chuẩn, không bị lem luốc thì bạn dùng một chiếc muỗng đặt ngay dưới phần mi mắt dưới, sau đó chải mi như bình thường. Nếu lem chúng sẽ dính vào muỗng, không bị lem sang bên ngoài, thực hiện tương tự với mí mắt trên.


Ngoài 5 mẹo trang điểm đơn giản mà Đẹp365 đã bày ở trên, bạn có thể dùng thêm các cách khác như dùng đá lạnh thoa lên mặt trước khi trang điểm, chúng giúp da săn chắc, giảm bọng mắt và giữ lớp phấn lâu hơn. Xịt khoáng dưỡng ẩm cũng là cách giúp da căng mịn màng… Hi vọng những mẹo này sẽ giúp ích nhiều cho các nàng bận rộn nhé.','2100000');
  
  ---------------------------
  
  ---Gioithieu------
  INSERT INTO `gioithieu`(`TENGT`, `LINKGT`, `TIEUDEGT`, `NOIDUNGGT`, `MAAD`)
   VALUES ('Trung tâm T&T Makeup','','Trung tâm dạy makeup Tôn vinh phái đẹp phụ nữ T&T Makeup','Winnie Beauty Academy được thành lập bởi bà Winine Nguyễn, một chuyên gia trong lĩnh vực làm đẹp tại Hong Kong. Là đối tác của rất nhiều các Salon, Spa lớn tại Hong Kong, Hàn Quốc, Đài loan,… Winnie Academy chúng tôi đã có trên 10 năm cung cấp các khoá học đào tạo chuyên nghiệp trong ngành làm đẹp cho thị trường Việt Nam nói riêng cũng như toàn châu Á nói chung.

Ngoài ra, Winnie Beauty Academy còn là thành viên duy nhất, đại diện cho Việt Nam trong liên đoàn Sắc đẹp và Sức khoẻ Hong Kong qua đó học viên Winnie sẽ được nhận chứng nhận quốc tế B.H.L trong ngành làm đẹp giúp các bạn tự tin xin việc tại bất kỳ đâu trên thế giới.

Hàng năm, với hơn 1000 học viên được đào tạo ra với tỷ lệ 100% có việc làm trong các chuyên ngành:
Tại Winnie Beauty Academy, chất lượng giảng dạy luôn là ưu tiên hàng đầu
Trang điểm thẩm mỹ (Make – up)
Trang điểm thẩm mỹ (Makeup)
Bằng sự uy tín trong mắt khách hàng và đối tác, Học viện làm đẹp quốc tế Winnie Beauty Academy cam kết mang đến các khoá học làm đẹp chuyên nghiệp bằng 5 giá trị hữu hình sau:

1
Winnie Beauty Academy vinh dự là một trong những cơ sở đào tạo làm đẹp trình độ sơ cấp đầu tiên tại Việt Nam được Sở lao động – Thương binh và Xã hội cấp phép. Với sự khác biệt này, học viên của Winnie sau khi tốt nghiệp sẽ có cơ hội nhận được chứng chỉ sơ cấp nghề được công nhận bởi nhà nước Việt Nam, do đó các bạn hoàn toàn tự tin hành nghề và mơ cở kinh doanh trong lĩnh vực làm đẹp một cách hợp pháp tại Việt Nam.
Với giáo trình chuyên nghiệp cùng đội ngũ giảng viên Quốc tế giàu kinh nghiệm, Winnie Beauty Academy luôn là sự lựa chọn hàng đầu của người học nghề

2 
Mái nhà Winnie không chỉ là một nơi để trau dồi kiến thức chuyên môn, mài dũa kỹ năng nghề mà còn là nơi đam mê, sở thích, nhiệt huyết và tình yêu được hoà lẫn bởi những tâm hồn yêu cái đẹp. “Hãy theo đuổi đam mê, thành công sẽ theo đuổi bạn” – đó chính là lời khuyên chân thành nhất mà Winnie chúng tôi gửi gắm đến tất cả các bạn.
Với trên hàng nghìn học viên được đào tạo ra hàng năm, chúng tôi tự hào là nơi khơi gợi, đánh thức và nuôi dưỡng đam mê trong ngành làm đẹp cho các bạn trẻ để giúp các bạn tự tin vững bước trên con đường sự nghiệp sau này.

3
Chúng tôi hiểu rằng môi trường học đóng góp rất lớn tới kết quả và giáo viên chính là người đồng hành, chỉ dẫn cho các bạn trong quá trình từng bước chinh phục thành công. Vì vậy đội ngũ giáo viên của Winnie đều là những cá nhân vững vàng về chuyên môn, nhiều năm kinh nghiệm chuyên sâu trong nghề với phương pháp giảng dậy khoa học và khả năng truyền đạt kiến thức dễ hiểu.
Thêm vào đó, một văn hoá luôn gắn liền với mọi giáo viên là sự thân thiện, cởi mở, tận tình và tâm huyết giải đáp mọi thắc mắc của các học viên.

4
Lộ trình khoá học được thiết kế đúng trọng tâm, tối ưu thời gian với trên 90% giờ học là thực hành trên mẫu. Các kiến thức và kỹ thuật được cập nhật liên tục cùng với máy móc, thiết bị chuyên môn hiện đại hàng đầu được sử dụng tại các Salon, Spa hiện nay.
Hỗ trợ toàn bộ máy móc công nghệ cao ứng dụng tại các thẩm mỹ viện hàng đầu Việt Nam
Tại Winnie Beauty Academy, học viên luôn được trải nghiệm các thiết bị làm đẹp tân tiến nhất
Do đó, chỉ với 2 – 3 tháng tại Winnie, các bạn học viên sẽ nắm vững được mọi kỹ thuật cơ bản nhất cho đến chuyên nghiệp cũng như các kỹ năng mềm cần thiết khác, qua đó giúp các bạn đặt nền móng cho sự phát triển dài hạn trong sự nghiệp của mình.
Với trên 90% giờ học là thực hành trên mẫu cùng các chương trình thực tế, học viên Winnie có thể vững tay nghề chỉ sau 2 – 3 tháng

5
Kiến thức xuyên suốt trong khoá học được thiết kế bài bản và được cật nhật thường xuyên để bám sát với thực tiễn chính là tiền đề vững chắc để các bạn dễ bắt nhịp với công việc thực tế. Với kiến thức chuyên môn được trau dồi sau khoá học, các bạn học viên sẽ được giới thiệu việc làm đến các Spa, Salon lớn là đối tác của Winnie với môi trường làm việc hiện đại, chuyên nghiệp và mức thu nhập hấp dẫn.
Hơn nữa, khi sở hữu chứng chỉ sơ cấp nghề, các bạn học viên có thể tự tin hành nghề và mở cở kinh doanh làm đẹp một cách hợp pháp tại Việt Nam.','1'); 
----------------------------------


 --------------------------------
 -------Hoadon----------
 INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-12','1','1');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-1','2','1');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-2','3','1');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-3','4','1');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-5','6','1');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-4','5','2');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-5','7','2');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-8','8','2');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-9','9','2');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-9','10','2');
  INSERT INTO `hoadon`( `NGAYHD`, `MAHV`, `MAAD`)
  VALUES('2018-12-5','11','2');
  
  ----------------------------
  -------khuyenmai------------

 INSERT INTO `khuyenmai`(`TENKM`, `LINKKM`, `TIEUDEKM`, `NOIDUNGKM`, `MAAD`, `MAHD`) 
 VALUES('KM50%','','Chương trình khuyến mãi học phí lớn nhất năm 2018','Hòa cùng không khí sôi động ăn mừng chiến thắng ngoạn mục đội tuyển Việt Nam và giành chiếc cup vô địch mùa AFF cup 2018 sau 10 năm chờ đợi Học Viện Winnie vui mừng thông báo khuyến mãi những suất ưu đãi học phí giảm 50% học phí tất cả các khóa học','1','4');
  INSERT INTO `khuyenmai`(`TENKM`, `LINKKM`, `TIEUDEKM`, `NOIDUNGKM`, `MAAD`, `MAHD`) 
 VALUES('KM20%','','Chương trình khuyến mãi học phí ltháng 12','Chào đón tháng 12 – Một mùa Nô En sắp đến. Các chàng trai cùng tặng những món quà ý nghĩa nhất cho bạn gái vào dịp giáng sinh cận kề đi nào . Phái đẹp đẹp là Phái đẹp vui ','2','5');
 INSERT INTO `khuyenmai`(`TENKM`, `LINKKM`, `TIEUDEKM`, `NOIDUNGKM`, `MAAD`, `MAHD`) 
 VALUES('KM35%','','Khuyến mại ngày Tết, nhận ngay kẻo hết” chào Tết dương lịch 2019!','Chuyến tàu thời gian mang tên 2018 đang di chuyển những bước đi cuối cùng. Một hành trình dài chuẩn bị khép lại. Đồng thời đây cũng là cơ hội  để mỗi người kiểm tra lại “hành lí”, chuẩn bị cho lộ trình mới trong năm 2019 đang tới rất gần. ','2','7');
 
 ----------------------------
 -------chitiethoadon-------
 INSERT INTO `chitiethoadon`(`MAKH`, `MAHD`, `TONGTIEN`) VALUES ('2','2','2100000');
INSERT INTO `chitiethoadon`(`MAKH`, `MAHD`, `TONGTIEN`) VALUES ('1','4','1200000');
INSERT INTO `chitiethoadon`(`MAKH`, `MAHD`, `TONGTIEN`) VALUES ('2','5','2100000');
INSERT INTO `chitiethoadon`(`MAKH`, `MAHD`, `TONGTIEN`) VALUES ('1','6','1200000');
INSERT INTO `chitiethoadon`(`MAKH`, `MAHD`, `TONGTIEN`) VALUES ('1','7','1200000');

 
 
 
 