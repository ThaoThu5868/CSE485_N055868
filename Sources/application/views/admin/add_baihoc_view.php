<div class="content">
    <div class="col-md-6 add-dm">
        <h3 class="text-center"><b>Khóa Học: <?php echo $KH['TENKH'];?> </b></h3>
        <h3 class="text-center"><b>Thêm Bài Học</b></h3>
    </div>
    <div class="clearfix"></div>
    <form method="post"  action="<?php echo base_url() . 'index.php/admin/pro_thembh/' . $KH['MAKH'];?> ">
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên bài học</p></td>
                    <td><input type="text" name="ten" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Video</p></td>
                    <td><input type="text" name="link" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Thời gian</p></td>
                    <td><input type="text" name="thoigian" class="form-control"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>