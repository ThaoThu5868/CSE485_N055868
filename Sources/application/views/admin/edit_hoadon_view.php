<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Hóa Đơn: <?php echo $hd['MAHD'];?></b></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="<?php echo base_url() . 'index.php/admin/pro_edit_hd/' . $hd['MAHD'];?>">
        <div class="form">
            <table class="table">
                <tr> 
                    <td><P>Ngày hóa đơn</p></td>
                    <td><input type="date" name="ngayhd" class="form-control" value="<?php echo $hd['NGAYHD'];?>"></td>
                </tr>
                
                <tr>
                    <td><P>Mã Học Viên</p></td>
                    <td><input type="text" name="mahv" class="form-control" value="<?php echo $hd['MAHV'];?>"></td>
                </tr>
                <!-- <tr>
                    <td><P>Loại</p></td>
                    <td><select name="loai" class="form-control" value="<?php echo $hd['LOAI'];?>">
                            <option value="ONL">Học online</option>
                            <option value="OFF">Học offline</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td><P>Mã khóa học</p></td>
                    <td><select name="makh" class="form-control" >
                            <?php foreach ($kh as $row) {?>
                                <option value="<?php echo $row['MAKH'];?>" <?php if ($row['MAKH'] === $hd['MAKH']) echo "selected"?> ><?php echo $row['MAKH'];?></option>
                            <?php } ?>                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Mã khuyến mãi</p></td>
                    <td><select name="makm" class="form-control" >
                            <?php foreach ($km as $row) {?>
                                <option value="<?php echo $row['MAKM'];?>"  <?php if ($row['MAKM'] === $hd['MAKM']) echo "selected"?> ><?php echo $row['MAKM'];?></option>
                            <?php } ?>                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Check thanh toán</p></td>
                    <td>
                        <div class="check">
                            <div class="form-check"><input class="form-check-input" type="radio" name="checktt" value="1" <?php if ($hd['CHECKTT'] === "1")echo "checked";?>><label class="form-check-label">Đã thanh toán</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" name="checktt" value="0" <?php if ($hd['CHECKTT'] === "0")echo "checked";?>><label class="form-check-label">Chưa thanh toán</label></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><P>Người tạo</p></td>
                    <td><input type="text" readonly name="maad" class="form-control" value="<?php echo $hd['MAAD'];?>"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>