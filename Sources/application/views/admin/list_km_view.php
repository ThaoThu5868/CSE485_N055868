<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết khuyến mãi</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Hình ảnh</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrKM as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAKM'];?></td>
                        <td><?php echo $row['TENKM'];?></td>
                        <td><?php echo $row['TIEUDEKM'];?></td>
                        <td><?php echo $row['TOMTATKM'];?></td>
                        <td><?php echo $row['LINKKM'];?></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="list123"> -->
            <?php //echo $this->pagination->create_links();?>
        </div>
    </div>
</div>