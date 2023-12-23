 <style>
	html {
		scroll-behavior: smooth;
	}
 </style>
 <!-- Masthead-->
 <header class="masthead">
 	<div class="container">
 		<div class="masthead-subheading">Selamat Datang!</div>
 		<div class="masthead-heading text-uppercase">RSP Majene</div>
 		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('home/#profil')?>">Lihat Profil</a>
 	</div>
 </header>

  <!-- profil-->
  <br>
 <section class="page-section" id="profil">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Profil</h2>
 			<h3 class="section-subheading text-muted">Rumah Singgah Pasien, Kabupaten Majene</h3>
 		</div>
 		<div class="row text-justify pl-5 pr-5">
 			<p><?= $profil[0]['profile'] ?></p>
 		</div>
 	</div>
 </section>
 

 <!-- kontak & peta -->
 <section style="position: fixed; bottom: 0; right: 0; padding: 50px 20px;">
	<a href="https://wa.me/6281952215980" target="_blank">
		<img width="50px" height="50px" src="<?= base_url()?>assets/img/cs.png" alt="whatsapp">
	</a>
	<p>
		<a href="https://maps.app.goo.gl/LvgAEma9KXFSmam69" target="_blank">
			<img width="50px" height="50px" src="<?= base_url()?>assets/img/maps.png" alt="maps">
		</a>
	</p>
 </section>

 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Struktur Organisasi</h2>
 			<h3 class="section-subheading text-muted">Kabupaten Majene</h3>
 		</div>
 		<div class="row">
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#skelurahan">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur-kelurahan" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur Kabupaten Majene</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<!-- <div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slpm">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_lpm'] ?>"
 							alt="struktur-LPM" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur LPM</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div> -->
 			<!-- <div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slinmas">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_linmas'] ?>"
 							alt="struktur-linmas" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur LINMAS</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div> -->
 			<!-- <div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur Pemuda Kelurahan</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div> -->
 			<!-- <div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#rtrw">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['k_rtrw'] ?>"
 							alt="struktur-rtrw" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">RT & RW</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
			 </div>
			</div> -->
 		</div>
	</div>
</section>

	<section class="page-section" id="visi_misi">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Visi & Misi</h2>
				<h3 class="section-subheading text-muted">Kabupaten Majene</h3>
			</div>
			<div class="row text-justify pl-5 pr-5">
				<ul>
					<h3 class="text-uppercase">Visi</h3>
					<li style="list-style: none;">Pelayanan dengan sepenuh hati demi kepuasan masyarakat pengguna sesuai dengan aturan dan prosedur yang berlaku.</li>
				</ul>

				<ol>
				<h3 class="text-uppercase">Misi</h3>
					<li>Meningkatkan kemandirian masyarakat dalam mengatasi masalah kesehatannya.</li>
					<li>Meningkatkan kemampuan individu, keluarga dan masyarakat untuk mempertahankan kesehatannya.</li>
					<li>Meningkatkan kemampuan sumber daya pendukung yang ada dalam keluarga dan masyarakat dalam mengatasi masalah kesehatan.</li>
					<li>Meningkatkan kualitas pelayanan kesehatan dan meringankan biaya keluarga dan pasien.</li>
					<li>Memberikan kemudahan kepada masyarakat dalam pelayanan kesehatan.</li>
				</ol>
			</div>
		</div>
	</section>


 	<!-- <section class="page-section" id="sejarah">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Sejarah Rumah Singgah Pasien</h2>
				<h3 class="section-subheading text-muted">Kabupaten Majene</h3>
			</div>
			<div class="row text-justify pl-5 pr-5">
				<p>Rumah singgah pasien berawal dari gagasan teman-teman mahasiswa yang awalnya lahir dari sebuah keresahan melihat masyarakat dari daerah yang seringkali kesulitan mendapatkan tempat tinggal dikota makassar bahkan tidak jarang ada yang harus menyewa kontrakan yang justru memberatkan keluarga pasien. Program Rumah Singgah Pasien Majene adalah proker prioritas dalam kepengurusan IM3I dalam salah tahun dan IM3I berkomitmen untuk meningkatkan fungsi kontrol.<br>
				Untuk memaksimalkan program RSP ini IM3I (Ikatan Mahasiswa Mandar Majene Indonesia) juga membentuk BK (Badan Khusus) Rumah Singgah pasien sebagai satu badan yg khusus mengatur dan bertanggung jawab atas pelaksanaan, administrasi serta perwatan aset. BK RSP juga dibentuk berdasarkan mekanisme dalam organisasi.
				</p>
			</div>
		</div>
	</section> -->

	<section class="page-section" id="tujuan">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Maksud dan Tujuan RSP</h2>
				<h3 class="section-subheading text-muted">Kabupaten Majene</h3>
			</div>
			<div class="row text-justify pl-5 pr-5">
				<ol type="a">
					<li>Penyelenggaraan Rumah Singgah Pasien dimaksudkan untuk mendekatkan akses dan mencegah terjadinya keterlambatan penanganan bagi pasien di daerah yang dirujuk ke rumah sakitrujukan tingkat lanjut.</li> 
					<li>Penyelenggaraan Rumah Singgah Pasien bertujuan untuk meringankan beban biaya hidup tambahan dan mempermudah akses bagi pasien dan pendamping bagi pasien yang dirujuk di rumah sakit rujukan tingkat lanjut.</li>
				</ol>
			</div>
		</div>
	</section>

	<section class="page-section" id="tatib">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Persyaratan dan Tata Tertib Pengguna RSP</h2>
				<h3 class="section-subheading text-muted">Kabupaten Majene</h3>
			</div>
			<div class="row text-justify pl-5 pr-5">
				<ol type="a">
					<li>Pasien pengguna RSP adalah pasien rawat jalan, baik pasien anak/balita serta dewasa/orang tua yang berasal dari Kabupaten Majene yang berstatus sebagai PBI Kabupaten Majene dibuktikan dengan Kartu Tanda Penduduk (KTP) atau Kartu Keluarga (KK) dan Kartu KIS atau Surat Keterangan tidak mampu (SKTM) dari Desa;</li>
					<li>Pasien dengan BPJS Kesehatan Kelas 3;</li>
					<li>Pasian pengguna RSP terlebih dahulu mendaftar ke Dinas Sosial.</li>
					<li>Pasien dapat mengikutsertakan keluarga/pendamping maksimal 2 (dua) orang, pasien dengan kondisi tertentu seperti lanjut usia (tidak mandiri, susah berjalan, penyakit kronis) wajib membawa pendamping;</li>
					<li>Tidak diperkenankan membawa pendamping	pasien yang masih berusia dini/kurang dari 12 (dua belas) tahun;</li>
					<li>Bagi pasien yang memiliki luka berbau dan dan penyakit menular (TBC akut/tipus/campak/hepatitis/HIV dan lainnya) akan diberikan fasilitas khusus;</li>
					<li>Keluarga pasien tidak diperbolehkan membawa isu politik selama berada di RSP dan memiliki sikap toleransi sesama terhadap perbedaan suku, agama, ras dan budaya (SARA);</li>
					<li>Mengisi formulir dan menandatangani tata tertib RSP serta mempersiapkan materai 1 (satu) lembar (foto copy surat rujukan, KK, BPJS, KTP, SKTM );</li>
					<li>Bagi pasien/keluarga pasien yang tidak menaati aturan/tata tertib yang berlaku, bersedia/siap dikeluarkan dari RSP.</li>
				</ol>
			</div>
		</div>
	</section>
