<?php include "../head.php" ?>
<?php
include('../../../koneksi.php');

$judul_surat = "Surat Pemeriksaan Kesehatan Calon Pengantin";

$query = "SELECT * FROM data_penduduk order by id desc";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0) {
	echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
} else {
	$data_penduduk = [];
	$i = 0;
	while ($data = mysqli_fetch_assoc($result)) {
		$data_penduduk[$i] =  $data;
		$i++;
	}
}

// ambil data desa
$query = "SELECT * FROM profil_desa WHERE id_profil=1";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $data_desa = $data;
    }
}
?>
<style>
	.cari-nik {
		/* background-color: gainsboro; */
		position: relative;
		top: 2px;
		z-index: 90;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		/* top: 10px; */
		overflow-y: scroll;
		max-height: 400px;
	}

	.nik {
		font-size: 14px;
		color: #07a;
		padding: 10px;
		padding-left: 13px;
		border-bottom: 1px solid;
		cursor: pointer;
	}

	.nik:hover {
		background-color: lightblue;
		color: white;
	}
</style>

<body>

	<div id="wrapper">

		<?php include "../nav.php" ?>

		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
						<form role="search" class="navbar-form-custom" action="">
						</form>
					</div>
					<ul class="nav navbar-top-links navbar-right">

						<li>
							<a href="../keluar.php">
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>

				</nav>
			</div>

			<div class="row wrapper border-bottom white-bg page-heading">
				<div class="col-lg-8">
					<h2>Pembuatan Surat</h2>
					<ol class="breadcrumb">
						<li>
							<a href="../index.php">Home</a>
						</li>
						<li>
							<a href="index.php">Pembuatan Surat</a>
						</li>
						<li class="active">
							<strong><?= $judul_surat ?></strong>
						</li>
					</ol>
				</div>
			</div>
			<div class="wrapper wrapper-content animated fadeInRight" id="app">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Membuat <?= $judul_surat ?></h5>
							</div>
							<div class="ibox-content">
								<!-- <i>
									<p class="text-warning">Untuk Membuat Surat Keterangan Belum Menikah Isi Semua Form Berikut</p>
								</i> <br> -->
								<form action="surat.php" target="_blank" method="GET" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-2 control-label">No Agenda</label>
										<div class="col-sm-5">
											<input type="text" name="no_agenda" class="form-control" v-model="no_agenda">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Nik <br>Calon Suami</label>
										<div class="col-sm-5">
											<input required autocomplete="off" name="nik_suami" placeholder="cari NIK" id="dialog_nik-input[0]" type="text" class="form-control" v-model="nik[0]" @focus="dialog_nik_ubah(0,true)" @blur="cekNik(0)">
											<div @mousedown.prevent class="cari-nik" v-if="dialog_nik[0]">
												<template v-for="data in filterPenduduk(0)">
													<div class="nik" @click="pilihNik(data,0)">{{data.nik}}</div>
												</template>
											</div>
											<div v-if="data_orang[0]">
												<table class="table">
													<tr>
														<td>Nama</td>
														<td>{{data_orang[0].nama}}</td>
													</tr>
													<tr>
														<td>No KK</td>
														<td>{{data_orang[0].kk}}</td>
													</tr>
													<tr>
														<td>TTL</td>
														<td>{{data_orang[0].tempat}}, {{data_orang[0].tanggal_lahir}}</td>
													</tr>
													<tr>
														<td>L/P</td>
														<td>{{data_orang[0].jenis_kelamin}}</td>
													</tr>
													<tr>
														<td>Pekerjaan</td>
														<td>{{data_orang[0].pekerjaan}}</td>
													</tr>
												</table>
											</div>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Nik <br>Calon Istri</label>
										<div class="col-sm-5">
											<input required autocomplete="off" name="nik_istri" placeholder="cari NIK" id="dialog_nik-input[1]" type="text" class="form-control" v-model="nik[1]" @focus="dialog_nik_ubah(1,true)" @blur="cekNik(1)">
											<div @mousedown.prevent class="cari-nik" v-if="dialog_nik[1]">
												<template v-for="data in filterPenduduk(1)">
													<div class="nik" @click="pilihNik(data,1)">{{data.nik}}</div>
												</template>
											</div>
											<div v-if="data_orang[1]">
												<table class="table">
													<tr>
														<td>Nama</td>
														<td>{{data_orang[1].nama}}</td>
													</tr>
													<tr>
														<td>No KK</td>
														<td>{{data_orang[1].kk}}</td>
													</tr>
													<tr>
														<td>TTL</td>
														<td>{{data_orang[1].tempat}}, {{data_orang[1].tanggal_lahir}}</td>
													</tr>
													<tr>
														<td>L/P</td>
														<td>{{data_orang[1].jenis_kelamin}}</td>
													</tr>
													<tr>
														<td>Pekerjaan</td>
														<td>{{data_orang[1].pekerjaan}}</td>
													</tr>
												</table>
											</div>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Untuk Keperluan</label>
										<div class="col-sm-5">
											<input type="text" name="keperluan" class="form-control" v-model="keperluan">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Yang Bertandatangan</label>
										<div class="col-sm-5">
											<select type="text" class="form-control" @change="get_yang_ttd()" v-model="opsi_ttd_pilih"> 
												<option v-for="(opsi, index) in opsi_ttd" :value="index">{{opsi.jabatan}}</option>
											</select>
										</div>
									</div>
									<input type="text" name="jabatan_ttd" v-model="jabatan_ttd" hidden>
									<div class="form-group">
										<label class="col-sm-2 control-label">Nama Yang ttd</label>
										<div class="col-sm-5">
											<input type="text" name="yang_ttd" class="form-control" v-model="yang_ttd" readonly="">
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-2 col-sm-offset-4">
											<button class="btn btn-success fa" name="simpan" type="submit"><i class="fa fa-file-pdf-o fa-lg"></i> Buat Surat</button>
											<input type="hidden" name="id" value="<?php echo $cek['id'] ?>">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php include "../footer.php" ?>

		</div>
	</div>
	<script type="text/javascript">
		var data_penduduk = '<?php echo json_encode($data_penduduk); ?>';
		data_penduduk = JSON.parse(data_penduduk);
		var data_desa = '<?= json_encode($data_desa)?>';
		data_desa = JSON.parse(data_desa);
		console.log(data_desa);
		var vm = new Vue({
			el: '#app',
			data: {
				// cata yang beda tiap surat
				pindah_alamat: 'DUSUN JERANJANG',
				pindah_desa: 'TAMAN AYU',
				pindah_kec: 'GERUNG',
				pindah_kab: 'LOMBOK BARAT',
				pindah_prov: 'NTB',
				pindah_tgl: '10 September 2020',

				keperluan: 'Bekerja',
				keterangan: 'Bahwa yang bersangkutan sepengetahuan kami memang benar Menunjukkan sikap dan tingkah laku yang baik',

				// jumlah pasukan
				jml_pasukan: 1,

				nik_bapak: '',
				nik_ibu: '',
				dialog_nik_bapak: false,
				dialog_nik_ibu: false,
				data_bapak: '',

				data_desa: data_desa,
				opsi_ttd: [
					{jabatan: 'Kepala Desa', nama: data_desa.kades},
					{jabatan: 'Sekertaris Desa', nama: data_desa.sekdes},
					{jabatan: 'Kasi Kesejahteraan', nama: data_desa.kasi_kesejahteraan},
					{jabatan: 'Kasi Pelayanan', nama: data_desa.kasi_pelayanan},
					{jabatan: 'Kasi Pemerintahan', nama: data_desa.kasi_pemerintahan},
					{jabatan: 'Kaur Keuangan', nama: data_desa.kaur_keuangan},
					{jabatan: 'Kaur TU', nama: data_desa.kaur_tu},
				],
				opsi_ttd_pilih: 0,
				dialog_nik: [false,false,false,false,false,false,false,false,false,false,false,false,],
				nik: ['','','','','','','','','','','','',],
				data_penduduk: data_penduduk,
				yang_ttd: data_desa.kades,
				jabatan_ttd: 'Kepala Desa',
				no_agenda: 22,
				usaha_nama: 'Jual Ayam',
				usaha_lokasi: 'Pasar Kediri, Desa kediri, Kecamatan Kediri, Kabupaten Lombok Barat',
				usaha_tahun_mulai: '2015',
				data_orang: [],
			},
			methods: {
				filterPenduduk: function(index) {
					nik = this.nik[index];
					return this.data_penduduk.filter((data) => {
						return data.nik.toString().match(nik);
					});
				},
				dialog_nik_ubah: function(index,data){
					Vue.set(this.dialog_nik, index, data);
				},
				pilihNik: function(data,index) {
					if(data.jenis_kelamin == "L"){
						data.jenis_kelamin = "Laki-laki";
					}else{
						data.jenis_kelamin = "Perempuan";
					}
					Vue.set(this.data_orang, index, data);
					Vue.set(this.nik, index, data.nik);
					document.getElementById("dialog_nik-input["+index+"]").blur();
				},
				cekNik: function(index) {
					var data_orang = this.data_orang[index];
					nik = this.nik[index];
					var valid = false;
					for (var i = 0; i < this.data_penduduk.length; i++) {
						if (this.data_penduduk[i].nik.toString().match(nik)) {
							valid = true;
							break;
						}
					}
					if (!valid) {
						data_orang = '';
						nik = '';
					}

					this.dialog_nik_ubah(index, false);
					Vue.set(this.data_orang, index, data_orang);
					Vue.set(this.nik, index, nik);
				},
				ubah: function() {
					var tmp = this.penghasilan_dari.toString();
					tmp.length;
					console.log(tmp.length);
					console.log(Number(tmp));
				},
				get_yang_ttd: function() {
					var i = this.opsi_ttd_pilih;
					this.jabatan_ttd = this.opsi_ttd[i].jabatan;
					this.yang_ttd = this.opsi_ttd[i].nama;
				}
			},
		});
	</script>
</body>

</html>