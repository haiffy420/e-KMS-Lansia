<?php

$sql = $koneksi->query("SELECT COUNT(id_pasien) as lansia  from tb_pasien where status!='Meninggal'");
while ($data = $sql->fetch_assoc()) {
	$lansia = $data['lansia'];
}

$sql = $koneksi->query("SELECT COUNT(id_penanggung) as penanggung  from tb_penanggung");
while ($data = $sql->fetch_assoc()) {
	$penang = $data['penanggung'];
}

$sql = $koneksi->query("SELECT COUNT(id_pasien) as sehat  from tb_pasien where status='Sehat'");
while ($data = $sql->fetch_assoc()) {
	$kartu = $data['sehat'];
}

$sql = $koneksi->query("SELECT COUNT(id_pasien) as kurang_sehat from tb_pasien where status='Kurang Sehat'");
while ($data = $sql->fetch_assoc()) {
	$laki = $data['kurang_sehat'];
}

$sql = $koneksi->query("SELECT COUNT(id_pasien) as sakit from tb_pasien where status='Sakit'");
while ($data = $sql->fetch_assoc()) {
	$prem = $data['sakit'];
}


// $sql = $koneksi->query("SELECT COUNT(id_lahir) as lahir from tb_lahir");
// while ($data = $sql->fetch_assoc()) {
// 	$lahir = $data['lahir'];
// }

// $sql = $koneksi->query("SELECT COUNT(id_mendu) as mendu  from tb_mendu");
// while ($data = $sql->fetch_assoc()) {
// 	$mendu = $data['mendu'];
// }

// $sql = $koneksi->query("SELECT COUNT(id_datang) as datang  from tb_datang");
// while ($data = $sql->fetch_assoc()) {
// 	$datang = $data['datang'];
// }

// $sql = $koneksi->query("SELECT COUNT(id_pindah) as pindah  from tb_pindah");
// while ($data = $sql->fetch_assoc()) {
// 	$pindah = $data['pindah'];
// }

?>

<div class="row">
<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $penang;  ?>
				</h3>

				<p>Lansia</p>
			</div>
			<div class="icon">
				<i class="ion ion-person"></i>
			</div>
			<a href="index.php?page=data-lansia" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $penang;  ?>
				</h3>

				<p>Penanggung</p>
			</div>
			<div class="icon">
				<i class="ion ion-person"></i>
			</div>
			<a href="index.php?page=data-penanggung" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $kartu;  ?>
				</h3>

				<p>Sehat</p>
			</div>
			<div class="icon">
				<i class="ion ion-happy"></i>
			</div>
			<a href="index.php?page=lansia-sehat" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $laki;  ?>
				</h3>

				<p>Kurang Sehat</p>
			</div>
			<div class="icon">
				<i class="ion ion-sad"></i>
			</div>
			<a href="index.php?page=lansia-kurang-sehat" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $prem;  ?>
				</h3>

				<p>Sakit</p>
			</div>
			<div class="icon">
				<i class="ion ion-medkit"></i>
			</div>
			<a href="index.php?page=lansia-sakit" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<!-- <div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $lahir;  ?>
				</h3>

				<p>Lahir</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="index.php?page=data-pend" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div> -->
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<!-- <div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $mendu;  ?>
				</h3>

				<p>Meninggal</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-sad"></i>
			</div>
			<a href="index.php?page=data-kartu" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div> -->
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<!-- <div class="small-box bg-red">
			<div class="inner">
				<h3>
					<?php echo $datang;  ?>
				</h3>

				<p>Pendatang</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-download"></i>
			</div>
			<a href="index.php?page=data-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div> -->
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<!-- <div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $pindah;  ?>
				</h3>

				<p>Pindah</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-upload"></i>
			</div>
			<a href="index.php?page=log-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div> -->
	</div>

</div>