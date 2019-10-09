<?php include "head.php" ?>
<?php
include('../koneksi.php');

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
?>
<!-- VueJs -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
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

		<?php include "nav.php" ?>

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
							<strong>Surat Keterangan Belum Menikah</strong>
						</li>
					</ol>
				</div>
			</div>
			<div class="wrapper wrapper-content animated fadeInRight" id="app">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>Membuat Surat Keterangan Belum Menikah</h5>
							</div>
							<div class="ibox-content">
								<!-- <i>
									<p class="text-warning">Untuk Membuat Surat Keterangan Belum Menikah Isi Semua Form Berikut</p>
								</i> <br> -->
								<form action="surat_keterangan_belum_menikah.php" target="_blank" method="GET" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-2 control-label">Nik</label>
										<div class="col-sm-4">
											<input required autocomplete="off" name="nik" placeholder="cari NIK" id="dialog_nik-input" type="text" class="form-control" v-model="nik" @focus="dialog_nik=true" @blur="cekNik()">
											<div @mousedown.prevent class="cari-nik" v-if="dialog_nik">
												<template v-for="data in filterPenduduk()">
													<div class="nik" @click="pilihNik(data)">{{data.nik}}</div>
												</template>
											</div>
											<div v-if="data_orang">
												<table class="table">
													<tr>
														<td>Nama</td>
														<td>{{data_orang.nama}}</td>
													</tr>
													<tr>
														<td>No KK</td>
														<td>{{data_orang.kk}}</td>
													</tr>
													<tr>
														<td>TTL</td>
														<td>{{data_orang.tempat}}, {{data_orang.tanggal_lahir}}</td>
													</tr>
													<tr>
														<td>L/P</td>
														<td>{{data_orang.jenis_kelamin}}</td>
													</tr>
													<tr>
														<td>Pekerjaan</td>
														<td>{{data_orang.pekerjaan}}</td>
													</tr>
												</table>
											</div>

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">No Surat</label>
										<div class="col-sm-4">
											<input type="text" name="no_surat" class="form-control" v-model="no_surat">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Yang Bertandatangan</label>
										<div class="col-sm-4">
											<input type="text" name="yang_ttd" class="form-control" v-model="yang_ttd">
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

			<?php include "footer.php" ?>

		</div>
	</div>
	<script type="text/javascript">
		var data_penduduk = '<?php echo json_encode($data_penduduk); ?>';
		data_penduduk = JSON.parse(data_penduduk);
		var vm = new Vue({
			el: '#app',
			data: {
				dialog_nik: false,
				nik: '',
				data_penduduk: data_penduduk,
				yang_ttd: 'S A R H A N',
				no_surat: '400',
				data_orang: '',
			},
			methods: {
				filterPenduduk: function() {
					return this.data_penduduk.filter((data) => {
						return data.nik.toString().match(this.nik);
					});
				},
				pilihNik: function(data) {
					this.data_orang = data;
					this.nik = data.nik;
					document.getElementById("dialog_nik-input").blur();
				},
				cekNik: function() {
					var valid = false;
					for (var i = 0; i < this.data_penduduk.length; i++) {
						if (this.data_penduduk[i].nik.toString().match(this.nik)) {
							valid = true;
							break;
						}
					}
					if (!valid) {
						this.data_orang = '';
						this.nik = '';
					}
					this.dialog_nik = false;
				}
			},
		});
	</script>
</body>

</html>