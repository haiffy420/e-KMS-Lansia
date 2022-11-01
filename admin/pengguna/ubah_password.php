<script>
    function validate() {

        var a = document.getElementById("pass").value;
        var b = document.getElementById("confirm_password").value;
        if (a != b) {
            alert("Password harus sama!");
            return false;
        }
    }
</script>
<?php

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tb_pengguna WHERE id_pengguna='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}

?>
<?php
$id_p = $_GET['kode'];
$username = trim(mysqli_real_escape_string($koneksi, $data_cek['username']));
$password = sha1(trim(mysqli_real_escape_string($koneksi, $data_cek['password'])));
?>
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data
        </h3>
    </div>
    <form onSubmit="return validate();" action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <input type='hidden' class="form-control" name="id_pengguna" value="<?php echo $data_cek['id_pengguna']; ?>" readonly />

            <!-- <div class="form-group row" hidden>
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="hidden" class="form-control" id="pass" name="password" value="<?php echo $password; ?>" required />
                    <input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
                </div>
            </div> -->

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="pass" name="password" value="" required />
                    <input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="" required />
                    <!-- <input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password -->
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
            <a href="?page=edit-pengguna&kode=<?php echo $data_cek['id_pengguna']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>



<?php
// $newpass = $_POST['password'];
// $newpass_r = $_POST['password1'];
if (isset($_POST['Ubah'])) {
    $sql_ubah = "UPDATE tb_pengguna SET
        password=sha1('" . $_POST['password'] . "')
        WHERE id_pengguna='" . $_POST['id_pengguna'] . "'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengguna';
        }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengguna';
        }
      })</script>";
    }
}
?>

<script type="text/javascript">
    function change() {
        var x = document.getElementById('pass').type;

        if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('mybutton').innerHTML;
        } else {
            document.getElementById('pass').type = 'password';
            document.getElementById('mybutton').innerHTML;
        }
    }
</script>