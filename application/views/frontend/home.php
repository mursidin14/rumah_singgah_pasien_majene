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
 		<a class="btn btn-primary btn-xl text-uppercase portfolio-link" data-toggle="modal" href="#slpm">	Lihat Alur Pendaftaran RSP
		</a>
 	</div>
 </header>

 <!-- kontak & peta -->
 <section style="position: fixed; bottom: 0; right: 0; padding: 50px 20px;">
	<a href="https://wa.me/6281952215980" target="_blank">
		<img width="50px" height="50px" src="<?= base_url()?>assets/img/cs.png" alt="whatsapp">
	</a>
	<p>
		<a href="https://maps.app.goo.gl/LvgAEma9KXFSmam69" target="_blank">
			<img style="margin-top: 15px;" width="50px" height="50px" src="<?= base_url()?>assets/img/_maps.png" alt="maps">
		</a>
	</p>
 </section>

 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Struktur Organisasi & Alur Pelayanan</h2>
 			<h3 class="section-subheading text-muted">Kabupaten Majene</h3>
 		</div>
 		<div class="row justify-content">
 			<div class="col-lg-6 col-sm-12 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#skelurahan">
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur-organisasi" />
 					</a>
 					<div class="portfolio-caption text-center">
 						<div class="portfolio-caption-heading">Sruktur Kabupaten Majene</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 		</div>
	</div>
</section>