<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_pasien where id_pasien ='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
$id_pas = $data_cek['id_pasien'];
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-user"></i> Detail Lansia
		</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>

	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					<td style="width: 150px">
						<b>NIK</b>
					</td>
					<td>:
						<?php echo $data_cek['nik']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama</b>
					</td>
					<td>:
						<?php echo $data_cek['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama Panggilan</b>
					</td>
					<td>:
						<?php echo $data_cek['nama_panggilan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>TTL</b>
					</td>
					<td>:
						<?php echo $data_cek['tempat_lh'];
						if ($data_cek['tempat_lh'] != NULL and $data_cek['tgl_lh'] != NULL) {
							echo ",";
						}
						?>
						<?php

						echo $data_cek['tgl_lh']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jenis Kelamin</b>
					</td>
					<td>:
						<?php echo $data_cek['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Alamat</b>
					</td>
					<td>:
						<?php
						if ($data_cek['rt'] != NULL) {
							echo "RT";
						}
						?> <?php echo $data_cek['rt']; ?>
						<?php
						if ($data_cek['rw'] != NULL) {
							echo "RW";
						}
						?> <?php echo $data_cek['rw']; ?><?php
														if ($data_cek['rt'] != NULL and $data_cek['rw'] != NULL and $data_cek['alamat'] != NULL) {
															echo ",";
														}
														?>
						<?php echo $data_cek['alamat']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Agama</b>
					</td>
					<td>:
						<?php echo $data_cek['agama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status Kawin</b>
					</td>
					<td>:
						<?php echo $data_cek['kawin']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Pekerjaan</b>
					</td>
					<td>:
						<?php echo $data_cek['pekerjaan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Golongan Darah</b>
					</td>
					<td>:
						<?php echo $data_cek['gol_d']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Hobi</b>
					</td>
					<td>:
						<?php echo $data_cek['hobi']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jaminan Kesehatan</b>
					</td>
					<td>:
						<?php if ($data_cek['bpjs'] != NULL) {
							echo "BPJS ";
						}
						echo $data_cek['bpjs'];
						echo $data_cek['asuransi_lain']
						?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Sumber Dana</b>
					</td>
					<td>:
						<?php echo $data_cek['sumber_dn']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status</b>
					</td>
					<td>:
						<?php echo $data_cek['status']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Skor IADL Lawton</b>
					</td>
					<?php
					$total_skor = "Belum diisi";
					$insert_l = "INSERT INTO tb_iadl_lawton (id_pasien) VALUES ('" . $_GET['kode'] . "')";

					if (isset($_GET['kode'])) {
						$sql_cek = "SELECT * from tb_iadl_lawton where id_pasien ='" . $_GET['kode'] . "'";
						$query_cek = mysqli_query($koneksi, $sql_cek);
						$data_cek_l = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
					}
					?>

					<?php if ($data_cek_l != NULL) { $view_l = $data_cek_l['id_pasien'];
					?>

						<?php
						$no1 = $data_cek_l['no1_lawton'];
						if ($no1 == "Tidak bisa menggunakan telepon sama sekali" or $no1 == NULL) {
							$no1 = 0;
						} else $no1 = 1;

						$no2 = $data_cek_l['no2_lawton'];
						if ($no2 == "Tidak melakukan perjalanan sama sekali" or $no2 == "Perjalanan menggunakan transportasi umum jika ada yang menyertai" or $no2 == NULL) {
							$no2 = 0;
						} else $no2 = 1;

						$no3 = $data_cek_l['no3_lawton'];
						if ($no3 == "Mengatur semua kebutuhan belanja sendiri") {
							$no3 = 1;
						} else $no3 = 0;

						$no4 = $data_cek_l['no4_lawton'];
						if ($no4 == "Merencanakan, menyiapkan, dan menghidangkan makanan") {
							$no4 = 1;
						} else $no4 = 0;

						$no5 = $data_cek_l['no5_lawton'];
						if ($no5 == "Tidak berpartisipasi dalam perawatan rumah" or $no5 == NULL) {
							$no5 = 0;
						} else $no5 = 1;

						$no6 = $data_cek_l['no6_lawton'];
						if ($no6 == "Semua pakaian dicuci oleh orang lain" or $no6 == NULL) {
							$no6 = 0;
						} else $no6 = 1;

						$no7 = $data_cek_l['no7_lawton'];
						if ($no7 == "Tidak mampu menyiapkan obat sendiri" or $no7 == NULL) {
							$no7 = 0;
						} else $no7 = 1;

						$no8 = $data_cek_l['no8_lawton'];
						if ($no8 == "Tidak mampu mengambil keputusan finansial atau memegang uang" or $no8 == NULL) {
							$no8 = 0;
						} else $no8 = 1;
						?>
					<?php } ?>
					<td>: <font style="margin-right: 30px;"> <?php if ($data_cek_l == null) {echo $total_skor;}else{$total_skor = array($no1, $no2, $no3, $no4, $no5, $no6, $no7, $no8);
																echo array_sum($total_skor); }?></font>
						<a href="<?php if ($data_cek_l == null) {echo "?page=insert-lawton&kode=$id_pas";}else{echo "?page=view-lawton&kode=$view_l"; }?>" title="Lihat detail" class="btn btn-info btn-sm">
							<i class="fa fa-eye"></i>
						</a>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Skor ADL Barthel</b>
					</td>
					<?php
					$total_skor_b = "Belum diisi";
					if (isset($_GET['kode'])) {
						$sql_cek = "SELECT * from tb_adl_barthel where id_pasien ='" . $_GET['kode'] . "'";
						$query_cek = mysqli_query($koneksi, $sql_cek);
						$data_cek_b = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
					}
					?>
					<?php if ($data_cek_b != NULL) {$view_b = $data_cek_b['id_pasien'];
					
					?>

						<?php
						$no1b = $data_cek_b['no1_barthel'];
						if ($no1b == "Terkendali/teratur") {
							$no1b = 2;
						} elseif ($no1b == "Kadang-kadang tak terkendali (1x/minggu)") {
							$no1b = 1;
						} else $no1b = 0;

						$no2b = $data_cek_b['no2_barthel'];
						if ($no2b == "Mandiri") {
							$no2b = 2;
						} elseif ($no1b == "Kadang-kadang tak terkendali (hanya 1x/24jam)") {
							$no2b = 1;
						} else $no2b = 0;

						$no3b = $data_cek_b['no3_barthel'];
						if ($no3b == "Mandiri") {
							$no3b = 1;
						} else $no3b = 0;

						$no4b = $data_cek_b['no4_barthel'];
						if ($no4b == "Mandiri") {
							$no4b = 2;
						} elseif ($no4b == "Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain") {
							$no4b = 1;
						} else $no4b = 0;

						$no5b = $data_cek_b['no5_barthel'];
						if ($no5b == "Mandiri") {
							$no5b = 2;
						} elseif ($no5b == "Perlu ditolong memotong makanan") {
							$no5b = 1;
						} else $no5b = 0;

						$no6b = $data_cek_b['no6_barthel'];
						if ($no6b == "Mandiri") {
							$no6b = 3;
						} elseif ($no6b == "Bantuan minimal 1 orang") {
							$no6b = 2;
						} elseif ($no6b == "Perlu banyak bantuan untuk bisa duduk (2 orang)") {
							$no6b = 1;
						} else $no6b = 0;

						$no7b = $data_cek_b['no7_barthel'];
						if ($no7b == "Mandiri") {
							$no7b = 3;
						} elseif ($no7b == "Berjalan dengan bantuan 1 orang") {
							$no7b = 2;
						} elseif ($no7b == "Bisa (pindah) dengan kursi roda") {
							$no7b = 1;
						} else $no7b = 0;

						$no8b = $data_cek_b['no8_barthel'];
						if ($no8b == "Mandiri") {
							$no8b = 2;
						} elseif ($no8b == "Sebagian dibantu (misal mengancing baju)") {
							$no8b = 1;
						} else $no8b = 0;

						$no9b = $data_cek_b['no9_barthel'];
						if ($no9b == "Mandiri") {
							$no9b = 2;
						} elseif ($no9b == "Butuh pertolongan") {
							$no9b = 1;
						} else $no9b = 0;

						$no10b = $data_cek_b['no10_barthel'];
						if ($no10b == "Mandiri") {
							$no10b = 1;
						} else $no10b = 0;
						?>
					<?php } ?>
					<td>: <font style="margin-right: 30px;"> <?php if ($data_cek_b == null) {echo $total_skor_b;}else{$total_skor_b = array($no1b, $no2b, $no3b, $no4b, $no5b, $no6b, $no7b, $no8b, $no9b, $no10b);
																echo array_sum($total_skor_b); }?>
						</font><a href="<?php if ($data_cek_b == null) {echo "?page=insert-barthel&kode=$id_pas";}else{echo "?page=view-barthel&kode=$view_b"; }?>" title="Lihat detail" class="btn btn-info btn-sm">
							<i class="fa fa-eye"></i>
						</a>
					</td>
				</tr>

			</tbody>
		</table>
		<div class="card-footer">
		<?php
		if ($data_level == "Administrator") {
		?>
			<a href="?page=edit-lansia&kode=<?php echo $data_cek['id_pasien']; ?>" title="Ubah" class="btn btn-success">Ubah</a>
			<a href="?page=data-lansia" class="btn btn-secondary">Kembali</a>
			<?php
		} elseif ($data_level == "User") {
		?>
			<a href="?page=data-lansia" class="btn btn-secondary">Kembali</a>
			<?php }?>
		</div>
	</div>
</div>