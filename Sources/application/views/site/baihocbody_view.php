

<!-- 
  <link rel="stylesheet" href="../../../assets/css/showYtVideo.css"> -->
  <!--Đường dẫn-->
  <div class="container path"  >
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/trangchu/tchu" style="color:#df4c40"><strong>Trang chủ</strong></a></li>
      <li class="breadcrumb-item"><a><span>Khoá học</span></a></li>
      <li class="breadcrumb-item"><a><span>Bài học</span></a></li>
    </ol>
  </div>
  <!--Nội dung chính-->
  <div class="me-body"> 
    <div class="container">
      <div class="row">
        <!--Nội dung giới thiệu-->
        <div class="col-sm-8" style="background-color:white;">
          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
               <div class="col col-xs-6">   
                 <h3 class="panel-title">Nội dung KHOÁ HỌC: <?php echo $KH['TENKH'];?> - <?php echo $KH['GIAKH'] . "VND";?></h3>
                 <pre>
                 </pre>
                 <h6><strong>Hãy nhấn "Đăng Ký" và cập nhật thông tin cá nhân để được hưởng chế độ chăm sóc tốt nhất</strong></h6>
               </div>
             </div>
           </div>
         </div>
         <div class="panel-body">
          <table class="table table-striped table-bordered table-list">
            <thead>
              <tr>
                <th>Tên Bài</th>
                <th>Video</th>
                <th>Thời gian</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($arrBH as $row){?>
                <tr class="w3-animate-left">                                               
                  <td><?php echo $row['TENBAI'];?></td>
                  <td><a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Học Thử</a>
                    <div class="modal fade" id="modal-id">
                      <div class="modal-dialog" style="    display: block; max-width: 599px !important;">
                        <div class="modal-content">
                          <div class="modal-header">
                          </div>
                          <div class="modal-body">
                            <iframe width="560" height="315" <?php echo $row['LINKVD']?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
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



