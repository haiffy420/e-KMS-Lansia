<!-- <?php
if (isset($_GET['kode'])) {
	// $sql_cek = "SELECT tb_penanggung.*, tb_pasien.* FROM tb_penanggung
	// 	INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_penanggung.id_pasien
	// 	WHERE tb_penanggung.id_pasien='" . $_GET['kode'] . "'";
	$sql_cek_p = "SELECT * from tb_penanggung where id_penanggung ='" . $_GET['kode'] . "'";
// 	$sql_cek_p = "SELECT tb_penanggung.* from tb_penanggung,tb_pasien where tb_penanggung.id_pasien=tb_pasien.id_pasien";
	$query_cek_p = mysqli_query($koneksi, $sql_cek_p);
	$data_cek_p = mysqli_fetch_array($query_cek_p, MYSQLI_BOTH);
}
?> -->
<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT tb_penanggung.*,tb_pasien.nama from tb_penanggung,tb_pasien where id_penanggung ='" . $_GET['kode'] . "' AND tb_pasien.id_pasien=tb_penanggung.id_pasien";
	$query_cek_p = mysqli_query($koneksi, $sql_cek);
	$data_cek_p = mysqli_fetch_array($query_cek_p, MYSQLI_BOTH);
}
?>
<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Penanggung Lansia
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<!-- <label class="col-sm-2 col-form-label">No Sistem</label> -->
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_penanggung" name="id_penanggung" value="<?php echo $data_cek_p['id_penanggung']; ?>" readonly hidden />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penanggung</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_penanggung" name="nama_penanggung" value="<?php echo $data_cek_p['nama_penanggung']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lansia</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek_p['nama']; ?>" readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hubungan dengan Lansia</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hub_lansia" name="hub_lansia" value="<?php echo $data_cek_p['hub_lansia']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat_p" name="alamat_p" value="<?php echo $data_cek_p['alamat_p']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Pos/Telepon</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="kode_pos_p" name="kode_pos_p" value="<?php echo $data_cek_p['kode_pos_p']; ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="no_telepon_p" name="no_telepon_p" value="<?php echo $data_cek_p['no_telepon_p']; ?>">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=penanggung&kode=<?php echo $data_cek_p['id_penanggung']; ?>" title="Kembali" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Ubah'])) {
	$sql_ubah =
		"UPDATE tb_penanggung SET 
		nama_penanggung='" . $_POST['nama_penanggung'] . "',
		hub_lansia='" . $_POST['hub_lansia'] . "',	
		alamat_p='" . $_POST['alamat_p'] . "',
		kode_pos_p='" . $_POST['kode_pos_p'] . "',
		no_telepon_p='" . $_POST['no_telepon_p'] . "'
		WHERE id_penanggung='" . $_POST['id_penanggung'] . "'";

	$query_ubah = mysqli_query($koneksi, $sql_ubah);
// 	or trigger_error("Query Failed! SQL: $sql_ubah - Error: " . mysqli_error($koneksi), E_USER_ERROR);
	mysqli_close($koneksi);


	if ($query_ubah) {
		echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = '';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = '';
        }
      })</script>";
	}
}
?>