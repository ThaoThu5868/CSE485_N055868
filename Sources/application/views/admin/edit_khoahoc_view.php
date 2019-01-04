<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Khóa Học: <?php echo $kh['MAKH'];?></b></h4>
    </div>
    <div class="clearfix"></div>
    <?php echo form_open_multipart('/admin/pro_edit_kh/' . $kh['MAKH']); ?>
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên</p></td>
                    <td><input type="text" name="ten" class="form-control" value="<?php echo $kh['TENKH'];?>"></td>
                </tr>
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td><input type="text" name="tieude" class="form-control" value="<?php echo $kh['TIEUDEKH'];?>"></td>
                </tr>
                <tr>
                    <td><P>Tóm tắt</p></td>
                    <td><textarea name="tomtat" class="form-control" id="" cols="30" rows="10"><?php echo $kh['TOMTATKH'];?></textarea></td>
                </tr>
                <tr>
                    <td><P>Giá</p></td>
                    <td><input type="text" name="gia" class="form-control" value="<?php echo $kh['GIAKH'];?>"></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control" value="<?php echo $kh['LINKKH'];?>"></td>
                </tr>
                <tr>
                    <td><P>Người tạo</p></td>
                    <td><input type="text" readonly name="maad" class="form-control" value="<?php echo $kh['MAAD'];?>"></td>
                </tr>
                
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>