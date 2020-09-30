<!DOCTYPE html>
<html>
<head>
	<title>Nomor 1</title>
	<style>
		td {
			padding: 5px;
		}
		.row.name {background-color: #8cd1ff;}
		.row.address {background-color: #c9eaff;}
		.row.gender {background-color: #8cd1ff;}
		.row.jobs {background-color: #c9eaff;}
		.row.submit {background-color: #0398fc;}
		.row.title {background-color: #0398fc;}
	</style>
</head>
<body>
	<center>
		<div class="container">
			<form method="post" action="halaman2.php">
				<table border="1">
					<tr class="row title">
						<td colspan="2" >Form Pendaftaran</td>
					</tr>
					<tr class="row name">
						<td class="label">Nama</td>
						<td class="input"><input type="text" name="name"></td>
					</tr>
					<tr class="row address">
						<td class="label">Alamat</td>
						<td class="input" ><input type="text" name="address"></td>
					</tr>
					<tr class="row gender">
						<td class="label">Jenis Kelamin</td>
						<td class="input">
							<input type="radio" name="gender" value="Pria">Pria <br>
							<input type="radio" name="gender" value="Wanita">Wanita
						</td>
					</tr>
					<tr class="row jobs">
						<td class="label">Pekerjaan</td>
						<td class="input">
							<select name="jobs">
								<option value="Pelajar">Pelajar</option>
								<option value="Mahasiswa">Mahasiswa</option>
								<option value="Pegawai">Pegawai</option>
								<option value="Wiraswasta">Wiraswasta</option>
							</select>
						</td>
					</tr>
					<tr class="row submit">
						<td colspan="2" class="input">
							<center>
								<input type="submit" name="submit" value="Kirim">
							</center>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>