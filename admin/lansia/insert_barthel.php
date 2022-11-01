<?php 
include "inc/koneksi.php";
if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_pasien where id_pasien ='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}      
$id_pasien= $_GET['kode'];
$sql = "INSERT INTO tb_adl_barthel (id_pasien) VALUES ('$id_pasien')";
if (mysqli_query($koneksi, $sql)) {
echo "Sedang memasukkan data, tunggu beberapa saat hingga sebuah tombol muncul...";
} else {
echo "Error memasukkan data: Data sudah ada, tunggu beberapa saat hingga sebuah tombol muncul...";
}
mysqli_close($koneksi);

?>
<br />
<br/>
<!-- <a href="<?php echo "?page=view-barthel&kode=$id_pasien"?>" id="a" class="btn btn-secondary">Klik 1x lagi</a> -->
<a href="<?php echo "?page=view-barthel&kode=$id_pasien"?>"<button id="a" class="btn btn-secondary">Lanjut</button></a>
<script>
        document.getElementById("a").style.display = "none";

        function showStuff() {
            document.getElementById("a").style.display = "inline";
        }

        function myFunction() {
            window.location = ""
        }

        setTimeout(showStuff, 5000);
    </script>