<div class="content">
    <div class="col-md-6 add-dm">
        <h3 class="text-center"><b>Thêm Hóa Đơn</b></h3>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="<?php echo base_url();?>index.php/admin/pro_themhd">
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Ngày hóa đơn</p></td>
                    <td><input type="date" name="ngayhd" class="form-control"></td>
                </tr>
                
                <tr>
                    <td><P>Mã Học Viên</p></td>
                    <td><input type="text" name="mahv" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Mã khóa học</p></td>
                    <td><select name="makh" class="form-control">
                            <?php foreach ($kh as $row) {?>
                                <option value="<?php echo $row['MAKH'];?>"><?php echo $row['MAKH'];?></option>
                            <?php } ?>                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Mã khuyến mãi</p></td>
                    <td><select name="makm" class="form-control">
                            <?php foreach ($km as $row) {?>
                                <option value="<?php echo $row['MAKM'];?>"><?php echo $row['MAKM'];?></option>
                            <?php } ?>                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Check thanh toán</p></td>
                    <td>
                        <div class="check">
                            <div class="form-check"><input class="form-check-input" type="radio" name="checktt" value="1"><label class="form-check-label">Đã thanh toán</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" name="checktt" value="0"><label class="form-check-label">Chưa thanh toán</label></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><P>Người tạo</p></td>
                    <td><input type="text" readonly name="maad" class="form-control" value="<?php echo $this->session->userdata("MAAD"); ?>"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>