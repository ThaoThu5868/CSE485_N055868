<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Khóa Học: <?php echo $KH['TENKH'];?> </b></h4>
        <h4 class="text-center"><b>Sửa Khóa Học:  <?php echo $bh['MABH'];?></b></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post"  action="<?php echo base_url() . 'index.php/admin/pro_edit_bh/' . $KH['MAKH'] . '/' . $bh['MABH'];?> ">
        <div class="form"> 
            <table class="table">
                <tr>
                    <td><P>Tên bài học</p></td>
                    <td><input type="text" name="ten" class="form-control" value="<?php echo $bh['TENBAI'];?>"></td>
                </tr>
                <tr>
                    <td><P>Video</p></td>
                    <td><input type="text" name="link" class="form-control" value="<?php echo $bh['LINKVD'];?>"></td>
                </tr>
                <tr>
                    <td><P>Thời gian</p></td>
                    <td><input type="text" name="thoigian" class="form-control" value="<?php echo $bh['THOIGIAN'];?>"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
<?php echo validation_errors();?>

