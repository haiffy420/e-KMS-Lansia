<?php
include "inc/koneksi.php";
?>
<div class="card card-info ">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pasien
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pasien</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pasien" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Panggilan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="Nama Panggilan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option value="-">- Pilih -</option>
						<option>Laki-laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat/Tgl Lahir</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" value="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option value="-">- Pilih -</option>
						<option>Nikah</option>
						<option>Tidak menikah</option>
						<option>Janda</option>
						<option>Duda</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT / RW</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="rt" name="rt" placeholder="" value="" required>
				</div>
				/
				<div class="col-sm-1">
					<input type="text" class="form-control" id="rw" name="rw" placeholder="" value="" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Pos/Telepon</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Telepon/Fax/HP">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Tinggal</label>
				<div class="col-sm-3">
					<select name="tempat_tinggal" id="tempat_tinggal" class="form-control">
						<option value="Lain-lain">- Pilih -</option>
						<option>Rumah sendiri</option>
						<option>Panti sosial</option>
						<option>Rumah anak</option>
						<option>Tidak tetap</option>
						<option value="Lain-lain">Lain-lain</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Suku</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="suku" name="suku" placeholder="Suku">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="didik_akhir" id="didik_akhir" class="form-control">
						<option value="Tidak sekolah">- Pilih -</option>
						<option>Tidak sekolah</option>
						<option>SD</option>
						<option>SMP/MTS</option>
						<option>SMA/SMK</option>
						<option>D3</option>
						<option>S1</option>
						<option>S2</option>
						<option>S3</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No KTP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan No KTP">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan Darah</label>
				<div class="col-sm-3">
					<select name="gol_d" id="gol_d" class="form-control">
						<option value="-">- Pilih -</option>
						<option>A</option>
						<option>B</option>
						<option>O</option>
						<option>AB</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hobi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hobi" name="hobi" placeholder="Masukkan Hobi">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jaminan Kesehatan</label>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">BPJS</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="bpjs" name="bpjs" placeholder="Masukkan Nomor BPJS">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Asuransi Lain</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="asuransi_lain" name="asuransi_lain" placeholder="Masukkan Nama dan Nomor Asuransi (contoh: Sinarmas 1234567890)">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sumber Dana (Biaya Hidup)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sumber_dn" name="sumber_dn" placeholder="Sumber dana">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-3">
					<select name="status" id="status" class="form-control">
						<option value="">- Pilih -</option>
						<option>Sehat</option>
						<option>Kurang Sehat</option>
						<option>Sakit</option>
						<!-- <option>Meninggal</option> -->
					</select>
				</div>
			</div>

		</div>

		<div class="card-body">
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fa fa-edit"></i> Instrumental Aktivitas Kehidupan Sehari-Hari Lawton
					</h3>
				</div>
			</div>

			<label class="col-form-label">1. Dapat menggunakan telepon</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios1" value="Mengoperasikan telepon sendiri, mencari dan menghubungi nomor">
				<label class="form-check-label" for="exampleRadios1">
					Mengoperasikan telepon sendiri, mencari dan menghubungi nomor (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios2" value="Menghubungi beberapa nomor yang diketahui">
				<label class="form-check-label" for="exampleRadios2">
					Menghubungi beberapa nomor yang diketahui (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios3" value="Menjawab telepon tetapi tidak menghubungi">
				<label class="form-check-label" for="exampleRadios3">
					Menjawab telepon tetapi tidak menghubungi (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios4" value="Tidak bisa menggunakan telepon sama sekali">
				<label class="form-check-label" for="exampleRadios4">
					Tidak bisa menggunakan telepon sama sekali (skor : 0)
				</label>
			</div>

			<label class="col-form-label">2. Mampu pergi ke suatu tempat</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios5" value="Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri">
				<label class="form-check-label" for="exampleRadios5">
					Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios6" value="Mengatur perjalanan sendiri">
				<label class="form-check-label" for="exampleRadios6">
					Mengatur perjalanan sendiri (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios7" value="Perjalanan menggunakan transportasi umum jika ada yang menyertai">
				<label class="form-check-label" for="exampleRadios7">
					Perjalanan menggunakan transportasi umum jika ada yang menyertai (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios8" value="Tidak melakukan perjalanan sama sekali">
				<label class="form-check-label" for="exampleRadios8">
					Tidak melakukan perjalanan sama sekali (skor : 0)
				</label>
			</div>

			<label class="col-form-label">3. Dapat berbelanja</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios9" value="Mengatur semua kebutuhan belanja sendiri">
				<label class="form-check-label" for="exampleRadios9">
					Mengatur semua kebutuhan belanja sendiri (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios10" value="Perlu bantuan untuk mengantar belanja">
				<label class="form-check-label" for="exampleRadios10">
					Perlu bantuan untuk mengantar belanja (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios11" value="Sama sekali tidak mampu belanja">
				<label class="form-check-label" for="exampleRadios11">
					Sama sekali tidak mampu belanja (skor : 0)
				</label>
			</div>

			<label class="col-form-label">4. Dapat menyiapkan makanan</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios12" value="Merencanakan, menyiapkan, dan menghidangkan makanan">
				<label class="form-check-label" for="exampleRadios12">
					Merencanakan, menyiapkan, dan menghidangkan makanan (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios13" value="Menyiapkan makanan jika sudah tersedia bahan makanan">
				<label class="form-check-label" for="exampleRadios13">
					Menyiapkan makanan jika sudah tersedia bahan makanan (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios14" value="Menyiapkan makanan tetapi tidak mengatur diet yang cukup">
				<label class="form-check-label" for="exampleRadios14">
					Menyiapkan makanan tetapi tidak mengatur diet yang cukup (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios15" value="Perlu disiapkan dan dilayani">
				<label class="form-check-label" for="exampleRadios15">
					Perlu disiapkan dan dilayani (skor : 0)
				</label>
			</div>

			<label class="col-form-label">5. Dapat melakukan pekerjaan rumah tangga </label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios16" value="Merawat rumah sendiri atau bantuan kadang-kadang">
				<label class="form-check-label" for="exampleRadios16">
					Merawat rumah sendiri atau bantuan kadang-kadang (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios17" value="Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring)">
				<label class="form-check-label" for="exampleRadios17">
					Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring) (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios18" value="Perlu bantuan untuk semua perawatan rumah sehari-hari">
				<label class="form-check-label" for="exampleRadios18">
					Perlu bantuan untuk semua perawatan rumah sehari-hari (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios19" value="Tidak berpartisipasi dalam perawatan rumah">
				<label class="form-check-label" for="exampleRadios19">
					Tidak berpartisipasi dalam perawatan rumah (skor : 0)
				</label>
			</div>

			<label class="col-form-label">6. Dapat mencuci pakaian</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios20" value="Mencuci semua pakaian sendiri">
				<label class="form-check-label" for="exampleRadios20">
					Mencuci semua pakaian sendiri (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios21" value="Mencuci pakaian yang kecil">
				<label class="form-check-label" for="exampleRadios21">
					Mencuci pakaian yang kecil (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios23" value="Semua pakaian dicuci oleh orang lain">
				<label class="form-check-label" for="exampleRadios23">
					Semua pakaian dicuci oleh orang lain (skor : 0)
				</label>
			</div>

			<label class="col-form-label">7. Dapat mengatur obat - obatan</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no7_lawton" id="exampleRadios24" value="Meminum obat secara tepat dosis dan waktu tanpa bantuan">
				<label class="form-check-label" for="exampleRadios24">
					Meminum obat secara tepat dosis dan waktu tanpa bantuan (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no7_lawton" id="exampleRadios25" value="Tidak mampu menyiapkan obat sendiri">
				<label class="form-check-label" for="exampleRadios25">
					Tidak mampu menyiapkan obat sendiri (skor : 0)
				</label>
			</div>

			<label class="col-form-label">8. Dapat mengatur keuangan </label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios26" value="Mengatur masalah finansial (tagihan, pergi ke bank)">
				<label class="form-check-label" for="exampleRadios26">
					Mengatur masalah finansial (tagihan, pergi ke bank) (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios27" value="Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting">
				<label class="form-check-label" for="exampleRadios27">
					Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios111" value="Tidak mampu mengambil keputusan finansial atau memegang uang">
				<label class="form-check-label" for="exampleRadios111">
					Tidak mampu mengambil keputusan finansial atau memegang uang (skor : 0)
				</label>
			</div>
			<!-- <br />
			<div class="form-group row">
				<label class="col-md-1 col-form-label">Total</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="total_skor_lawton" name="total_skor_lawton" placeholder="">
				</div>
			</div> -->

		</div>

		<div class="card-body">
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fa fa-edit"></i> Aktivitas Kehidupan Sehari-Hari Barthel
					</h3>
				</div>
			</div>


			<label class="col-form-label">1. Mengendalikan rangsang BAB</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios28" value="Tidak terkendali/tak teratur (perlu pencahar)">
				<label class="form-check-label" for="exampleRadios28">
					Tidak terkendali/tak teratur (perlu pencahar) (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios29" value="Kadang-kadang tak terkendali (1x/minggu)">
				<label class="form-check-label" for="exampleRadios29">
					Kadang-kadang tak terkendali (1x/minggu) (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios30" value="Terkendali/teratur">
				<label class="form-check-label" for="exampleRadios30">
					Terkendali/teratur (skor : 2)
				</label>
			</div>

			<label class="col-form-label">2. Mengendalikan rangsang BAK</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios31" value="Tak terkendali atau pakai kateter">
				<label class="form-check-label" for="exampleRadios31">
					Tak terkendali atau pakai kateter (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios32" value="Kadang-kadang tak terkendali (hanya 1x/24jam)">
				<label class="form-check-label" for="exampleRadios32">
					Kadang-kadang tak terkendali (hanya 1x/24jam) (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios33" value="Mandiri">
				<label class="form-check-label" for="exampleRadios33">
					Mandiri (skor : 2)
				</label>
			</div>

			<label class="col-form-label">3. Membersihkan diri (mencuci wajah, menyikat rambut, mencukur kumis, sikat gigi)</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no3_barthel" id="exampleRadios34" value="Butuh pertolongan orang lain">
				<label class="form-check-label" for="exampleRadios34">
					Butuh pertolongan orang lain (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no3_barthel" id="exampleRadios98" value="Mandiri">
				<label class="form-check-label" for="exampleRadios98">
					Mandiri (skor : 1)
				</label>
			</div>

			<label class="col-form-label">4. Penggunaan WC (keluar masuk WC, melepas/ memakai celana, cebok, menyiram)</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios35" value="Tergantung pertolongan orang lain">
				<label class="form-check-label" for="exampleRadios35">
					Tergantung pertolongan orang lain (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios36" value="Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain">
				<label class="form-check-label" for="exampleRadios36">
					Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios99" value="Mandiri">
				<label class="form-check-label" for="exampleRadios99">
					Mandiri (skor : 2)
				</label>
			</div>

			<label class="col-form-label">5. Makan</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios37" value="Tidak mampu">
				<label class="form-check-label" for="exampleRadios37">
					Tidak mampu (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios38" value="Perlu ditolong memotong makanan">
				<label class="form-check-label" for="exampleRadios38">
					Perlu ditolong memotong makanan (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios39" value="Mandiri">
				<label class="form-check-label" for="exampleRadios39">
					Mandiri (skor : 2)
				</label>
			</div>


			<label class="col-form-label">6. Berubah posisi dari berbaring ke duduk </label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios40" value="Tidak mampu">
				<label class="form-check-label" for="exampleRadios40">
					Tidak mampu (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios41" value="Perlu banyak bantuan untuk bisa duduk (2 orang)">
				<label class="form-check-label" for="exampleRadios41">
					Perlu banyak bantuan untuk bisa duduk (2 orang) (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios42" value="Bantuan minimal 1 orang">
				<label class="form-check-label" for="exampleRadios42">
					Bantuan minimal 1 orang (skor : 2)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios43" value="Mandiri">
				<label class="form-check-label" for="exampleRadios43">
					Mandiri (skor : 3)
				</label>
			</div>

			<label class="col-form-label">7. Berpindah/berjalan </label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios44" value="Tidak mampu">
				<label class="form-check-label" for="exampleRadios44">
					Tidak mampu (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios45" value="Bisa (pindah) dengan kursi roda">
				<label class="form-check-label" for="exampleRadios45">
					Bisa (pindah) dengan kursi roda (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios46" value="Berjalan dengan bantuan 1 orang">
				<label class="form-check-label" for="exampleRadios46">
					Berjalan dengan bantuan 1 orang (skor : 2)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios47" value="Mandiri">
				<label class="form-check-label" for="exampleRadios47">
					Mandiri (skor : 3)
				</label>
			</div>

			<label class="col-form-label">8. Memakai baju</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios48" value="Tergantung orang lain">
				<label class="form-check-label" for="exampleRadios48">
					Tergantung orang lain (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios49" value="Sebagian dibantu (misal mengancing baju)">
				<label class="form-check-label" for="exampleRadios49">
					Sebagian dibantu (misal mengancing baju) (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios50" value="Mandiri">
				<label class="form-check-label" for="exampleRadios50">
					Mandiri (skor : 2)
				</label>
			</div>

			<label class="col-form-label">9. Naik turun tangga</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios51" value="Tidak mampu">
				<label class="form-check-label" for="exampleRadios51">
					Tidak mampu (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios52" value="Butuh pertolongan">
				<label class="form-check-label" for="exampleRadios52">
					Butuh pertolongan (skor : 1)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios53" value="Mandiri">
				<label class="form-check-label" for="exampleRadios53">
					Mandiri (skor : 2)
				</label>
			</div>

			<label class="col-form-label">10. Mandi</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no10_barthel" id="exampleRadios54" value="Tergantung orang lain">
				<label class="form-check-label" for="exampleRadios54">
					Tergantung orang lain (skor : 0)
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="no10_barthel" id="exampleRadios55" value="Mandiri">
				<label class="form-check-label" for="exampleRadios55">
					Mandiri (skor :1)
				</label>
			</div>
			<!-- <br />
			<div class="form-group row">
				<label class="col-md-1 col-form-label">Total</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="total_skor_barthel" name="total_skor_barthel" placeholder="">
				</div>
			</div> -->
		</div>

		<div class="card-body">
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fa fa-edit"></i> Tambah Data Penanggung Jawab
					</h3>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_penanggung" name="nama_penanggung" placeholder="Masukkan Nama Penanggung Jawab">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hubungan Dengan Lansia</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hub_lansia" name="hub_lansia" placeholder="Hubungan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat_p" name="alamat_p" placeholder="Alamat Penanggung">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Pos/Telepon</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="kode_pos_p" name="kode_pos_p" placeholder="Kode Pos">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="no_telepon_p" name="no_telepon_p" placeholder="Telepon/Fax/HP">
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-lansia" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
// if ('tgl_lh' == "") {
//     'tgl_lh' == 'NULL';
// } else {
//     'tgl_lh' == "'tgl_lh'";
// }

if (isset($_POST['Simpan'])) {
	//mulai proses simpan data

	$sql_simpan = "INSERT INTO tb_pasien (nama, nama_panggilan, jekel, tempat_lh, tgl_lh, 
	pekerjaan, kawin, alamat, rt, rw, kode_pos, no_telepon, tempat_tinggal, agama, 
	suku, didik_akhir, nik, gol_d, hobi, bpjs, asuransi_lain, sumber_dn, status) VALUES (
            '" . $_POST['nama'] . "',
            '" . $_POST['nama_panggilan'] . "',
			'" . $_POST['jekel'] . "',
			'" . $_POST['tempat_lh'] . "',
            '" . $_POST['tgl_lh'] . "',
            '" . $_POST['pekerjaan'] . "',
			'" . $_POST['kawin'] . "',
			'" . $_POST['alamat'] . "',
			'" . $_POST['rt'] . "',
			'" . $_POST['rw'] . "',
			'" . $_POST['kode_pos'] . "',
			'" . $_POST['no_telepon'] . "',
			'" . $_POST['tempat_tinggal'] . "',
			'" . $_POST['agama'] . "',
            '" . $_POST['suku'] . "',
			'" . $_POST['didik_akhir'] . "',
			'" . $_POST['nik'] . "',
            '" . $_POST['gol_d'] . "',
            '" . $_POST['hobi'] . "',
			'" . $_POST['bpjs'] . "',
			'" . $_POST['asuransi_lain'] . "',
			'" . $_POST['sumber_dn'] . "',
            '" . $_POST['status'] . "')";

	$query_simpan = mysqli_query($koneksi, $sql_simpan);

	$ambil_id_pasien = mysqli_insert_id($koneksi);

	if ($query_simpan) {
		$qIADL_lawton =
			"INSERT INTO tb_iadl_lawton (no1_lawton, no2_lawton, no3_lawton, no4_lawton, no5_lawton, no6_lawton, no7_lawton, no8_lawton, id_pasien) VALUES (
			'" . $_POST['no1_lawton'] . "',
			'" . $_POST['no2_lawton'] . "',
			'" . $_POST['no3_lawton'] . "',
			'" . $_POST['no4_lawton'] . "',
			'" . $_POST['no5_lawton'] . "',
			'" . $_POST['no6_lawton'] . "',
			'" . $_POST['no7_lawton'] . "',
			'" . $_POST['no8_lawton'] . "',
			'" . $ambil_id_pasien . "')";
		$simpanIADL_lawton = mysqli_query($koneksi, $qIADL_lawton);

		$qADL_barthel =
			"INSERT INTO tb_adl_barthel (no1_barthel, no2_barthel, no3_barthel, no4_barthel, no5_barthel, no6_barthel, no7_barthel, no8_barthel, no9_barthel, no10_barthel, id_pasien) VALUES (
			'" . $_POST['no1_barthel'] . "',
			'" . $_POST['no2_barthel'] . "',
			'" . $_POST['no3_barthel'] . "',
			'" . $_POST['no4_barthel'] . "',
			'" . $_POST['no5_barthel'] . "',
			'" . $_POST['no6_barthel'] . "',
			'" . $_POST['no7_barthel'] . "',
			'" . $_POST['no8_barthel'] . "',
			'" . $_POST['no9_barthel'] . "',
			'" . $_POST['no10_barthel'] . "',
			'" . $ambil_id_pasien . "')";
		$simpanADL_barthel = mysqli_query($koneksi, $qADL_barthel);

		$qPenanggung =
			"INSERT INTO tb_penanggung (nama_penanggung, hub_lansia, alamat_p, kode_pos_p, no_telepon_p, id_pasien) VALUES (
			'" . $_POST['nama_penanggung'] . "',
			'" . $_POST['hub_lansia'] . "',
			'" . $_POST['alamat_p'] . "',
			'" . $_POST['kode_pos_p'] . "',
			'" . $_POST['no_telepon_p'] . "',
			'" . $ambil_id_pasien . "')";
		$simpanPenanggung = mysqli_query($koneksi, $qPenanggung);
		// or trigger_error("Query Failed! SQL: $sql_simpan - Error: ".mysqli_error($koneksi), E_USER_ERROR);
	}


	if ($query_simpan) {
		echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-lansia';
          }
      })</script>";
	} else {
		echo trigger_error("Query Failed! SQL: $sql_simpan - Error: " . mysqli_error($koneksi), E_USER_ERROR);
		"<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-lansia';
          }
      })</script>";
	}
}
mysqli_close($koneksi);
//selesai proses simpan data
?>