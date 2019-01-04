<h3 ><b> ĐĂNG KÝ HỌC VIÊN T&T MAKE UP </b></h3>

<form method="post" action="<?php echo base_url();?>index.php/dangki/pro_themhv">
	<div class="container dangky">
		<div class="form">
			<table class="table">
				<tr>
					<td><P>Họ Tên</p></td>
					<td><input type="text" name="ten" class="form-control"></td>
				</tr>
				<tr>
					<td><P>Ngày sinh</p></td>
					<td><input type="date" name="ngaysinh" class="form-control"></td>
				</tr>
				<tr>
					<td><P>Địa chỉ</p></td>
					<td><input type="text" name="diachi" class="form-control"></td>
				</tr>
				<tr>
					<td><P>Số điện thoại</p></td>
					<td><input type="text" name="sdt" class="form-control"></td>
				</tr>
				<tr>
					<td><P>Email</p></td>
					<td><input type="text" name="email" class="form-control"></td>
				</tr>
				<tr>
					<td><P>Ngày đăng ký</p></td>
					<td><input type="date" value="" name="trn" class="form-control"></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3 form-group pull-right">
			<input type="submit" name="ok" value="Đăng Ký" class="btn btn-primary btn-block">
		</div>
	</div>
	
</form>

<?php echo validation_errors();?>