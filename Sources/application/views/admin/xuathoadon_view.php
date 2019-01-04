<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <base href="<?php echo base_url(); ?>" />
    <link rel="shortcut icon" type="assets/img/tt.png" href="assets/img/tt.png"/>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
    <div class="hoadon">
        <div class="me-header" >
                <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button me-nav " style="background-color:white" >
                    <div class="container">
                        <a class="navbar-brand" >
                            <span>
                                <img src="assets/img/tt.png" style="width:50px; height: auto;"><img src="assets/img/makeup1.png" style="width:150px;height: auto">
                            </span>
                            <div class="diachi">Số 19 – Trường Chinh – Đống Đa – Hà Nội</div>
                            <div class="diachi">0974715684</div>
                        </a>
                        
                        
                    </div>
                </nav>  
            </div>
        <div class="container" style="margin-top:50px">
            <h2 style="text-align:center">Hóa Đơn</h2>
            <p style="text-align:center">Mã hóa đơn: <?php echo $HD['MAHD']; ?></p>
            <div>
                <p>Ngày hóa đơn: <?php echo $HD['NGAYHD']; ?></p>        
                <p>Học viên: <?php echo $HV['TENHV']; ?></p>   
                <p>Địa chỉ: <?php echo $HV['DIACHIHV']; ?></p>
                <p>Số điện thoại: <?php echo $HV['SDTHV']; ?></p>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Mã khóa học</th>
                    <th>Tên khóa học</th>
                    <th>Số lượng</th>
                    <th>Giá khóa học</th>
                    <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $KH['MAKH']; ?></td>
                        <td><?php echo $KH['TENKH']; ?></td>
                        <td>1</td>
                        <td><?php echo $KH['GIAKH']; ?></td>
                        <td><?php echo $KH['GIAKH']; ?></td>
                    </tr>
                </tbody>
            </table>
            <div style="float: right;" >
                <p >Khuyến mãi: <?php echo $KM['TENKM']; ?> </p>        
                <p >Tổng tiền: <?php echo $HD['TONGTIEN']; ?></p>
            </div>
            <pre>





            </pre>
            <div>
                <p style="float:left">Người lập hóa đơn</p>
                <p style="float:right">Học viên</p>
            </div>
            <pre>





            </pre>
            <div>
                <p style="float:left"><?php echo $AD['TENAD']; ?></p>
                <p style="float:right"><?php echo $HV['TENHV']; ?></p>
            </div>
            <pre>





            </pre>
            <div style="text-align:center">
                <p>T&T Makeup cảm ơn quý học viên!</p>
                <p>Làm đẹp mãi mãi!</p>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>