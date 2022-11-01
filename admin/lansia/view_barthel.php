<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_adl_barthel where id_pasien ='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-user"></i> Aktivitas Kehidupan Sehari-Hari Barthel
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
				<label class="col-form-label">1. Mengendalikan rangsang BAB</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios28" value="Tidak terkendali/tak teratur (perlu pencahar)" <?php if ($data_cek['no1_barthel'] == "Tidak terkendali/tak teratur (perlu pencahar)") {
																																									echo 'checked';
																																								} ?>>
					<label class="form-check-label" for="exampleRadios28">
						Tidak terkendali/tak teratur (perlu pencahar) (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios29" value="Kadang-kadang tak terkendali (1x/minggu)" <?php if ($data_cek['no1_barthel'] == "Kadang-kadang tak terkendali (1x/minggu)") {
																																								echo 'checked';
																																							} ?>>
					<label class="form-check-label" for="exampleRadios29">
						Kadang-kadang tak terkendali (1x/minggu) (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios30" value="Terkendali/teratur" <?php if ($data_cek['no1_barthel'] == "Terkendali/teratur") {
																																		echo 'checked';
																																	} ?>>
					<label class="form-check-label" for="exampleRadios30">
						Terkendali/teratur (skor : 2)
					</label>
				</div>

				<label class="col-form-label">2. Mengendalikan rangsang BAK</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios31" value="Tak terkendali atau pakai kateter" <?php if ($data_cek['no2_barthel'] == "Tak terkendali atau pakai kateter") {
																																						echo 'checked';
																																					} ?>>
					<label class="form-check-label" for="exampleRadios31">
						Tak terkendali atau pakai kateter (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios32" value="Kadang-kadang tak terkendali (hanya 1x/24jam)" <?php if ($data_cek['no2_barthel'] == "Kadang-kadang tak terkendali (hanya 1x/24jam)") {
																																									echo 'checked';
																																								} ?>>
					<label class="form-check-label" for="exampleRadios32">
						Kadang-kadang tak terkendali (hanya 1x/24jam) (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios33" value="Mandiri" <?php if ($data_cek['no2_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios33">
						Mandiri (skor : 2)
					</label>
				</div>

				<label class="col-form-label">3. Membersihkan diri (mencuci wajah, menyikat rambut, mencukur kumis, sikat gigi)</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no3_barthel" id="exampleRadios34" value="Butuh pertolongan orang lain" <?php if ($data_cek['no3_barthel'] == "Butuh pertolongan orang lain") {
																																					echo 'checked';
																																				} ?>>
					<label class="form-check-label" for="exampleRadios34">
						Butuh pertolongan orang lain (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no3_barthel" id="exampleRadios98" value="Mandiri" <?php if ($data_cek['no3_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios98">
						Mandiri (skor : 1)
					</label>
				</div>

				<label class="col-form-label">4. Penggunaan WC (keluar masuk WC, melepas/ memakai celana, cebok, menyiram)</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios35" value="Tergantung pertolongan orang lain" <?php if ($data_cek['no4_barthel'] == "Tergantung pertolongan orang lain") {
																																						echo 'checked';
																																					} ?>>
					<label class="form-check-label" for="exampleRadios35">
						Tergantung pertolongan orang lain (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios36" value="Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain" <?php if ($data_cek['no4_barthel'] == "Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain") {
																																																							echo 'checked';
																																																						} ?>>
					<label class="form-check-label" for="exampleRadios36">
						Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios99" value="Mandiri" <?php if ($data_cek['no4_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios99">
						Mandiri (skor : 2)
					</label>
				</div>

				<label class="col-form-label">5. Makan</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios37" value="Tidak mampu" <?php if ($data_cek['no5_barthel'] == "Tidak mampu") {
																																	echo 'checked';
																																} ?>>
					<label class="form-check-label" for="exampleRadios37">
						Tidak mampu (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios38" value="Perlu ditolong memotong makanan" <?php if ($data_cek['no5_barthel'] == "Perlu ditolong memotong makanan") {
																																						echo 'checked';
																																					} ?>>
					<label class="form-check-label" for="exampleRadios38">
						Perlu ditolong memotong makanan (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios39" value="Mandiri" <?php if ($data_cek['no5_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios39">
						Mandiri (skor : 2)
					</label>
				</div>


				<label class="col-form-label">6. Berubah posisi dari berbaring ke duduk </label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios40" value="Tidak mampu" <?php if ($data_cek['no6_barthel'] == "Tidak mampu") {
																																	echo 'checked';
																																} ?>>
					<label class="form-check-label" for="exampleRadios40">
						Tidak mampu (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios41" value="Perlu banyak bantuan untuk bisa duduk (2 orang)" <?php if ($data_cek['no6_barthel'] == "Perlu banyak bantuan untuk bisa duduk (2 orang)") {
																																										echo 'checked';
																																									} ?>>
					<label class="form-check-label" for="exampleRadios41">
						Perlu banyak bantuan untuk bisa duduk (2 orang) (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios42" value="Bantuan minimal 1 orang" <?php if ($data_cek['no6_barthel'] == "Bantuan minimal 1 orang") {
																																				echo 'checked';
																																			} ?>>
					<label class="form-check-label" for="exampleRadios42">
						Bantuan minimal 1 orang (skor : 2)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios43" value="Mandiri" <?php if ($data_cek['no6_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios43">
						Mandiri (skor : 3)
					</label>
				</div>

				<label class="col-form-label">7. Berpindah/berjalan </label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios44" value="Tidak mampu" <?php if ($data_cek['no7_barthel'] == "Tidak mampu") {
																																	echo 'checked';
																																} ?>>
					<label class="form-check-label" for="exampleRadios44">
						Tidak mampu (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios45" value="Bisa (pindah) dengan kursi roda" <?php if ($data_cek['no7_barthel'] == "Bisa (pindah) dengan kursi roda") {
																																						echo 'checked';
																																					} ?>>
					<label class="form-check-label" for="exampleRadios45">
						Bisa (pindah) dengan kursi roda (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios46" value="Berjalan dengan bantuan 1 orang" <?php if ($data_cek['no7_barthel'] == "Berjalan dengan bantuan 1 orang") {
																																						echo 'checked';
																																					} ?>>
					<label class="form-check-label" for="exampleRadios46">
						Berjalan dengan bantuan 1 orang (skor : 2)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios47" value="Mandiri" <?php if ($data_cek['no7_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios47">
						Mandiri (skor : 3)
					</label>
				</div>

				<label class="col-form-label">8. Memakai baju</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios48" value="Tergantung orang lain" <?php if ($data_cek['no8_barthel'] == "Tergantung orang lain") {
																																			echo 'checked';
																																		} ?>>
					<label class="form-check-label" for="exampleRadios48">
						Tergantung orang lain (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios49" value="Sebagian dibantu (misal mengancing baju)" <?php if ($data_cek['no8_barthel'] == "Sebagian dibantu (misal mengancing baju)") {
																																								echo 'checked';
																																							} ?>>
					<label class="form-check-label" for="exampleRadios49">
						Sebagian dibantu (misal mengancing baju) (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios50" value="Mandiri" <?php if ($data_cek['no8_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios50">
						Mandiri (skor : 2)
					</label>
				</div>

				<label class="col-form-label">9. Naik turun tangga</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios51" value="Tidak mampu" <?php if ($data_cek['no9_barthel'] == "Tidak mampu") {
																																	echo 'checked';
																																} ?>>
					<label class="form-check-label" for="exampleRadios51">
						Tidak mampu (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios52" value="Butuh pertolongan" <?php if ($data_cek['no9_barthel'] == "Butuh pertolongan") {
																																		echo 'checked';
																																	} ?>>
					<label class="form-check-label" for="exampleRadios52">
						Butuh pertolongan (skor : 1)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios53" value="Mandiri" <?php if ($data_cek['no9_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios53">
						Mandiri (skor : 2)
					</label>
				</div>

				<label class="col-form-label">10. Mandi</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no10_barthel" id="exampleRadios54" value="Tergantung orang lain" <?php if ($data_cek['no10_barthel'] == "Tergantung orang lain") {
																																			echo 'checked';
																																		} ?>>
					<label class="form-check-label" for="exampleRadios54">
						Tergantung orang lain (skor : 0)
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="no10_barthel" id="exampleRadios55" value="Mandiri" <?php if ($data_cek['no10_barthel'] == "Mandiri") {
																																echo 'checked';
																															} ?>>
					<label class="form-check-label" for="exampleRadios55">
						Mandiri (skor :1)
					</label>
				</div>
				<br />
				<?php
				$no1b = $data_cek['no1_barthel'];
				if ($no1b == "Terkendali/teratur") {
					$no1b = 2;
				} elseif ($no1b == "Kadang-kadang tak terkendali (1x/minggu)") {
					$no1b = 1;
				} else $no1b = 0;

				$no2b = $data_cek['no2_barthel'];
				if ($no2b == "Mandiri") {
					$no2b = 2;
				} elseif ($no1b == "Kadang-kadang tak terkendali (hanya 1x/24jam)") {
					$no2b = 1;
				} else $no2b = 0;

				$no3b = $data_cek['no3_barthel'];
				if ($no3b == "Mandiri") {
					$no3b = 1;
				} else $no3b = 0;

				$no4b = $data_cek['no4_barthel'];
				if ($no4b == "Mandiri") {
					$no4b = 2;
				} elseif ($no4b == "Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain") {
					$no4b = 1;
				} else $no4b = 0;

				$no5b = $data_cek['no5_barthel'];
				if ($no5b == "Mandiri") {
					$no5b = 2;
				} elseif ($no5b == "Perlu ditolong memotong makanan") {
					$no5b = 1;
				} else $no5b = 0;

				$no6b = $data_cek['no6_barthel'];
				if ($no6b == "Mandiri") {
					$no6b = 3;
				} elseif ($no6b == "Bantuan minimal 1 orang") {
					$no6b = 2;
				} elseif ($no6b == "Perlu banyak bantuan untuk bisa duduk (2 orang)") {
					$no6b = 1;
				} else $no6b = 0;

				$no7b = $data_cek['no7_barthel'];
				if ($no7b == "Mandiri") {
					$no7b = 3;
				} elseif ($no7b == "Berjalan dengan bantuan 1 orang") {
					$no7b = 2;
				} elseif ($no7b == "Bisa (pindah) dengan kursi roda") {
					$no7b = 1;
				} else $no7b = 0;

				$no8b = $data_cek['no8_barthel'];
				if ($no8b == "Mandiri") {
					$no8b = 2;
				} elseif ($no8b == "Sebagian dibantu (misal mengancing baju)") {
					$no8b = 1;
				} else $no8b = 0;

				$no9b = $data_cek['no9_barthel'];
				if ($no9b == "Mandiri") {
					$no9b = 2;
				} elseif ($no9b == "Butuh pertolongan") {
					$no9b = 1;
				} else $no9b = 0;

				$no10b = $data_cek['no10_barthel'];
				if ($no10b == "Mandiri") {
					$no10b = 1;
				} else $no10b = 0;
				?>
				<label class="col-form-label">Total Skor : <?php $total_skor_b = array($no1b, $no2b, $no3b, $no4b, $no5b, $no6b, $no7b, $no8b, $no9b, $no10b);
															echo array_sum($total_skor_b); ?>
				</label>
				<!-- <br />
            <div class="form-group row">
                <label class="col-md-1 col-form-label">Total</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="total_skor_barthel" name="total_skor_barthel" placeholder="<?php echo $data_cek['total_skor_barthel']; ?>">
                </div>
            </div> -->
				<br />
				<label class="col-form-label">Skor Barthel Index (Nilai AKS / ADL): </label>
				<br />
				<table>
					<tr>
						<td>20</td>
						<td> :</td>
						<td> Mandiri </td>
					</tr>
					<tr>
						<td>12-19</td>
						<td> :</td>
						<td> Ketergantungan ringan </td>
					</tr>
					<tr>
						<td>9-11</td>
						<td> :</td>
						<td> Ketergantungan sedang</td>
					</tr>
					<tr>
						<td>5-8</td>
						<td> :</td>
						<td> Ketergantungan berat</td>
					</tr>
					<tr>
						<td>0-4</td>
						<td> :</td>
						<td> Ketergantungan total</td>
					</tr>
				</table>
				<input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $data_cek['id_pasien']; ?>" hidden />

			</div>
			<div class="card-footer">
			
				<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
				<a href="?page=view-lansia&kode=<?php echo $data_cek['id_pasien']; ?>" class="btn btn-warning">Kembali</a>
				
				<?php
	} elseif ($data_level == "User") {
		?> <div class="card-body">
		<label class="col-form-label">1. Mengendalikan rangsang BAB</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios28" value="Tidak terkendali/tak teratur (perlu pencahar)" <?php if ($data_cek['no1_barthel'] == "Tidak terkendali/tak teratur (perlu pencahar)") {
																																							echo 'checked';
																																						} ?> disabled>
			<label class="form-check-label" for="exampleRadios28">
				Tidak terkendali/tak teratur (perlu pencahar) (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios29" value="Kadang-kadang tak terkendali (1x/minggu)" <?php if ($data_cek['no1_barthel'] == "Kadang-kadang tak terkendali (1x/minggu)") {
																																						echo 'checked';
																																					} ?> disabled>
			<label class="form-check-label" for="exampleRadios29">
				Kadang-kadang tak terkendali (1x/minggu) (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no1_barthel" id="exampleRadios30" value="Terkendali/teratur" <?php if ($data_cek['no1_barthel'] == "Terkendali/teratur") {
																																echo 'checked';
																															} ?> disabled>
			<label class="form-check-label" for="exampleRadios30">
				Terkendali/teratur (skor : 2)
			</label>
		</div>

		<label class="col-form-label">2. Mengendalikan rangsang BAK</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios31" value="Tak terkendali atau pakai kateter" <?php if ($data_cek['no2_barthel'] == "Tak terkendali atau pakai kateter") {
																																				echo 'checked';
																																			} ?> disabled>
			<label class="form-check-label" for="exampleRadios31">
				Tak terkendali atau pakai kateter (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios32" value="Kadang-kadang tak terkendali (hanya 1x/24jam)" <?php if ($data_cek['no2_barthel'] == "Kadang-kadang tak terkendali (hanya 1x/24jam)") {
																																							echo 'checked';
																																						} ?> disabled>
			<label class="form-check-label" for="exampleRadios32">
				Kadang-kadang tak terkendali (hanya 1x/24jam) (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no2_barthel" id="exampleRadios33" value="Mandiri" <?php if ($data_cek['no2_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios33">
				Mandiri (skor : 2)
			</label>
		</div>

		<label class="col-form-label">3. Membersihkan diri (mencuci wajah, menyikat rambut, mencukur kumis, sikat gigi)</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no3_barthel" id="exampleRadios34" value="Butuh pertolongan orang lain" <?php if ($data_cek['no3_barthel'] == "Butuh pertolongan orang lain") {
																																			echo 'checked';
																																		} ?> disabled>
			<label class="form-check-label" for="exampleRadios34">
				Butuh pertolongan orang lain (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no3_barthel" id="exampleRadios98" value="Mandiri" <?php if ($data_cek['no3_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios98">
				Mandiri (skor : 1)
			</label>
		</div>

		<label class="col-form-label">4. Penggunaan WC (keluar masuk WC, melepas/ memakai celana, cebok, menyiram)</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios35" value="Tergantung pertolongan orang lain" <?php if ($data_cek['no4_barthel'] == "Tergantung pertolongan orang lain") {
																																				echo 'checked';
																																			} ?> disabled>
			<label class="form-check-label" for="exampleRadios35">
				Tergantung pertolongan orang lain (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios36" value="Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain" <?php if ($data_cek['no4_barthel'] == "Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain") {
																																																					echo 'checked';
																																																				} ?> disabled>
			<label class="form-check-label" for="exampleRadios36">
				Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no4_barthel" id="exampleRadios99" value="Mandiri" <?php if ($data_cek['no4_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios99">
				Mandiri (skor : 2)
			</label>
		</div>

		<label class="col-form-label">5. Makan</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios37" value="Tidak mampu" <?php if ($data_cek['no5_barthel'] == "Tidak mampu") {
																															echo 'checked';
																														} ?> disabled>
			<label class="form-check-label" for="exampleRadios37">
				Tidak mampu (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios38" value="Perlu ditolong memotong makanan" <?php if ($data_cek['no5_barthel'] == "Perlu ditolong memotong makanan") {
																																				echo 'checked';
																																			} ?>>
			<label class="form-check-label" for="exampleRadios38">
				Perlu ditolong memotong makanan (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no5_barthel" id="exampleRadios39" value="Mandiri" <?php if ($data_cek['no5_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios39">
				Mandiri (skor : 2)
			</label>
		</div>


		<label class="col-form-label">6. Berubah posisi dari berbaring ke duduk </label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios40" value="Tidak mampu" <?php if ($data_cek['no6_barthel'] == "Tidak mampu") {
																															echo 'checked';
																														} ?> disabled>
			<label class="form-check-label" for="exampleRadios40">
				Tidak mampu (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios41" value="Perlu banyak bantuan untuk bisa duduk (2 orang)" <?php if ($data_cek['no6_barthel'] == "Perlu banyak bantuan untuk bisa duduk (2 orang)") {
																																								echo 'checked';
																																							} ?> disabled>
			<label class="form-check-label" for="exampleRadios41">
				Perlu banyak bantuan untuk bisa duduk (2 orang) (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios42" value="Bantuan minimal 1 orang" <?php if ($data_cek['no6_barthel'] == "Bantuan minimal 1 orang") {
																																		echo 'checked';
																																	} ?> disabled>
			<label class="form-check-label" for="exampleRadios42">
				Bantuan minimal 1 orang (skor : 2)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no6_barthel" id="exampleRadios43" value="Mandiri" <?php if ($data_cek['no6_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios43">
				Mandiri (skor : 3)
			</label>
		</div>

		<label class="col-form-label">7. Berpindah/berjalan </label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios44" value="Tidak mampu" <?php if ($data_cek['no7_barthel'] == "Tidak mampu") {
																															echo 'checked';
																														} ?> disabled>
			<label class="form-check-label" for="exampleRadios44">
				Tidak mampu (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios45" value="Bisa (pindah) dengan kursi roda" <?php if ($data_cek['no7_barthel'] == "Bisa (pindah) dengan kursi roda") {
																																				echo 'checked';
																																			} ?> disabled>
			<label class="form-check-label" for="exampleRadios45">
				Bisa (pindah) dengan kursi roda (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios46" value="Berjalan dengan bantuan 1 orang" <?php if ($data_cek['no7_barthel'] == "Berjalan dengan bantuan 1 orang") {
																																				echo 'checked';
																																			} ?> disabled>
			<label class="form-check-label" for="exampleRadios46">
				Berjalan dengan bantuan 1 orang (skor : 2)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no7_barthel" id="exampleRadios47" value="Mandiri" <?php if ($data_cek['no7_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios47">
				Mandiri (skor : 3)
			</label>
		</div>

		<label class="col-form-label">8. Memakai baju</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios48" value="Tergantung orang lain" <?php if ($data_cek['no8_barthel'] == "Tergantung orang lain") {
																																	echo 'checked';
																																} ?> disabled>
			<label class="form-check-label" for="exampleRadios48">
				Tergantung orang lain (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios49" value="Sebagian dibantu (misal mengancing baju)" <?php if ($data_cek['no8_barthel'] == "Sebagian dibantu (misal mengancing baju)") {
																																						echo 'checked';
																																					} ?> disabled>
			<label class="form-check-label" for="exampleRadios49">
				Sebagian dibantu (misal mengancing baju) (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no8_barthel" id="exampleRadios50" value="Mandiri" <?php if ($data_cek['no8_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios50">
				Mandiri (skor : 2)
			</label>
		</div>

		<label class="col-form-label">9. Naik turun tangga</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios51" value="Tidak mampu" <?php if ($data_cek['no9_barthel'] == "Tidak mampu") {
																															echo 'checked';
																														} ?> disabled>
			<label class="form-check-label" for="exampleRadios51">
				Tidak mampu (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios52" value="Butuh pertolongan" <?php if ($data_cek['no9_barthel'] == "Butuh pertolongan") {
																																echo 'checked';
																															} ?> disabled>
			<label class="form-check-label" for="exampleRadios52">
				Butuh pertolongan (skor : 1)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no9_barthel" id="exampleRadios53" value="Mandiri" <?php if ($data_cek['no9_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios53">
				Mandiri (skor : 2)
			</label>
		</div>

		<label class="col-form-label">10. Mandi</label>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no10_barthel" id="exampleRadios54" value="Tergantung orang lain" <?php if ($data_cek['no10_barthel'] == "Tergantung orang lain") {
																																	echo 'checked';
																																} ?> disabled>
			<label class="form-check-label" for="exampleRadios54">
				Tergantung orang lain (skor : 0)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="no10_barthel" id="exampleRadios55" value="Mandiri" <?php if ($data_cek['no10_barthel'] == "Mandiri") {
																														echo 'checked';
																													} ?> disabled>
			<label class="form-check-label" for="exampleRadios55">
				Mandiri (skor :1)
			</label>
		</div>
		<br />
		<?php
		$no1b = $data_cek['no1_barthel'];
		if ($no1b == "Terkendali/teratur") {
			$no1b = 2;
		} elseif ($no1b == "Kadang-kadang tak terkendali (1x/minggu)") {
			$no1b = 1;
		} else $no1b = 0;

		$no2b = $data_cek['no2_barthel'];
		if ($no2b == "Mandiri") {
			$no2b = 2;
		} elseif ($no1b == "Kadang-kadang tak terkendali (hanya 1x/24jam)") {
			$no2b = 1;
		} else $no2b = 0;

		$no3b = $data_cek['no3_barthel'];
		if ($no3b == "Mandiri") {
			$no3b = 1;
		} else $no3b = 0;

		$no4b = $data_cek['no4_barthel'];
		if ($no4b == "Mandiri") {
			$no4b = 2;
		} elseif ($no4b == "Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain") {
			$no4b = 1;
		} else $no4b = 0;

		$no5b = $data_cek['no5_barthel'];
		if ($no5b == "Mandiri") {
			$no5b = 2;
		} elseif ($no5b == "Perlu ditolong memotong makanan") {
			$no5b = 1;
		} else $no5b = 0;

		$no6b = $data_cek['no6_barthel'];
		if ($no6b == "Mandiri") {
			$no6b = 3;
		} elseif ($no6b == "Bantuan minimal 1 orang") {
			$no6b = 2;
		} elseif ($no6b == "Perlu banyak bantuan untuk bisa duduk (2 orang)") {
			$no6b = 1;
		} else $no6b = 0;

		$no7b = $data_cek['no7_barthel'];
		if ($no7b == "Mandiri") {
			$no7b = 3;
		} elseif ($no7b == "Berjalan dengan bantuan 1 orang") {
			$no7b = 2;
		} elseif ($no7b == "Bisa (pindah) dengan kursi roda") {
			$no7b = 1;
		} else $no7b = 0;

		$no8b = $data_cek['no8_barthel'];
		if ($no8b == "Mandiri") {
			$no8b = 2;
		} elseif ($no8b == "Sebagian dibantu (misal mengancing baju)") {
			$no8b = 1;
		} else $no8b = 0;

		$no9b = $data_cek['no9_barthel'];
		if ($no9b == "Mandiri") {
			$no9b = 2;
		} elseif ($no9b == "Butuh pertolongan") {
			$no9b = 1;
		} else $no9b = 0;

		$no10b = $data_cek['no10_barthel'];
		if ($no10b == "Mandiri") {
			$no10b = 1;
		} else $no10b = 0;
		?>
		<label class="col-form-label">Total Skor : <?php $total_skor_b = array($no1b, $no2b, $no3b, $no4b, $no5b, $no6b, $no7b, $no8b, $no9b, $no10b);
													echo array_sum($total_skor_b); ?>
		</label>
		<!-- <br />
	<div class="form-group row">
		<label class="col-md-1 col-form-label">Total</label>
		<div class="col-sm-1">
			<input type="text" class="form-control" id="total_skor_barthel" name="total_skor_barthel" placeholder="<?php echo $data_cek['total_skor_barthel']; ?>">
		</div>
	</div> -->
		<br />
		<label class="col-form-label">Skor Barthel Index (Nilai AKS / ADL): </label>
		<br />
		<table>
			<tr>
				<td>20</td>
				<td> :</td>
				<td> Mandiri </td>
			</tr>
			<tr>
				<td>12-19</td>
				<td> :</td>
				<td> Ketergantungan ringan </td>
			</tr>
			<tr>
				<td>9-11</td>
				<td> :</td>
				<td> Ketergantungan sedang</td>
			</tr>
			<tr>
				<td>5-8</td>
				<td> :</td>
				<td> Ketergantungan berat</td>
			</tr>
			<tr>
				<td>0-4</td>
				<td> :</td>
				<td> Ketergantungan total</td>
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
		"UPDATE tb_adl_barthel SET 
		no1_barthel='" . $_POST['no1_barthel'] . "',
		no2_barthel='" . $_POST['no2_barthel'] . "',
		no3_barthel='" . $_POST['no3_barthel'] . "',
		no4_barthel='" . $_POST['no4_barthel'] . "',
		no5_barthel='" . $_POST['no5_barthel'] . "',
		no6_barthel='" . $_POST['no6_barthel'] . "',
		no7_barthel='" . $_POST['no7_barthel'] . "',
        no8_barthel='" . $_POST['no8_barthel'] . "',
        no9_barthel='" . $_POST['no9_barthel'] . "',
		no10_barthel='" . $_POST['no10_barthel'] . "'
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