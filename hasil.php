<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA</title>
</head>
<body>
 
	<center>
 
		<h2>CETAK PRINT DATA SISWA</h2>
 
 
		<?php 
		include 'koneksi.php';
		?>
 
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nomor Pendaftaran</th>
				<th>Nomor Tes</th>
				<th>Jalur Masuk</th>
                <th>Nama Lengkap</th>
				<th>Nama Panggilan</th>
				<th>Jenis Kelamin</th>
				<th>Tempat</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Cita Cita</th>
				<th>Hoby</th>
				<th>Anak Ke</th>
				<th>Kandung</th>
				<th>Tiri</th>
				<th>Angkat</th>
				<th>Berat Badan</th>
				<th>Tinggi Badan</th>
				<th>Golongan Darah</th>
				<th>Alamat</th>
				<th>Kelurahan</th>
				<th>Kecamatan</th>
				<th>Kabupaten Kota</th>
				<th>provinsi</th>
				<th>Kode Pos</th>
				<th>Nomor Telepon</th>
				<th>Email</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from data_siswa");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['no_pendaftaran']; ?></td>
				<td><?php echo $data['no_tes']; ?></td>
				<td><?php echo $data['jalur_masuk']; ?></td>
				<td><?php echo $data['nama_lengkap']; ?></td>
				<td><?php echo $data['nama_panggilan']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['tempat']; ?></td>
				<td><?php echo $data['tanggal_lahir']; ?></td>
				<td><?php echo $data['agama']; ?></td>
				<td><?php echo $data['cita_cita']; ?></td>
				<td><?php echo $data['hoby']; ?></td>
				<td><?php echo $data['anak_ke']; ?></td>
				<td><?php echo $data['kandung']; ?></td>
				<td><?php echo $data['tiri']; ?></td>
				<td><?php echo $data['angkat']; ?></td>
				<td><?php echo $data['berat_badan']; ?></td>
				<td><?php echo $data['tinggi_badan']; ?></td>
				<td><?php echo $data['golongan_darah']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['kelurahan']; ?></td>
				<td><?php echo $data['kecamatan']; ?></td>
				<td><?php echo $data['kabupaten_kota']; ?></td>
				<td><?php echo $data['provinsi']; ?></td>
				<td><?php echo $data['kode_pos']; ?></td>
				<td><?php echo $data['no_telepon_rumah']; ?></td>
				<td><?php echo $data['email']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
 
		<br/>
 
		<a href="cetak.php" target="_blank">CETAK</a>
 
 
	</center>
</body>
</html>