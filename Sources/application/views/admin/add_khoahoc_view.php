<div class="content">
    <div class="col-md-6 add-dm">
        <h3 class="text-center"><b>Thêm Khóa Học</b></h3>
    </div>
    <div class="clearfix"></div>
    <?php echo form_open_multipart('/admin/pro_themkh'); ?>  
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên</p></td>
                    <td><input type="text" name="ten" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td><input type="text" name="tieude" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Tóm tắt</p></td>
                    <td><textarea name="tomtat" class="form-control" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><P>Giá</p></td>
                    <td><input type="text" name="gia" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control"></td>
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