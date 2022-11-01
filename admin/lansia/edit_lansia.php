<?php

if (isset($_GET['kode'])) {
	// $sql_cek = "SELECT tb_penanggung.*, tb_pasien.* FROM tb_penanggung
	// 	INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_penanggung.id_pasien
	// 	WHERE tb_penanggung.id_pasien='" . $_GET['kode'] . "'";
	$sql_cek = "SELECT * from tb_pasien where id_pasien ='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID Lansia</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_lansia" name="id_lansia" placeholder="<?php if ($data_cek['rt'] != NULL) {echo "RT";}echo$data_cek['rt'];?><?php if ($data_cek['rw'] != NULL) {echo "RW";}echo$data_cek['rw'];?><?php if ($data_cek['rt'] != NULL and $data_cek['rw'] != NULL) {echo "-";}echo $data_cek['id_pasien'];?>" readonly />
					<input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $data_cek['id_pasien']; ?>" hidden readonly />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Panggilan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value="<?php echo $data_cek['nama_panggilan']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option value="-">-- Pilih jekel --</option>
						<?php
						//menhecek data yg dipilih sePanti sosialnya
						if ($data_cek['jekel'] == "Laki-laki") echo "<option value='Laki-laki' selected>Laki-laki</option>";
						else echo "<option value='Laki-laki'>Laki-laki</option>";

						if ($data_cek['jekel'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
						else echo "<option value='Perempuan'>Perempuan</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat/Tgl Lahir</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" value="<?php echo $data_cek['tempat_lh']; ?>" />
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tgl_lh" name="tgl_lh" value="<?php echo $data_cek['tgl_lh']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data_cek['pekerjaan']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option value="-">-- Pilih Status --</option>
						<?php
						//menhecek data yg dipilih sePanti sosialnya
						if ($data_cek['kawin'] == "Nikah") echo "<option value='Nikah' selected>Nikah</option>";
						else echo "<option value='Nikah'>Nikah</option>";

						if ($data_cek['kawin'] == "Tidak menikah") echo "<option value='Tidak menikah' selected>Tidak menikah</option>";
						else echo "<option value='Tidak menikah'>Tidak menikah</option>";

						if ($data_cek['kawin'] == "Janda") echo "<option value='Janda' selected>Janda</option>";
						else echo "<option value='Janda'>Janda</option>";

						if ($data_cek['kawin'] == "Duda") echo "<option value='Duda' selected>Duda</option>";
						else echo "<option value='Duda'>Duda</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT / RW</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="rt" name="rt" placeholder="" value="<?php echo $data_cek['rt']; ?>" >
				</div>
				/
				<div class="col-sm-1">
					<input type="text" class="form-control" id="rw" name="rw" placeholder="" value="<?php echo $data_cek['rw']; ?>" >
				</div>
			</div>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $data_cek['desa']; ?>"
					/>
				</div>
			</div> -->

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" value="<?php echo $data_cek['rw']; ?>"
					/>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Pos/Telepon</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?php echo $data_cek['kode_pos']; ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo $data_cek['no_telepon']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Tinggal</label>
				<div class="col-sm-3">
					<select name="tempat_tinggal" id="tempat_tinggal" class="form-control">
						<option value="Lain-lain">-- Pilih --</option>
						<?php
						//menhecek data yg dipilih sePanti sosialnya
						if ($data_cek['tempat_tinggal'] == "Rumah sendiri") echo "<option value='Rumah sendiri' selected>Rumah sendiri</option>";
						else echo "<option value='Rumah sendiri'>Rumah sendiri</option>";

						if ($data_cek['tempat_tinggal'] == "Panti sosial") echo "<option value='Panti sosial' selected>Panti sosial</option>";
						else echo "<option value='Panti sosial'>Panti sosial</option>";

						if ($data_cek['tempat_tinggal'] == "Rumah anak") echo "<option value='Rumah anak' selected>Rumah anak</option>";
						else echo "<option value='Rumah anak'>Rumah anak</option>";

						if ($data_cek['tempat_tinggal'] == "Tidak tetap") echo "<option value='Tidak tetap' selected>Tidak tetap</option>";
						else echo "<option value='Tidak tetap'>Tidak tetap</option>";

						if ($data_cek['tempat_tinggal'] == "Lain-lain") echo "<option value='Lain-lain' selected>Lain-lain</option>";
						else echo "<option value='Lain-lain'>Lain-lain</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data_cek['agama']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Suku</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="suku" name="suku" value="<?php echo $data_cek['suku']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="didik_akhir" id="didik_akhir" class="form-control">
						<option value="Tidak sekolah">-- Pilih --</option>
						<?php
						//menhecek data yg dipilih sePanti sosialnya
						if ($data_cek['didik_akhir'] == "Tidak sekolah") echo "<option value='Tidak sekolah' selected>Tidak sekolah</option>";
						else echo "<option value='Tidak sekolah'>Tidak sekolah</option>";

						if ($data_cek['didik_akhir'] == "SD") echo "<option value='SD' selected>SD</option>";
						else echo "<option value='SD'>SD</option>";

						if ($data_cek['didik_akhir'] == "SMP") echo "<option value='SMP' selected>SMP</option>";
						else echo "<option value='SMP'>SMP</option>";

						if ($data_cek['didik_akhir'] == "SMP/MTS") echo "<option value='SMP/MTS' selected>SMP/MTS</option>";
						else echo "<option value='SMP/MTS'>SMP/MTS</option>";

						if ($data_cek['didik_akhir'] == "SMA/SMK") echo "<option value='SMA/SMK' selected>SMA/SMK</option>";
						else echo "<option value='SMA/SMK'>SMA/SMK</option>";

						if ($data_cek['didik_akhir'] == "D3") echo "<option value='D3' selected>D3</option>";
						else echo "<option value='D3'>D3</option>";

						if ($data_cek['didik_akhir'] == "S1") echo "<option value='S1' selected>S1</option>";
						else echo "<option value='S1'>S1</option>";

						if ($data_cek['didik_akhir'] == "S2") echo "<option value='S2' selected>S2</option>";
						else echo "<option value='S2'>S2</option>";

						if ($data_cek['didik_akhir'] == "S3") echo "<option value='S3' selected>S3</option>";
						else echo "<option value='S3'>S3</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan Darah</label>
				<div class="col-sm-3">
					<select name="gol_d" id="gol_d" class="form-control">
						<option value="-">-- Pilih --</option>
						<?php
						//menhecek data yg dipilih sePanti sosialnya
						if ($data_cek['gol_d'] == "A") echo "<option value='A' selected>A</option>";
						else echo "<option value='A'>A</option>";

						if ($data_cek['gol_d'] == "B") echo "<option value='B' selected>B</option>";
						else echo "<option value='B'>B</option>";

						if ($data_cek['gol_d'] == "AB") echo "<option value='AB' selected>AB</option>";
						else echo "<option value='AB'>AB</option>";

						if ($data_cek['gol_d'] == "O") echo "<option value='O' selected>O</option>";
						else echo "<option value='O'>O</option>";

						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hobi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $data_cek['hobi']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jaminan Kesehatan</label>
				<!-- <div class="col-sm-3">
					<select name="tempat-tinggal" id="tempat-tinggal" class="form-control"> 
						<option>- Pilih -</option>
						<option>BPJS</option>
						<option>Asuransi lain</option> 
					</select> 
					<input type="text" class="form-control" name="angka" placeholder="Nomor BPJS / Asuransi lain">
				</div>
				<div class="col-sm-3">
					<script>
						function hanyaAngka(event) {
							var angka = (event.which) ? event.which : event.keyCode
							if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
								return false;
							return true;
						}
					</script>
					<input type="text" class="form-control" name="angka" placeholder="Nomor BPJS / Asuransi lain" onkeypress="return hanyaAngka(event)" required>
				</div>  -->
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">BPJS</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="bpjs" name="bpjs" value="<?php echo $data_cek['bpjs']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Asuransi Lain</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="asuransi_lain" name="asuransi_lain" value="<?php echo $data_cek['asuransi_lain']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sumber Dana (Biaya Hidup)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sumber_dn" name="sumber_dn" value="<?php echo $data_cek['sumber_dn']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-3">
					<select name="status" id="status" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
						//menhecek data yg dipilih sePanti sosialnya
						// if ($data_cek['status'] == "Ada") echo "<option value='Ada' selected>Ada</option>";
						// else echo "<option value='Ada'>Ada</option>";
						if ($data_cek['status'] == "Sehat") echo "<option value='Sehat' selected>Sehat</option>";
						else echo "<option value='Sehat'>Sehat</option>";
						if ($data_cek['status'] == "Kurang Sehat") echo "<option value='Kurang Sehat' selected>Kurang Sehat</option>";
						else echo "<option value='Kurang Sehat'>Kurang Sehat</option>";
						if ($data_cek['status'] == "Sakit") echo "<option value='Sakit' selected>Sakit</option>";
						else echo "<option value='Sakit'>Sakit</option>";
						if ($data_cek['status'] == "Meninggal") echo "<option value='Meninggal' selected>Meninggal</option>";
						else echo "<option value='Meninggal'>Meninggal</option>";
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=view-lansia&kode=<?php echo $data_cek['id_pasien']; ?>" title="Kembali" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>

<?php
$id_lan = $_GET['kode']; 
if (isset($_POST['Ubah'])) {
	$sql_ubah =
		"UPDATE tb_pasien SET 
		nik='" . $_POST['nik'] . "',
		nama='" . $_POST['nama'] . "',
		nama_panggilan='" . $_POST['nama_panggilan'] . "',
		jekel='" . $_POST['jekel'] . "',
		tempat_lh='" . $_POST['tempat_lh'] . "',
		tgl_lh='" . $_POST['tgl_lh'] . "',
		pekerjaan='" . $_POST['pekerjaan'] . "',
		kawin='" . $_POST['kawin'] . "',
		alamat='" . $_POST['alamat'] . "',
		rt='" . $_POST['rt'] . "',
		rw='" . $_POST['rw'] . "',
		kode_pos='" . $_POST['kode_pos'] . "',
		no_telepon='" . $_POST['no_telepon'] . "',
		tempat_tinggal='" . $_POST['tempat_tinggal'] . "',
		no_telepon='" . $_POST['no_telepon'] . "',
		agama='" . $_POST['agama'] . "',
		suku='" . $_POST['suku'] . "',
		didik_akhir='" . $_POST['didik_akhir'] . "',
		gol_d='" . $_POST['gol_d'] . "',
		hobi='" . $_POST['hobi'] . "',
		bpjs='" . $_POST['bpjs'] . "',
		asuransi_lain='" . $_POST['asuransi_lain'] . "',
		sumber_dn='" . $_POST['sumber_dn'] . "',
		status='" . $_POST['status'] . "'
		WHERE id_pasien='" . $_POST['id_pasien'] . "'";

	$query_ubah = mysqli_query($koneksi, $sql_ubah) 
	or trigger_error("Query Failed! SQL: $sql_ubah - Error: " . mysqli_error($koneksi), E_USER_ERROR);
	mysqli_close($koneksi);
	// }

	if ($query_ubah) {
		echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = '?page=view-lansia&kode=$id_lan';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = '?page=view-lansia&kode=$id_lan';
        }
      })</script>";
	}
}
?>