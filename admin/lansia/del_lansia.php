<?php
if(isset($_GET['kode'])){
            $sql_hapus = 
            "DELETE tb_pasien,tb_penanggung,tb_iadl_lawton,tb_adl_barthel FROM tb_pasien
            INNER JOIN tb_penanggung ON tb_pasien.id_pasien = tb_penanggung.id_pasien
            INNER JOIN tb_iadl_lawton ON tb_pasien.id_pasien = tb_iadl_lawton.id_pasien
            INNER JOIN tb_adl_barthel ON tb_pasien.id_pasien = tb_adl_barthel.id_pasien
            WHERE tb_pasien.id_pasien='" . $_GET['kode'] . "'";

            $query_hapus = mysqli_query($koneksi, $sql_hapus);

            // $sql_hapus1 = 
            // "DELETE tb_iadl_lawton,tb_pasien FROM tb_iadl_lawton
            // INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_iadl_lawton.id_pasien
            // WHERE tb_iadl_lawton.id_pasien='" . $_GET['kode'] . "'";

            // $query_hapus = mysqli_query($koneksi, $sql_hapus1);

            // $sql_hapus2 = 
            // "DELETE tb_adl_barthel,tb_pasien FROM tb_adl_barthel
            // INNER JOIN tb_pasien ON tb_pasien.id_pasien = tb_adl_barthel.id_pasien
            // WHERE tb_adl_barthel.id_pasien='" . $_GET['kode'] . "'";

            // $query_hapus = mysqli_query($koneksi, $sql_hapus2);

            if ($query_hapus) {
                echo "<script>
                Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-lansia';
                    }
                })</script>";
                }else{
                echo trigger_error("Query Failed! SQL: $sql_ubah_p - Error: ".mysqli_error($koneksi), E_USER_ERROR);
                // "<script>
                // Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                // }).then((result) => {
                //     if (result.value) {
                //         window.location = 'index.php?page=data-lansia';
                //     }
                // })</script>";
            }
        }

