<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Giảng Viên:  <?php echo $gv['MAGV'];?></b></h4>
    </div>
    <div class="clearfix"></div>
    <?php echo form_open_multipart('/admin/pro_edit_gv/' . $gv['MAGV']); ?>
        <div class="form">
            <table class="table">
                <tr>
                    <td><p>Họ Tên</p></td>
                    <td><input type="text" name="ten" class="form-control" value="<?php echo $gv['TENGV'];?>"></td>
                </tr>
                <tr>
                    <td><p>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control" value="<?php echo $gv['LINKGV'];?>"></td>
                </tr>
                <tr>
                    <td><p>Tiêu đề</p></td>
                    <td><input type="text" name="tieude" class="form-control" value="<?php echo $gv['TIEUDEGV'];?>"></td>
                </tr>
                <tr>
                    <td><p>Tóm tắt</p></td>
                    <td><textarea name="tomtat" class="form-control" id="" cols="30" rows="5"><?php echo $gv['TOMTATGV'];?></textarea></td>
                </tr>
                <tr>
                    <td><p>Nội dung</p></td>
                    <td><textarea name="noidung" class="form-control" id="" cols="30" rows="10"><?php echo $gv['NOIDUNGGV'];?></textarea></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>