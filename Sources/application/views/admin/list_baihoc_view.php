<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết KHÓA HỌC: <?php echo $KH['TENKH'];?> - <?php echo $KH['GIAKH'] . "$";?></h3>
                        <br>
                        <a href = "<?php echo base_url();?>index.php/admin/chitietkh" class= "btn"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Video</th>
                    <th>Thời gian</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrBH as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href = "#"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-default" onclick="return confirm('Bạn có muốn xóa không');" href = "<?php echo base_url();?>index.php/admin/deletebh/<?php echo $row['MABH'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MABH'];?></td>
                        <td><?php echo $row['TENBAI'];?></td>
                        <td><?php echo $row['LINKVD'];?></td>
                        <td><?php echo $row['THOIGIAN'];?></td>                      
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="pagination justify-content-center">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>