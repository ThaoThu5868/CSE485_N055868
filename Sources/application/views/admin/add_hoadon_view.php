<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Hóa Đơn</b></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post" action="<?php echo base_url();?>index.php/admin/pro_themgv">
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Ngày hóa đơn</p></td>
                    <td><input type="date" name="date" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Tổng tiền</p></td>
                    <td><input type="text" name="money" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Mã Học Viên</p></td>
                    <td><input type="text" name="mahv" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Mã khóa học</p></td>
                    <td><select name="makh" class="form-control">
                            <option value="">Học Online</option>
                            <option value="">Học Offline</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Mã khuyến mãi</p></td>
                    <td><select name="makm" class="form-control">
                            <option value="">Học Online</option>
                            <option value="">Học Offline</option>
                        </select>
                    </td>
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