<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết kHUYẾN MÃI</h3>
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
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Người tạo</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrKM as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href = "#"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-default" onclick="return confirm('Bạn có muốn xóa không');" href = "<?php echo base_url();?>index.php/admin/deletekm/<?php echo $row['MAKM'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAKM'];?></td>
                        <td><?php echo $row['TENKM'];?></td>
                        <td><?php echo $row['LINKKM'];?></td>
                        <td><?php echo $row['TIEUDEKM'];?></td>
                        <td><?php echo $row['TOMTATKM'];?></td>
                        <td><?php echo $row['TENAD'];?></td>
                        
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