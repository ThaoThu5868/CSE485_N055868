<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Học Viên</b></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="<?php echo base_url();?>index.php/admin/pro_themhv">
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên đăng nhập</p></td>
                    <td><input type="text" name="tendn" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Họ Tên</p></td>
                    <td><input type="text" name="ten" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Ngày sinh</p></td>
                    <td><input type="date" name="ngaysinh" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Địa chỉ</p></td>
                    <td><input type="text" name="diachi" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Số điện thoại</p></td>
                    <td><input type="text" name="sdt" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Email</p></td>
                    <td><input type="text" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Mật khẩu</p></td>
                    <td><input type="text" name="pass" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Ngày đăng ký</p></td>
                    <td><input type="date" value="" name="trn" class="form-control"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>