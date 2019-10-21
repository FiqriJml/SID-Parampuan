<?php include "../head.php" ?>
<?php
include('../../../koneksi.php');

$judul_surat = "Surat Keterangan Pemilikan";

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
										<label class="col-sm-2 control-label">Nik</label>
										<div class="col-sm-5">
											<input required autocomplete="off" name="nik_bapak" placeholder="cari NIK" id="dialog_nik_bapak-input" type="text" class="form-control" v-model="nik_bapak" @focus="dialog_nik_bapak=true" @blur="cekNik('bapak')">
											<div @mousedown.prevent class="cari-nik" v-if="dialog_nik_bapak">
												<template v-for="data in filterPenduduk(nik_bapak)">
													<div class="nik" @click="pilihNik(data,'bapak')">{{data.nik}}</div>
												</template>
											</div>
											<div v-if="data_bapak">
												<table class="table">
													<tr>
														<td>Nama</td>
														<td>{{data_bapak.nama}}</td>
													</tr>
													<tr>
														<td>No KK</td>
														<td>{{data_bapak.kk}}</td>
													</tr>
													<tr>
														<td>TTL</td>
														<td>{{data_bapak.tempat}}, {{data_bapak.tanggal_lahir}}</td>
													</tr>
													<tr>
														<td>L/P</td>
														<td>{{data_bapak.jenis_kelamin}}</td>
													</tr>
													<tr>
														<td>Pekerjaan</td>
														<td>{{data_bapak.pekerjaan}}</td>
													</tr>
												</table>
											</div>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Keterangan 1</label>
										<div class="col-sm-5">
											<textarea rows="5" type="text" name="keterangan" class="form-control" v-model="keterangan"> </textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Keterangan 2</label>
										<div class="col-sm-5">
											<textarea rows="6" type="text" name="keterangan2" class="form-control" v-model="keterangan2"> </textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Keterangan 3</label>
										<div class="col-sm-5">
											<textarea rows="7" type="text" name="keterangan3" class="form-control" v-model="keterangan3"> </textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Batas Sebelah Utara</label>
										<div class="col-sm-5">
											<input type="text" name="sebelah_utara" class="form-control" v-model="sebelah_utara">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Batas Sebelah Timur</label>
										<div class="col-sm-5">
											<input type="text" name="sebelah_timur" class="form-control" v-model="sebelah_timur">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Batas Sebelah Selatan</label>
										<div class="col-sm-5">
											<input type="text" name="sebelah_selatan" class="form-control" v-model="sebelah_selatan">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Batas Sebelah Barat</label>
										<div class="col-sm-5">
											<input type="text" name="sebelah_barat" class="form-control" v-model="sebelah_barat">
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
				tujuan: 'Provinsi Sulawesi Selatan',
				lamanya: '1 Tahun',
				tanggal_berangkat: '10 September 2020',

				keperluan: 'Bekerja',
				keterangan: 'sebidang Tanah Pekarangan seluas kurang lebih 266 M2 (meter persegi) SPPT Noomor 004-0176.0 yang terletak di Dusun Kerepet, Desa Perampuan, Kecamatan Labuapi, Lombok Barat dengan batas-batas sebagai berikut :',
				keterangan2: 'Selanjutnya tanah pekarangan tersebut berasal dari Warisan dengan seorang bernama Amaq Sane, Pekerjaan Tani, alamat Dusun Kerepet, Desa Perampuan. Adapun perolehan tanah tersebut menurut pengakuan yang bersangkutan terjadi pada tahun 1986 dimana surat-suratnya sudah tidak diketemukan lagi',
				keterangan3: 'Sebagai bahan pertimbangan selanjutnya dikemukakan bahwa diatas tanah tersebut telah berdiri sebuah bangunan semi permanen milik yang bersangkutan dan sejak tahun 1986 hingga saat sekarang ini masih tetap dikuasai dan dimiliki serta dimanfaatkan oleh yang bersangkutan untuk Perumahan tempat tinggal serta pihak lain tidak ada yang berkeberatan/tidak dalam keadaan sengketa',
				
				sebelah_utara: 'Sahdi',
				sebelah_timur: 'Jumaah',
				sebelah_selatan: 'Nuraman',
				sebelah_barat: 'Jalan/Gang',

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
				dialog_nik: false,
				nik: '',
				data_penduduk: data_penduduk,
				yang_ttd: data_desa.kades,
				jabatan_ttd: 'Kepala Desa',
				no_agenda: 22,
				usaha_nama: 'Jual Ayam',
				usaha_lokasi: 'Pasar Kediri, Desa kediri, Kecamatan Kediri, Kabupaten Lombok Barat',
				usaha_tahun_mulai: '2015',
				data_orang: '',
			},
			methods: {
				filterPenduduk: function(nik) {
					return this.data_penduduk.filter((data) => {
						return data.nik.toString().match(nik);
					});
				},
				pilihNik: function(data,ket) {
					if(data.jenis_kelamin == "L"){
						data.jenis_kelamin = "Laki-laki";
					}else{
						data.jenis_kelamin = "Perempuan";
					}
					if(ket == 'bapak'){
						this.data_bapak = data;
						this.nik_bapak = data.nik;
					}else if(ket == 'ibu'){
						this.nik_ibu = data.nik;
					}else{
						this.data_orang = data;
						this.nik = data.nik;
					}
					document.getElementById("dialog_nik_bapak-input").blur();
					// document.getElementById("dialog_nik_ibu-input").blur();
					document.getElementById("dialog_nik-input").blur();
				},
				cekNik: function(ket) {
					console.log(ket);
					var data_orang;
					if(ket == 'bapak'){
						nik = this.nik_bapak;
						data_orang = this.data_bapak;
					}else if(ket == 'ibu'){
						nik = this.nik_ibu;
					}else{
						nik = this.nik;
						data_orang = this.data_orang;
						console.log('jalan');
					}
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

					if(ket == 'bapak'){
						this.data_bapak = data_orang;
						this.dialog_nik_bapak = false;
						this.nik_bapak = nik;
					}else if(ket == 'ibu'){
						nik = this.nik_ibu;
					}else{
						this.data_orang = data_orang;
						this.dialog_nik = false;
						this.nik = nik;
					}
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