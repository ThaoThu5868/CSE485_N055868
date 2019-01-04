<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Học Viên: <?php echo $hv['MAHV'];?></b></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="<?php echo base_url() . 'index.php/admin/pro_edit_hv/' . $hv['MAHV'];?>">
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Họ Tên</p></td>
                    <td><input type="text" name="ten" class="form-control"  value="<?php echo $hv['TENHV'];?>"></td>
                </tr>
                <tr>
                    <td><P>Ngày sinh</p></td>
                    <td><input type="date" name="ngaysinh" class="form-control"  value="<?php echo $hv['NGAYSINHHV'];?>"></td>
                </tr>
                <tr>
                    <td><P>Địa chỉ</p></td>
                    <td><input type="text" name="diachi" class="form-control"  value="<?php echo $hv['DIACHIHV'];?>"></td>
                </tr>
                <tr>
                    <td><P>Số điện thoại</p></td>
                    <td><input type="text" name="sdt" class="form-control"  value="<?php echo $hv['SDTHV'];?>"></td>
                </tr>
                <tr>
                    <td><P>Email</p></td>
                    <td><input type="text" name="email" class="form-control"  value="<?php echo $hv['EMAILHV'];?>"></td>
                </tr>
                <tr>
                    <td><P>Ngày đăng ký</p></td>
                    <td><input type="date" name="trn" class="form-control"  value="<?php echo $hv['trn_date'];?>"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>