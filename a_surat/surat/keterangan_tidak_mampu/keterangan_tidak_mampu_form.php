<?php 
	include '../template/header.php';
?>
<style type="text/css">
	.clearfix {
	  overflow: auto;
	}
	.text-center{
		text-align: center;
	}
	.text-justify{
		text-align: justify;
	}
	.form-surat{
		background-color: #fff;
		/*padding: 20px 30px;*/
		padding-bottom: 50px;
		margin-bottom: 50px;
	}
	.label-primary{
		/*font-weight: bold;*/
		padding: 12px;
	}
	.label-form{
		/*font-weight: bold;*/
		padding: 8px;
		background-color: #795548;
		color: #fff;
	}
</style>
	<div class="container" id="app">
		<div class="form-surat border-bottom text-center">
			<h2 class="border-bottom label-primary"><strong>Membuat SURAT  KETERANGAN  TIDAK MAMPU / MISKIN</strong></h2>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2 class="text-center"><strong>Data Penduduk</strong></h2>
					<i><p class="text-warning">Untuk Membuat SURAT  KETERANGAN  TIDAK MAMPU / MISKIN Isi Semua Form Berikut</p></i> <br>
					<form class="form-horizontal" action="keterangan_tidak_mampu.php" method="GET" target="_blank">

			<h3 class="label-form">Data Pribadi</h3>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="nomer_surat">nomer surat</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="nomer_surat" id="nomer_surat" v-model="nomer_surat" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="nama">Nama</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="nama" id="nama" v-model="nama" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="tempat_lahir">Tempat Lahir</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" v-model="tempat_lahir" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="tgl_lahir">Tanggal Lahir</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" v-model="tgl_lahir" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="nik">NIK</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="nik" id="nik" v-model="nik" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="jenis_kelamin">Jenis Kelamin</label>
					    <div class="col-sm-8">
					    	<select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" v-model="jenis_kelamin" placeholder="">
					    		<option value="Laki-Laki">Laki-Laki</option>
					    		<option value="Perempuan">Perempuan</option>
					    	</select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="agama">agama</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="agama" id="agama" v-model="agama" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="pekerjaan">pekerjaan</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" v-model="pekerjaan" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="nama_desa">nama_desa</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="nama_desa" id="nama_desa" v-model="nama_desa" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="alamat">alamat</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="alamat" id="alamat" v-model="alamat" placeholder="">
					    </div>
					  </div>

			<h3 class="label-form">Anggota Keluarga</h3>
					  <div class="form-group" v-if="!contoh">
					    <label class="control-label col-sm-4 text-left" for="jml_anggota">Jumlah Anggota Keluarga</label>
					    <div class="col-sm-8">
					      <input type="number" min=0 class="form-control" name="jml_anggota" id="jml_anggota" v-model="anggota.length" @change="anggota_ubah()" placeholder="">
					    </div>
					  </div>
					  <template  v-for="(n,index) in anggota" :key="index" v-if="!contoh">
						  	<div class="form-group border-bottom">
						  		<label class="control-label col-sm-4 text-left">Anggota {{index+1}}</label>
						  	</div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mKet[]">Keterangan</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mKet[]" id="mKet[]" placeholder="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mNama[]">Nama</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mNama[]" id="mNama[]" placeholder="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mJenis_kelamin[]">Jenis Kelamin</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mJenis_kelamin[]" id="mJenis_kelamin[]" placeholder="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mTtl[]">Tempat, Tanggal Lahir</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mTtl[]" id="mTtl[]" placeholder="">
						    </div>
						  </div>
						  <div class="form-group border-top"></div> <br>
					  </template>
					  <template  v-for="(mData,index) in anggota_keluarga" :key="index" v-if="contoh">
						  	<div class="form-group border-bottom">
						  		<label class="control-label col-sm-4 text-left">Anggota {{index+1}}</label>
						  	</div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mKet[]">Keterangan</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mKet[]" id="mKet[]" v-model="mData.ket" placeholder="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mNama[]">Nama</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mNama[]" id="mNama[]" v-model="mData.nama" placeholder="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mJenis_kelamin[]">Jenis Kelamin</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mJenis_kelamin[]" id="mJenis_kelamin[]" v-model="mData.jenis_kelamin" placeholder="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4 text-left" for="mTtl[]">Tempat, Tanggal Lahir</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" name="mTtl[]" id="mTtl[]" v-model="mData.ttl" placeholder="">
						    </div>
						  </div>
						  <div class="form-group border-top"></div> <br>
					  </template>

					  <br>
			<h3 class="label-form">Data Lainnya</h3>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="yang_ttd">Yang Bertanda Tangan</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="yang_ttd" id="yang_ttd" v-model="yang_ttd" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-5 col-sm-10">
					      <button type="submit" class="btn btn-success fa"><i class="fa fa-file-pdf-o fa-lg"></i>&nbsp; Buat Surat</button>
					    </div>
					  </div>
					</form>
				</div>
				<div class="col-md-3"></div>

					  <div class="form-group">
					    <div class="">
					      <button class="btn btn-success fa" @click="contoh_data()">&nbsp; Contoh</button>
					    </div>
					  </div>
			</div>
		</div>
	</div>
<?php 
	include '../template/footer.php';
?>
<script type="text/javascript">
	var data_keluarga
	var data = {
		contoh: false,
		nomer_surat: '401',
		nama: 'HANAN',
		tempat_lahir: 'Bengkel',
		tgl_lahir: '12-11-1981',
		nik: 5201087112780216,
		jenis_kelamin: 'Laki-Laki',
		agama: 'Islam',
		pekerjaan: 'Pedagang',
		nama_desa: 'Bengkel',
		alamat: 'Dusun Bengkel Barat RT 04, Desa Bengkel, Kecamatan Labuapi, Kabupaten Lombok Barat.',
		anggota_keluarga: [],
		anggota: [ {0: 0}],
		yang_ttd: 'H. MUHAMAD IDRUS, SP.',
	}
	var vm = new Vue({
	  el: '#app',
	  data: data,
	  methods: {
	  	hari_ini: function() {
		    var mL = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'Desember'];
		    // var mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
	  		var date = new Date();

	  		return date.getDate() +' '+ mL[date.getMonth()] +' '+ date.getFullYear();
	  	},
	  	anggota_ubah: function() {
	  		this.anggota.pop();
	  		this.anggota.push(this.anggota.length);
	  	},
	  	contoh_data: function() {
	  		var data= [
				{
					nama: 'KARNIATI', jenis_kelamin: 'Perempuan',
					ttl: 'Bengkel, 31-07-1981', ket: 'Istri',
				},
				{
					nama: 'ZIDAN MAULANA', jenis_kelamin: 'Laki-Laki',
					ttl: 'Bengkel, 12-10-2004', ket: 'Anak',
				},
				{
					nama: 'IRWAN SYAH', jenis_kelamin: 'Laki-Laki',
					ttl: 'Bengkel, 13-06-2011', ket: 'Anak ',
				},
				{
					nama: 'ADE YUDISTIRA', jenis_kelamin: 'Laki-Laki',
					ttl: 'Mataram, 29-09-2019', ket: 'Anak ',
				},

			];
			this.anggota_keluarga = data;
			this.contoh = "true"
	  	}
	  },
	});
</script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:22:46 GMT -->
</html>