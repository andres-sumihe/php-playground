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
			<table border="1">
				<tr class="row title">
					<td colspan="2" style="text-align: center;">Data Pendaftar</td>
				</tr>
				<tr class="row name">
					<td class="label">Nama</td>
					<td class="input"><?php echo $_POST["name"]?></td>
				</tr>
				<tr class="row address">
					<td class="label">Alamat</td>
					<td class="input" ><?php echo $_POST["address"]?></td>
				</tr>
				<tr class="row gender">
					<td class="label">Jenis Kelamin</td>
					<td class="input"><?php echo $_POST["gender"]?></td>
				</tr>
				<tr class="row jobs">
					<td class="label">Pekerjaan</td>
					<td class="input"><?php echo $_POST["jobs"]?></td>
				</tr>
			</table>
		</div>
	</center>
</body>
</html>