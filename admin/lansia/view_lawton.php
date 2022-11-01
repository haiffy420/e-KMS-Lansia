<?php

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * from tb_iadl_lawton where id_pasien ='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-user"></i> Instrumental Aktivitas Kehidupan Sehari-Hari Lawton
        </h3>
        </h3>
        <div class="card-tools">
        </div>
    </div>
    <?php
	if ($data_level == "Administrator") {
	?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <label class="col-form-label">1. Dapat menggunakan telepon</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios1" value="Mengoperasikan telepon sendiri, mencari dan menghubungi nomor" <?php if ($data_cek['no1_lawton'] == "Mengoperasikan telepon sendiri, mencari dan menghubungi nomor") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Mengoperasikan telepon sendiri, mencari dan menghubungi nomor (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios2" value="Menghubungi beberapa nomor yang diketahui" <?php if ($data_cek['no1_lawton'] == "Menghubungi beberapa nomor yang diketahui") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Menghubungi beberapa nomor yang diketahui (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios3" value="Menjawab telepon tetapi tidak menghubungi" <?php if ($data_cek['no1_lawton'] == "Menjawab telepon tetapi tidak menghubungi") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios3">
                    Menjawab telepon tetapi tidak menghubungi (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios4" value="Tidak bisa menggunakan telepon sama sekali" <?php if ($data_cek['no1_lawton'] == "Tidak bisa menggunakan telepon sama sekali") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios4">
                    Tidak bisa menggunakan telepon sama sekali (skor : 0)
                </label>
            </div>

            <label class="col-form-label">2. Mampu pergi ke suatu tempat</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios5" value="Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri" <?php if ($data_cek['no2_lawton'] == "Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios5">
                    Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios6" value="Mengatur perjalanan sendiri" <?php if ($data_cek['no2_lawton'] == "Mengatur perjalanan sendiri") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios6">
                    Mengatur perjalanan sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios7" value="Perjalanan menggunakan transportasi umum jika ada yang menyertai" <?php if ($data_cek['no2_lawton'] == "Perjalanan menggunakan transportasi umum jika ada yang menyertai") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios7">
                    Perjalanan menggunakan transportasi umum jika ada yang menyertai (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios8" value="Tidak melakukan perjalanan sama sekali" <?php if ($data_cek['no2_lawton'] == "Tidak melakukan perjalanan sama sekali") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios8">
                    Tidak melakukan perjalanan sama sekali (skor : 0)
                </label>
            </div>

            <label class="col-form-label">3. Dapat berbelanja</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios9" value="Mengatur semua kebutuhan belanja sendiri" <?php if ($data_cek['no3_lawton'] == "Mengatur semua kebutuhan belanja sendiri") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios9">
                    Mengatur semua kebutuhan belanja sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios10" value="Perlu bantuan untuk mengantar belanja" <?php if ($data_cek['no3_lawton'] == "Perlu bantuan untuk mengantar belanja") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios10">
                    Perlu bantuan untuk mengantar belanja (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios11" value="Sama sekali tidak mampu belanja" <?php if ($data_cek['no3_lawton'] == "Sama sekali tidak mampu belanja") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios11">
                    Sama sekali tidak mampu belanja (skor : 0)
                </label>
            </div>

            <label class="col-form-label">4. Dapat menyiapkan makanan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios12" value="Merencanakan, menyiapkan, dan menghidangkan makanan" <?php if ($data_cek['no4_lawton'] == "Merencanakan, menyiapkan, dan menghidangkan makanan") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>>
                <label class="form-check-label" for="exampleRadios12">
                    Merencanakan, menyiapkan, dan menghidangkan makanan (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios13" value="Menyiapkan makanan jika sudah tersedia bahan makanan" <?php if ($data_cek['no4_lawton'] == "Menyiapkan makanan jika sudah tersedia bahan makanan") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios13">
                    Menyiapkan makanan jika sudah tersedia bahan makanan (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios14" value="Menyiapkan makanan tetapi tidak mengatur diet yang cukup" <?php if ($data_cek['no4_lawton'] == "Menyiapkan makanan tetapi tidak mengatur diet yang cukup") {
                                                                                                                                                                            echo 'checked';
                                                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios14">
                    Menyiapkan makanan tetapi tidak mengatur diet yang cukup (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios15" value="Perlu disiapkan dan dilayani" <?php if ($data_cek['no4_lawton'] == "Perlu disiapkan dan dilayani") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios15">
                    Perlu disiapkan dan dilayani (skor : 0)
                </label>
            </div>

            <label class="col-form-label">5. Dapat melakukan pekerjaan rumah tangga </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios16" value="Merawat rumah sendiri atau bantuan kadang-kadang" <?php if ($data_cek['no5_lawton'] == "Merawat rumah sendiri atau bantuan kadang-kadang") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>>
                <label class="form-check-label" for="exampleRadios16">
                    Merawat rumah sendiri atau bantuan kadang-kadang (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios17" value="Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring)" <?php if ($data_cek['no5_lawton'] == "Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring)") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                <label class="form-check-label" for="exampleRadios17">
                    Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring) (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios18" value="Perlu bantuan untuk semua perawatan rumah sehari-hari" <?php if ($data_cek['no5_lawton'] == "Perlu bantuan untuk semua perawatan rumah sehari-hari") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios18">
                    Perlu bantuan untuk semua perawatan rumah sehari-hari (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios19" value="Tidak berpartisipasi dalam perawatan rumah" <?php if ($data_cek['no5_lawton'] == "Tidak berpartisipasi dalam perawatan rumah") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios19">
                    Tidak berpartisipasi dalam perawatan rumah (skor : 0)
                </label>
            </div>

            <label class="col-form-label">6. Dapat mencuci pakaian</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios20" value="Mencuci semua pakaian sendiri" <?php if ($data_cek['no6_lawton'] == "Mencuci semua pakaian sendiri") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios20">
                    Mencuci semua pakaian sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios21" value="Mencuci pakaian yang kecil" <?php if ($data_cek['no6_lawton'] == "Mencuci pakaian yang kecil") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios21">
                    Mencuci pakaian yang kecil (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios23" value="Semua pakaian dicuci oleh orang lain" <?php if ($data_cek['no6_lawton'] == "Semua pakaian dicuci oleh orang lain") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios23">
                    Semua pakaian dicuci oleh orang lain (skor : 0)
                </label>
            </div>

            <label class="col-form-label">7. Dapat mengatur obat - obatan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no7_lawton" id="exampleRadios24" value="Meminum obat secara tepat dosis dan waktu tanpa bantuan" <?php if ($data_cek['no7_lawton'] == "Meminum obat secara tepat dosis dan waktu tanpa bantuan") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?>>
                <label class="form-check-label" for="exampleRadios24">
                    Meminum obat secara tepat dosis dan waktu tanpa bantuan (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no7_lawton" id="exampleRadios25" value="Tidak mampu menyiapkan obat sendiri" <?php if ($data_cek['no7_lawton'] == "Tidak mampu menyiapkan obat sendiri") {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                <label class="form-check-label" for="exampleRadios25">
                    Tidak mampu menyiapkan obat sendiri (skor : 0)
                </label>
            </div>

            <label class="col-form-label">8. Dapat mengatur keuangan </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios26" value="Mengatur masalah finansial (tagihan, pergi ke bank)" <?php if ($data_cek['no8_lawton'] == "Mengatur masalah finansial (tagihan, pergi ke bank)") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>>
                <label class="form-check-label" for="exampleRadios26">
                    Mengatur masalah finansial (tagihan, pergi ke bank) (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios27" value="Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting" <?php if ($data_cek['no8_lawton'] == "Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting") {
                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                        } ?>>
                <label class="form-check-label" for="exampleRadios27">
                    Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios111" value="Tidak mampu mengambil keputusan finansial atau memegang uang" <?php if ($data_cek['no8_lawton'] == "Tidak mampu mengambil keputusan finansial atau memegang uang") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?>>
                <label class="form-check-label" for="exampleRadios111">
                    Tidak mampu mengambil keputusan finansial atau memegang uang (skor : 0)
                </label>
            </div>
            <br />
            <!-- <br />
            <div class="form-group row">
                <label class="col-md-1 col-form-label">Total</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="total_skor_lawton" name="total_skor_lawton" placeholder="<?php echo $data_cek['total_skor_lawton']; ?>">
                </div>
            </div> -->
            <?php
            $no1 = $data_cek['no1_lawton'];
            if ($no1 == "Tidak bisa menggunakan telepon sama sekali" or $no1 == NULL) {
                $no1 = 0;
            } else $no1 = 1;

            $no2 = $data_cek['no2_lawton'];
            if ($no2 == "Tidak melakukan perjalanan sama sekali" or $no2 == "Perjalanan menggunakan transportasi umum jika ada yang menyertai" or $no2 == NULL) {
                $no2 = 0;
            } else $no2 = 1;

            $no3 = $data_cek['no3_lawton'];
            if ($no3 == "Mengatur semua kebutuhan belanja sendiri") {
                $no3 = 1;
            } else $no3 = 0;

            $no4 = $data_cek['no4_lawton'];
            if ($no4 == "Merencanakan, menyiapkan, dan menghidangkan makanan") {
                $no4 = 1;
            } else $no4 = 0;

            $no5 = $data_cek['no5_lawton'];
            if ($no5 == "Tidak berpartisipasi dalam perawatan rumah" or $no5 == NULL) {
                $no5 = 0;
            } else $no5 = 1;

            $no6 = $data_cek['no6_lawton'];
            if ($no6 == "Semua pakaian dicuci oleh orang lain" or $no6 == NULL) {
                $no6 = 0;
            } else $no6 = 1;

            $no7 = $data_cek['no7_lawton'];
            if ($no7 == "Tidak mampu menyiapkan obat sendiri" or $no7 == NULL) {
                $no7 = 0;
            } else $no7 = 1;

            $no8 = $data_cek['no8_lawton'];
            if ($no8 == "Tidak mampu mengambil keputusan finansial atau memegang uang" or $no8 == NULL) {
                $no8 = 0;
            } else $no8 = 1;
            ?>

            <label class="col-form-label">Total Skor : <?php $total_skor = array($no1, $no2, $no3, $no4, $no5, $no6, $no7, $no8);
                                                        echo array_sum($total_skor);
                                                        ?> </label>
            <br />
            <label class="col-form-label">Skoring IADL Lawton</label>
            <br />
            <table>
                <tr>
                    <td>Dikerjakan oleh orang lain</td>
                    <td> :</td>
                    <td> 0</td>
                </tr>
                <tr>
                    <td>Perlu bantuan sepanjang waktu</td>
                    <td> :</td>
                    <td> 1</td>
                </tr>
                <tr>
                    <td>Perlu bantuan sesekali</td>
                    <td> :</td>
                    <td> 2</td>
                </tr>
                <tr>
                    <td>Independen/mandiri</td>
                    <td> :</td>
                    <td> 3 - 8</td>
                </tr>
            </table>
            <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $data_cek['id_pasien']; ?>" hidden />
        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
            <a href="?page=view-lansia&kode=<?php echo $data_cek['id_pasien']; ?>" class="btn btn-warning">Kembali</a>
        </div>
        <?php
	} elseif ($data_level == "User") {
		?>
        <div class="card-body">
            <label class="col-form-label">1. Dapat menggunakan telepon</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios1" value="Mengoperasikan telepon sendiri, mencari dan menghubungi nomor" <?php if ($data_cek['no1_lawton'] == "Mengoperasikan telepon sendiri, mencari dan menghubungi nomor") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios1">
                    Mengoperasikan telepon sendiri, mencari dan menghubungi nomor (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios2" value="Menghubungi beberapa nomor yang diketahui" <?php if ($data_cek['no1_lawton'] == "Menghubungi beberapa nomor yang diketahui") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios2">
                    Menghubungi beberapa nomor yang diketahui (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios3" value="Menjawab telepon tetapi tidak menghubungi" <?php if ($data_cek['no1_lawton'] == "Menjawab telepon tetapi tidak menghubungi") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios3">
                    Menjawab telepon tetapi tidak menghubungi (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no1_lawton" id="exampleRadios4" value="Tidak bisa menggunakan telepon sama sekali" <?php if ($data_cek['no1_lawton'] == "Tidak bisa menggunakan telepon sama sekali") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios4">
                    Tidak bisa menggunakan telepon sama sekali (skor : 0)
                </label>
            </div>

            <label class="col-form-label">2. Mampu pergi ke suatu tempat</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios5" value="Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri" <?php if ($data_cek['no2_lawton'] == "Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios5">
                    Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios6" value="Mengatur perjalanan sendiri" <?php if ($data_cek['no2_lawton'] == "Mengatur perjalanan sendiri") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios6">
                    Mengatur perjalanan sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios7" value="Perjalanan menggunakan transportasi umum jika ada yang menyertai" <?php if ($data_cek['no2_lawton'] == "Perjalanan menggunakan transportasi umum jika ada yang menyertai") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios7">
                    Perjalanan menggunakan transportasi umum jika ada yang menyertai (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no2_lawton" id="exampleRadios8" value="Tidak melakukan perjalanan sama sekali" <?php if ($data_cek['no2_lawton'] == "Tidak melakukan perjalanan sama sekali") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios8">
                    Tidak melakukan perjalanan sama sekali (skor : 0)
                </label>
            </div>

            <label class="col-form-label">3. Dapat berbelanja</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios9" value="Mengatur semua kebutuhan belanja sendiri" <?php if ($data_cek['no3_lawton'] == "Mengatur semua kebutuhan belanja sendiri") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios9">
                    Mengatur semua kebutuhan belanja sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios10" value="Perlu bantuan untuk mengantar belanja" <?php if ($data_cek['no3_lawton'] == "Perlu bantuan untuk mengantar belanja") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios10">
                    Perlu bantuan untuk mengantar belanja (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no3_lawton" id="exampleRadios11" value="Sama sekali tidak mampu belanja" <?php if ($data_cek['no3_lawton'] == "Sama sekali tidak mampu belanja") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios11">
                    Sama sekali tidak mampu belanja (skor : 0)
                </label>
            </div>

            <label class="col-form-label">4. Dapat menyiapkan makanan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios12" value="Merencanakan, menyiapkan, dan menghidangkan makanan" <?php if ($data_cek['no4_lawton'] == "Merencanakan, menyiapkan, dan menghidangkan makanan") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?> disabled>
                <label class="form-check-label" for="exampleRadios12">
                    Merencanakan, menyiapkan, dan menghidangkan makanan (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios13" value="Menyiapkan makanan jika sudah tersedia bahan makanan" <?php if ($data_cek['no4_lawton'] == "Menyiapkan makanan jika sudah tersedia bahan makanan") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios13">
                    Menyiapkan makanan jika sudah tersedia bahan makanan (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios14" value="Menyiapkan makanan tetapi tidak mengatur diet yang cukup" <?php if ($data_cek['no4_lawton'] == "Menyiapkan makanan tetapi tidak mengatur diet yang cukup") {
                                                                                                                                                                            echo 'checked';
                                                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios14">
                    Menyiapkan makanan tetapi tidak mengatur diet yang cukup (skor : 0)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no4_lawton" id="exampleRadios15" value="Perlu disiapkan dan dilayani" <?php if ($data_cek['no4_lawton'] == "Perlu disiapkan dan dilayani") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios15">
                    Perlu disiapkan dan dilayani (skor : 0)
                </label>
            </div>

            <label class="col-form-label">5. Dapat melakukan pekerjaan rumah tangga </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios16" value="Merawat rumah sendiri atau bantuan kadang-kadang" <?php if ($data_cek['no5_lawton'] == "Merawat rumah sendiri atau bantuan kadang-kadang") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?> disabled>
                <label class="form-check-label" for="exampleRadios16">
                    Merawat rumah sendiri atau bantuan kadang-kadang (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios17" value="Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring)" <?php if ($data_cek['no5_lawton'] == "Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring)") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?> disabled>
                <label class="form-check-label" for="exampleRadios17">
                    Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring) (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios18" value="Perlu bantuan untuk semua perawatan rumah sehari-hari" <?php if ($data_cek['no5_lawton'] == "Perlu bantuan untuk semua perawatan rumah sehari-hari") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios18">
                    Perlu bantuan untuk semua perawatan rumah sehari-hari (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no5_lawton" id="exampleRadios19" value="Tidak berpartisipasi dalam perawatan rumah" <?php if ($data_cek['no5_lawton'] == "Tidak berpartisipasi dalam perawatan rumah") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios19">
                    Tidak berpartisipasi dalam perawatan rumah (skor : 0)
                </label>
            </div>

            <label class="col-form-label">6. Dapat mencuci pakaian</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios20" value="Mencuci semua pakaian sendiri" <?php if ($data_cek['no6_lawton'] == "Mencuci semua pakaian sendiri") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios20">
                    Mencuci semua pakaian sendiri (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios21" value="Mencuci pakaian yang kecil" <?php if ($data_cek['no6_lawton'] == "Mencuci pakaian yang kecil") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios21">
                    Mencuci pakaian yang kecil (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no6_lawton" id="exampleRadios23" value="Semua pakaian dicuci oleh orang lain" <?php if ($data_cek['no6_lawton'] == "Semua pakaian dicuci oleh orang lain") {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios23">
                    Semua pakaian dicuci oleh orang lain (skor : 0)
                </label>
            </div>

            <label class="col-form-label">7. Dapat mengatur obat - obatan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no7_lawton" id="exampleRadios24" value="Meminum obat secara tepat dosis dan waktu tanpa bantuan" <?php if ($data_cek['no7_lawton'] == "Meminum obat secara tepat dosis dan waktu tanpa bantuan") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> disabled>
                <label class="form-check-label" for="exampleRadios24">
                    Meminum obat secara tepat dosis dan waktu tanpa bantuan (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no7_lawton" id="exampleRadios25" value="Tidak mampu menyiapkan obat sendiri" <?php if ($data_cek['no7_lawton'] == "Tidak mampu menyiapkan obat sendiri") {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?> disabled>
                <label class="form-check-label" for="exampleRadios25">
                    Tidak mampu menyiapkan obat sendiri (skor : 0)
                </label>
            </div>

            <label class="col-form-label">8. Dapat mengatur keuangan </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios26" value="Mengatur masalah finansial (tagihan, pergi ke bank)" <?php if ($data_cek['no8_lawton'] == "Mengatur masalah finansial (tagihan, pergi ke bank)") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?> disabled>
                <label class="form-check-label" for="exampleRadios26">
                    Mengatur masalah finansial (tagihan, pergi ke bank) (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios27" value="Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting" <?php if ($data_cek['no8_lawton'] == "Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting") {
                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                        } ?> disabled>
                <label class="form-check-label" for="exampleRadios27">
                    Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting (skor : 1)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="no8_lawton" id="exampleRadios111" value="Tidak mampu mengambil keputusan finansial atau memegang uang" <?php if ($data_cek['no8_lawton'] == "Tidak mampu mengambil keputusan finansial atau memegang uang") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?> disabled>
                <label class="form-check-label" for="exampleRadios111">
                    Tidak mampu mengambil keputusan finansial atau memegang uang (skor : 0)
                </label>
            </div>
            <br />
            <!-- <br />
            <div class="form-group row">
                <label class="col-md-1 col-form-label">Total</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="total_skor_lawton" name="total_skor_lawton" placeholder="<?php echo $data_cek['total_skor_lawton']; ?>">
                </div>
            </div> -->
            <?php
            $no1 = $data_cek['no1_lawton'];
            if ($no1 == "Tidak bisa menggunakan telepon sama sekali" or $no1 == NULL) {
                $no1 = 0;
            } else $no1 = 1;

            $no2 = $data_cek['no2_lawton'];
            if ($no2 == "Tidak melakukan perjalanan sama sekali" or $no2 == "Perjalanan menggunakan transportasi umum jika ada yang menyertai" or $no2 == NULL) {
                $no2 = 0;
            } else $no2 = 1;

            $no3 = $data_cek['no3_lawton'];
            if ($no3 == "Mengatur semua kebutuhan belanja sendiri") {
                $no3 = 1;
            } else $no3 = 0;

            $no4 = $data_cek['no4_lawton'];
            if ($no4 == "Merencanakan, menyiapkan, dan menghidangkan makanan") {
                $no4 = 1;
            } else $no4 = 0;

            $no5 = $data_cek['no5_lawton'];
            if ($no5 == "Tidak berpartisipasi dalam perawatan rumah" or $no5 == NULL) {
                $no5 = 0;
            } else $no5 = 1;

            $no6 = $data_cek['no6_lawton'];
            if ($no6 == "Semua pakaian dicuci oleh orang lain" or $no6 == NULL) {
                $no6 = 0;
            } else $no6 = 1;

            $no7 = $data_cek['no7_lawton'];
            if ($no7 == "Tidak mampu menyiapkan obat sendiri" or $no7 == NULL) {
                $no7 = 0;
            } else $no7 = 1;

            $no8 = $data_cek['no8_lawton'];
            if ($no8 == "Tidak mampu mengambil keputusan finansial atau memegang uang" or $no8 == NULL) {
                $no8 = 0;
            } else $no8 = 1;
            ?>

            <label class="col-form-label">Total Skor : <?php $total_skor = array($no1, $no2, $no3, $no4, $no5, $no6, $no7, $no8);
                                                        echo array_sum($total_skor);
                                                        ?> </label>
            <br />
            <label class="col-form-label">Skoring IADL Lawton</label>
            <br />
            <table>
                <tr>
                    <td>Dikerjakan oleh orang lain</td>
                    <td> :</td>
                    <td> 0</td>
                </tr>
                <tr>
                    <td>Perlu bantuan sepanjang waktu</td>
                    <td> :</td>
                    <td> 1</td>
                </tr>
                <tr>
                    <td>Perlu bantuan sesekali</td>
                    <td> :</td>
                    <td> 2</td>
                </tr>
                <tr>
                    <td>Independen/mandiri</td>
                    <td> :</td>
                    <td> 3 - 8</td>
                </tr>
            </table>
            <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $data_cek['id_pasien']; ?>" hidden />
        </div>
        <div class="card-footer">
        <a href="?page=view-lansia&kode=<?php echo $data_cek['id_pasien']; ?>" class="btn btn-warning">Kembali</a>
        </div>
        <?php } ?>
    </form>
    </tbody>
    </table>

</div>

<?php
$id_lan = $_GET['kode']; 
if (isset($_POST['Ubah'])) {
    $sql_ubah =
        "UPDATE tb_iadl_lawton SET 
		no1_lawton='" . $_POST['no1_lawton'] . "',
		no2_lawton='" . $_POST['no2_lawton'] . "',
		no3_lawton='" . $_POST['no3_lawton'] . "',
		no4_lawton='" . $_POST['no4_lawton'] . "',
		no5_lawton='" . $_POST['no5_lawton'] . "',
		no6_lawton='" . $_POST['no6_lawton'] . "',
		no7_lawton='" . $_POST['no7_lawton'] . "',
		no8_lawton='" . $_POST['no8_lawton'] . "'
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