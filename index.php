<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: login.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>e-KMS Lansia</title>
	<link rel="icon" href="dist/img/elder.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>e-KMS Lansia</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/elder.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> e-KMS Lansia</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<!-- <img src="dist/img/admin.ico"> -->
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level == "Administrator") {
						?>
							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>
										Kelola Data
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-lansia" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pasien</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-penanggung" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Penanggung Jawab</p>
										</a>
									</li>
									<!-- <li class="nav-item">
										<a href="?page=data-penanggung" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Dokter</p>
										</a>
									</li> -->
								</ul>
							</li>

							<!-- <li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon far fa-plus-square"></i>
									<p>
										Rekam Medis
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Lahir</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-mendu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Meninggal</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pendatang</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pindah</p>
										</a>
									</li>
								</ul>
							</li> -->

							<!-- <li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-file"></i>
									<p>
										Kelola Surat
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">

									<li class="nav-item">
										<a href="?page=suket-domisili" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Domisili</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Kelahiran</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-mati" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Kematian</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Pendatang</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Pindah</p>
										</a>
									</li>
								</ul>
							</li> -->


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>
										Kelola Laporan
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">

									<!-- <li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Penduduk</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data penanggung Keluarga</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Lahir</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=cetak_mati" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Meninggal</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pendatang</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pindah</p>
										</a>
									</li> -->
								</ul>
							</li>

							<li class="nav-header">Setting</li>

							<li class="nav-item">
								<a href="?page=data-pengguna" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>
										Pengguna Sistem
									</p>
								</a>
							</li>

						<?php
						} elseif ($data_level == "User") {
						?>

							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>
										Kelola Data
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-lansia" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pasien</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-penanggung" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Penanggung Jawab</p>
										</a>
									</li>
									<!-- <li class="nav-item">
										<a href="?page=data-penanggung" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Dokter</p>
										</a>
									</li> -->
								</ul>
							</li>

							<!-- <li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon far fa-plus-square"></i>
									<p>
										Rekam Medis
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Lahir</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-mendu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Meninggal</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pendatang</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pindah</p>
										</a>
									</li>
								</ul>
							</li> -->

							<!-- <li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-file"></i>
									<p>
										Kelola Surat
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">

									<li class="nav-item">
										<a href="?page=suket-domisili" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Domisili</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Kelahiran</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-mati" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Kematian</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Pendatang</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Su-Ket Pindah</p>
										</a>
									</li>
								</ul>
							</li> -->


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>
										Kelola Laporan
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">

									<!-- <li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Penduduk</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=suket-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Kartu Keluarga</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Lahir</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=cetak_mati" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Meninggal</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pendatang</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pindah</p>
										</a>
									</li> -->
								</ul>
							</li>

							<li class="nav-header">Setting</li>

							<!-- <li class="nav-item">
								<a href="?page=data-pengguna" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>
										Pengguna Sistem
									</p>
								</a>
							</li> -->

						<?php
						}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {

								//Pengguna
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;
							case 'ubah-password':
								include "admin/pengguna/ubah_password.php";
								break;

								//penanggung
							case 'data-penanggung':
								include "admin/penanggung/data_penanggung.php";
								break;
							case 'add-penanggung':
								include "admin/penanggung/add_penanggung.php";
								break;
							case 'edit-penanggung':
								include "admin/penanggung/edit_penanggung.php";
								break;
							case 'penanggung':
								include "admin/penanggung/penanggung.php";
								break;
							case 'del-penanggung':
								include "admin/penanggung/del_penanggung.php";
								break;
							case 'del-penanggung':
								include "admin/penanggung/del_penanggung.php";
								break;

								//lansia
							case 'data-lansia':
								include "admin/lansia/data_lansia.php";
								break;
							case 'lansia-sehat':
								include "admin/lansia/lansia_sehat.php";
								break;
							case 'lansia-kurang-sehat':
								include "admin/lansia/lansia_ks.php";
								break;
							case 'lansia-sakit':
								include "admin/lansia/lansia_sakit.php";
								break;
							case 'add-lansia':
								include "admin/lansia/add_lansia.php";
								break;
							case 'edit-lansia':
								include "admin/lansia/edit_lansia.php";
								break;
							case 'del-lansia':
								include "admin/lansia/del_lansia.php";
								break;
							case 'view-lansia':
								include "admin/lansia/view_lansia.php";
								break;
							case 'view-lawton':
								include "admin/lansia/view_lawton.php";
								break;
							case 'insert-lawton':
								include "admin/lansia/insert_lawton.php";
								break;
							case 'view-barthel':
								include "admin/lansia/view_barthel.php";
								break;
							case 'insert-barthel':
								include "admin/lansia/insert_barthel.php";
								break;

								//lahir
							case 'data-lahir':
								include "admin/lahir/data_lahir.php";
								break;
							case 'add-lahir':
								include "admin/lahir/add_lahir.php";
								break;
							case 'edit-lahir':
								include "admin/lahir/edit_lahir.php";
								break;
							case 'del-lahir':
								include "admin/lahir/del_lahir.php";
								break;

								//mendu
							case 'data-mendu':
								include "admin/mendu/data_mendu.php";
								break;
							case 'add-mendu':
								include "admin/mendu/add_mendu.php";
								break;
							case 'edit-mendu':
								include "admin/mendu/edit_mendu.php";
								break;
							case 'del-mendu':
								include "admin/mendu/del_mendu.php";
								break;

								//pindah
							case 'data-pindah':
								include "admin/pindah/data_pindah.php";
								break;
							case 'add-pindah':
								include "admin/pindah/add_pindah.php";
								break;
							case 'edit-pindah':
								include "admin/pindah/edit_pindah.php";
								break;
							case 'del-pindah':
								include "admin/pindah/del_pindah.php";
								break;

								//datang
							case 'data-datang':
								include "admin/datang/data_datang.php";
								break;
							case 'add-datang':
								include "admin/datang/add_datang.php";
								break;
							case 'edit-datang':
								include "admin/datang/edit_datang.php";
								break;
							case 'del-datang':
								include "admin/datang/del_datang.php";
								break;

								//suket
							case 'suket-domisili':
								include "surat/suket_domisili.php";
								break;
							case 'suket-lahir':
								include "surat/suket_lahir.php";
								break;
							case 'suket-mati':
								include "surat/suket_mati.php";
								break;
							case 'suket-datang':
								include "surat/suket_datang.php";
								break;
							case 'suket-pindah':
								include "surat/suket_pindah.php";
								break;

								//laporan
							case 'laporan-lahir':
								include "report/cetak_lahir.php";
								break;
							case 'suket-lahir':
								include "surat/suket_lahir.php";
								break;
							case 'suket-mati':
								include "surat/suket_mati.php";
								break;
							case 'suket-datang':
								include "surat/suket_datang.php";
								break;
							case 'suket-pindah':
								include "surat/suket_pindah.php";
								break;

							case 'export-data':
								include "admin/lansia/export.php";
								break;




								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					} else {
						// Auto Halaman Home Pengguna
						if ($data_level == "Administrator") {
							include "home/admin.php";
						} elseif ($data_level == "User") {
							include "home/user.php";
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<!-- <a target="_blank" href="https://www.youtube.com/channel/UCDxjOzW7F0JOkltlXT6g7AQ"> -->
				<strong>e-KMS Lansia</strong>
				<!-- </a> -->
				All rights reserved.
			</div>
			<b>e-KMS Lansia v0.1</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>
	<script>
		var table = $('#example1').DataTable();

		$('.dataTables_filter input').unbind().bind('keyup', function() {
			var searchTerm = this.value.toLowerCase(),
				regex = '\\b' + searchTerm + '\\b';
			table.rows().search(regex, true, false).draw();
		})
	</script>

	<!-- <script>
		$(document).ready(function() {
			$('#example1').DataTable({
				dom: 'Bfrtip',
				buttons: [{
						extend: 'copyHtml5',
						exportOptions: {
							columns: [0, 1, 2, 3, 4, 5]
						}
					},
					{
						extend: 'excelHtml5',
						exportOptions: {
							columns: [0, 1, 2, 3, 4, 5]
						}
					},
					{
						extend: 'pdfHtml5',
						exportOptions: {
							columns: [0, 1, 2, 3, 4, 5]
						}
					},
					{
						extend: 'print',
						exportOptions: {
							columns: [0, 1, 2, 3, 4, 5]
						}
					}
				]
			});
		});
	</script> -->

</body>

</html>