
<h3 class="tieudesuaadmin" ><b> SỬA THÔNG TIN ADMIN T&T MAKE UP </b></h3>

<form method="post" action="<?php echo base_url() . 'index.php/admin/pro_edit_admin/' . $ad['MAAD'];?>">
	<div class="container dangky">
		<div class="form"> 
			<table class="table">
				<tr>
					<td><P>Tên đăng nhập</p></td>
					<td><input type="text" name="tendn" class="form-control" value="<?php echo $ad['TENDNAD'];?>"></td>
				</tr>
				<tr>
					<td><P>Họ Tên</p></td>
					<td><input type="text" name="ten" class="form-control" value="<?php echo $ad['TENAD'];?>"></td>
				</tr>
				<tr>
					<td><P>Ngày sinh</p></td>
					<td><input type="date" name="ngaysinh" class="form-control" value="<?php echo $ad['NGAYSINHAD'];?>"></td>
				</tr>
				<tr>
					<td><P>Địa chỉ</p></td>
					<td><input type="text" name="diachi" class="form-control" value="<?php echo $ad['DIACHIAD'];?>"></td>
				</tr>
				<tr>
					<td><P>Số điện thoại</p></td>
					<td><input type="text" name="sdt" class="form-control" value="<?php echo $ad['SDTAD'];?>"></td>
				</tr>
				<tr>
					<td><P>Email</p></td>
					<td><input type="text" name="email" class="form-control" value="<?php echo $ad['EMAILAD'];?>"></td>
				</tr>
				<tr>
					<td><P>Mật khẩu</p></td>
					<td><input type="text" name="pass" class="form-control" value="<?php echo $ad['PASSAD'];?>"></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3 form-group pull-right">
			<input type="submit" name="ok" value="Lưu thông tin" class="btn btn-primary btn-block">
		</div>
	</div>
	
</form>

<?php echo validation_errors();?>