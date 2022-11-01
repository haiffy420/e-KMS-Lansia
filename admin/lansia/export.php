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
</head>

<body>
	<div class="container">
		<h2>Data Lansia</h2>

		<div class="data-tables datatable-dark">

			<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat/Tgl Lahir</th>
						<th>Alamat</th>
						<th>No Telepon</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>

					<?php
					mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$no = 1;
					$sql = $koneksi->query("SELECT p.id_pasien, p.nik, p.nama, p.jekel, p.tempat_lh, p.tgl_lh, p.pekerjaan, p.alamat, p.rt, p.rw, p.no_telepon, p.status, a.id_kk, k.no_kk, k.kepala from 
			  tb_pasien p left join tb_anggota a on p.id_pasien=a.id_pasien 
			  left join tb_kk k on a.id_kk=k.id_kk where status!='Meninggal'");
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
							<td>
								<?php
								if ($data['rt'] != NULL) {
									echo "RT";
								}
								?> <?php echo $data['rt']; ?> <?php
																	if ($data['rw'] != NULL) {
																		echo "RW";
																	}
																	?> <?php echo $data['rw']; ?><?php
																	if ($data['rt'] != NULL and $data['rw'] != NULL and $data['alamat'] != NULL) {
																		echo ",";
																	}
																	?> <?php echo $data['alamat']; ?>
							</td>
							<td>
								<?php echo $data['no_telepon']; ?>
							</td>
							<td>
								<?php echo $data['status']; ?>
							</td>

						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>

		</div>
	</div>
	<script>$('#example1').dataTable( {
    paging: false,
    searching: false
} );</script>
	<script>
		$(document).ready(function() {
			$('#example1').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'excel', 'pdf', 'print', 'csv'
				]
			});
		});
	</script>
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