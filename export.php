<?php
//import koneksi ke database
include "inc/koneksi.php";
?>
<html>

<head>
	<title>Data Lansia</title>
	<link rel="icon" href="dist/img/elder.png">
	<link rel="stylesheet" href="export/bootstrap.min.css">
	<script src="export/jquery.min.js"></script>
	<script src="export/popper.min.js"></script>
	<script src="export/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="export/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="export/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="export/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="export/jquery.dataTables.js"></script>
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
	<!-- <style>
	div.container {
        width: 80%;
    }
	</style> -->
	<style>
		th,
		td {
			white-space: nowrap;
		}

		div.dataTables_wrapper {
			margin: 0 auto;
		}

		div.container {
			width: 80%;
		}
	</style>

</head>

<body width=90%>
	<div class="container">
		<h2>Data Lansia</h2>

		<div class="data-tables datatable-dark table-responsive">

			<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
			<table id="example1" class="table table-bordered table-striped">

				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat/Tgl Lahir</th>
						<th>RT</th>
						<th>RW</th>
						<th style='width: 90%;'>Alamat</th>
						<th>Kode Pos</th>
						<th>No Telepon</th>
						<th>Status</th>
						<th>Nama Penanggung</th>
						<th>No Telp Penanggung</th>
					</tr>
				</thead>
				<tbody>

					<?php
					mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$no = 1;
					$sql = $koneksi->query("SELECT p.id_pasien, p.nik, p.nama, p.jekel, p.tempat_lh, p.tgl_lh, p.pekerjaan, p.alamat, p.rt, p.rw, p.no_telepon, p.kode_pos, p.status, pn.nama_penanggung, pn.no_telepon_p from 
			  tb_pasien p inner join tb_penanggung pn on p.id_pasien=pn.id_pasien 
			   ");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nik']; ?>
							</td>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['jekel']; ?>
							</td>
							<td>
								<?php echo $data['tempat_lh'];
								if ($data['tempat_lh'] != NULL and $data['tgl_lh'] != NULL) {
									echo ",";
								}
								?> <?php

									echo $data['tgl_lh']; ?>
							</td>
							<td><?php echo $data['rt']; ?></td>
							<td><?php echo $data['rw']; ?></td>
							<td>
								<!-- <?php
										if ($data['rt'] != NULL) {
											echo "RT";
										}
										?> 
								<?php echo $data['rt']; ?> <?php
															if ($data['rw'] != NULL) {
																echo "RW";
															}
															?> <?php echo $data['rw']; ?><?php
																							if ($data['rt'] != NULL and $data['rw'] != NULL and $data['alamat'] != NULL) {
																								echo ",";
																							}
																							?>  -->
								<?php echo $data['alamat']; ?>
							</td>
							<td><?php echo $data['kode_pos']; ?></td>
							<td>
								<?php echo $data['no_telepon']; ?>
							</td>
							<td>
								<?php echo $data['status']; ?>
							</td>
							<td><?php echo $data['nama_penanggung']; ?></td>
							<td><?php echo $data['no_telepon_p']; ?></td>

						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
			<!-- <script type="text/javascript">
				document.getElementById("example1_filter").style.display = "none";
			</script> -->

		</div>
		<br />
		Petunjuk : Apabila ingin mencari suatu data, tulis data tersebut dengan lengkap.
		<br />
		Misalnya, jika ingin mencari nama "Samsudin", ketik "Samsudin", bukan hanya "Sam" atau "Udin"
	</div>
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

	<script>
		$(document).ready(function() {
			$('#example1').DataTable({
				"autoWidth": false,

				"ordering": true,
				"columns": [
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					{
						"width": "50%"
					},
					null,
					null,
					null,
					null,
					null
				],
				dom: 'Bfrtip',
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				],
				buttons: ['pageLength', {
						extend: 'excelHtml5',
						exportOptions: {
							columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
						}
					},
					// {
					// 	extend: 'pdfHtml5',
					// 	exportOptions: {
					// 		columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
					// 	}
					// },
					// {
					// 	extend: 'print',
					// 	exportOptions: {
					// 		columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
					// 	}
					// },
					{
						extend: 'csv',
						exportOptions: {
							columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
						}
					}
				],
				scrollX: true

				// scrollY: "300px",
				// scrollX: true,
				// scrollCollapse: true,
				// fixedColumns: {
				// 	heightMatch: 'none'
				// }
			});
			$('.dataTables_filter input').unbind().bind('keyup', function() {
				var searchTerm = this.value.toLowerCase(),
					regex = '\\b' + searchTerm + '\\b';
				$('#example1').DataTable().rows().search(regex, true, false).draw();
			})
		});
	</script>




	<!-- <script>
		
		$(function() {
			$("#example").DataTable();
			$('#example1').DataTable({
				"paging": false,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	</script> -->

	<!-- <script>
		var table = $('#example1').DataTable();
		$('.dataTables_filter input').unbind().bind('keyup', function() {
			var searchTerm = this.value.toLowerCase(),
				regex = '\\b' + searchTerm + '\\b';
			table.rows().search(regex, true, false).draw();
		})
	</script> -->

	<!-- <script>
		$(document).ready(function() {
			$('#example1').DataTable({
				initComplete: function() {
					this.api()
						.columns()
						.every(function() {
							var column = this;
							var select = $('<select><option value=""></option></select>')
								.appendTo($(column.footer()).empty())
								.on('change', function() {
									var val = $.fn.dataTable.util.escapeRegex($(this).val());

									column.search(val ? '^' + val + '$' : '', true, false).draw();
								});

							column
								.data()
								.unique()
								.sort()
								.each(function(d, j) {
									select.append('<option value="' + d + '">' + d + '</option>');
								});
						});
				},
			});
		});
	</script> -->

	<script src="export/jquery-3.5.1.js"></script>
	<script src="export/jquery.dataTables.min.js"></script>
	<script src="export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>



</body>

</html>