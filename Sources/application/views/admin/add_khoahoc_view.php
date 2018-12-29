<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Khóa Học</b></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post"  action="<?php echo base_url();?>index.php/admin/pro_themkh">
        <div class="form">
            <table class="table">
                <!-- <tr>
                    <td><p>Loại khóa học</p></td>
                    <td><select name="cat" class="form-control">
                            <option value="">Học Online</option>
                            <option value="">Học Offline</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td><P>Loại</p></td>
                    <td><input type="text" name="loai" class="form-control"></td>
                </tr>
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
                    <td><input type="number" name="gia" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="text" name="link" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Người tạo</p></td>
                    <td><input type="text" name="maad" class="form-control"></td>
                </tr>
                
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>