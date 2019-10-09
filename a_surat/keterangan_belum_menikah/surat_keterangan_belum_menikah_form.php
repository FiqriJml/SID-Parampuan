<?php 
	include '../template/header.php';
?>
<style type="text/css">
	body{
		/*background-color: #ffe;*/
		/*background-color: grey;*/
	}
	/*.container {
		  margin: 0 auto;
  			width: 50%;
		}*/
	.surat{
		width: 20.9cm;
		height: 29.6cm;
		/*background-color: pink;*/
		background-color: #fff;
	}
	.surat h1{
		margin: 0px -15px; 
		padding: 12px;
	}
	.surat-isi{
		padding: 2.5cm 2.5cm 2.5cm 2.5cm;
	}
	.surat-kop{
		border-bottom: solid;
		/*background-color: #ff6;*/
	}
	.surat-badan{
		padding-top: 1cm;
		/*background-color: #fe4;*/
		/*height:100%; display:block;*/
	}
	.surat-ttd{
		/*background-color: #eef;*/
		width: 5cm;
		margin-left: 10.2cm;
	}
	.kop-logo{
		float: left;
	}
	.kop-isi{
		text-align: center;
		font-weight: bold;
	}
	.clearfix {
	  overflow: auto;
	}
	.text-center{
		text-align: center;
	}
	.text-justify{
		text-align: justify;
	}
	.tabel{
		padding-left: 3cm;
		padding-right: 3cm;
	}
	.tabel .label-td{
		width: 3.2cm;
	}
	.garis_bawah{
		border-bottom: solid 2px;
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
</style>
	<div class="container" id="app">
		<div class="form-surat border-bottom text-center">
			<h2 class="border-bottom label-primary"><strong>Membuat Surat Keterangan Belum Menikah</strong></h2>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2 class="text-center"><strong>Data Penduduk</strong></h2>
					<i><p class="text-warning">Untuk Membuat Surat Keterangan Belum Menikah Isi Semua Form Berikut</p></i> <br>
					<form class="form-horizontal" action="surat_keterangan_belum_menikah.php" method="GET" target="_blank">
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
					    <label class="control-label col-sm-4 text-left" for="jenis_kelamin">Jenis Kelamin</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" v-model="jenis_kelamin" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="warganegara">warganegara</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="warganegara" id="warganegara" v-model="warganegara" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="goldar">golongan darah</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="goldar" id="goldar" v-model="goldar" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="agama">agama</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="agama" id="agama" v-model="agama" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="status_perkawinan">status perkawinan</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="status_perkawinan" id="status_perkawinan" v-model="status_perkawinan" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="pekerjaan">pekerjaan</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" v-model="pekerjaan" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-4 text-left" for="alamat">alamat</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="alamat" id="alamat" v-model="alamat" placeholder="">
					    </div>
					  </div>
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
			</div>
		</div>
		<div class="surat container" hidden>
		<h1 class="border-bottom label-primary text-center">Preview Surat</h1>
			<div class="surat-isi">
				<div class="surat-kop clearfix">
					<div class="kop-logo"> 
						<img src="../assets/images/logo_lombok_barat.png" width="80px;">
					</div>
					<div class="kop-isi">
						PEMERINTAH KABUPATEN LOMBOK BARAT<br>
						<!-- K E C A M A T A N  L A B U A P I <br> -->
						KECAMATAN LABUAPI<br>
								DESA PERAMPUAN <br>
						Alamat Jln. Raya Pengsong No.  21  Tlp. 085303700606 Desa Perampuan 
			      <br> E-Mail: desaperampuan@gmail.com Kode Pos 83361
					</div>
				</div>
				<div class="surat-badan">
					<div class="text-center">
						<span class="garis_bawah"><b>SURAT KETERANGAN</b></span> <br>
						<div style="margin-top: 3px;">
						Nomor : {{nomer_surat}}. /&emsp;&emsp;/ PRM / 2019 <br>
						</div>
					</div>
					<br>
					<div class="text-justify">
						<p>&emsp;&emsp;&emsp;Yang bertandatangan dibawah ini Kepala Desa Perampuan, Kecamatan Labuapi, Kabupaten Lombok Barat, menerangkan dengan sebenarnya bahwa:</p>
						<div class="tabel">
							<table border="0">
								<tr>
									<td class="label-td">Nama</td> <td>:&emsp;</td> <td> <b>{{nama}}</b></td>
								</tr>
								<tr>
									<td>Tempat/tgl. lahir</td> <td>:</td> <td>{{tempat_lahir}}, {{tgl_lahir}}</td>
								</tr>
								<tr>
									<td>Jenis kelamin</td> <td>:</td> <td>{{jenis_kelamin}}</td>
								</tr>
								<tr>
									<td>Warganegara</td> <td>:</td> <td>{{warganegara}}</td>
								</tr>
								<tr>
									<td>Golongan darah</td> <td>:</td> <td>{{goldar}}</td>
								</tr>
								<tr>
									<td>Agama</td> <td>:</td> <td>{{agama}}</td>
								</tr>
								<tr valign="top">
									<td>Status Perkawinan</td> <td>:</td> <td>{{status_perkawinan}}</td>
								</tr>
								<tr valign="top">
									<td>Pekerjaan</td> <td>:</td> <td>{{pekerjaan}}</td>
								</tr>
								<tr valign="top">
									<td>Alamat</td> <td>:</td> 
									<td>{{alamat}} </td>
								</tr>
							</table>
						</div>	
						<br>
						<p>&emsp;&emsp;&emsp;Yang namanya tersebut diatas memang benar penduduk yang berdomisili dan bertempat tinggal di wilayah kami Desa Perampuan, Kecamatan Labuapi, Kabupaten Lombok Barat. Sepanjang pengetahuan dan pengecekan kami serta menurut keterangan yang bersangkutan bahwa, yang bersangkutan memang benar sampai saat ini, <strong><i>Belum Menikah</i></strong>.</p>
						<p>&emsp;&emsp;&emsp;Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
					</div>
					<br><br> <br><br>
					<div class="surat-ttd">
						Perampuan, {{hari_ini()}}<br>
						Kepala Desa Perampuan <br> <br><br><br> <br> <br> <br>



							<div class="text-center">
					        <b>(    {{yang_ttd}}     )</b></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	include '../template/footer.php';
?>
<script type="text/javascript">
	var data = {
		nomer_surat: '400',
		nama: 'KHAERUDIN',
		tempat_lahir: 'Perampuan',
		tgl_lahir: '11-07-1996',
		jenis_kelamin: 'Laki-Laki',
		warganegara: 'indonesia',
		goldar: '-',
		agama: 'Islam',
		status_perkawinan: 'Belum Kawin',
		pekerjaan: 'Buruh Harian Lepas',
		alamat: 'Dusun Kerepet, Desa Perampuan, Kecamatan Labuapi, Lombok Barat',
		yang_ttd: 'S A R H A N ',
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
	  },
	});
</script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:22:46 GMT -->
</html>