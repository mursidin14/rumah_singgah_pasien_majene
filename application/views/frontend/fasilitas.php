
<!-- jumlah kamar & vasilitas -->
<br>
<section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Kamar & Fasilitas</h2>
 			<h3 class="section-subheading text-muted">Rumah Singgah Pasien</h3>
 		</div>
 		<div class="row">
         <?php foreach ($sm as $surat) { ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-caption-subheading text-muted"><?php echo $surat['nama_surat_masuk']; ?></div>
                            <div class="portfolio-item">
                                <img class="img-fluid" src="<?php echo base_url('./uploads/surat_masuk/'.$surat['file_surat_masuk']);?>" alt="struktur-LPM" />
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">
                                        <?php if ($surat['status'] == '1') { ?>
                                            Kamar Kosong
                                           <?php } ?> 
								        <?php if ($surat['status'] == '2') { ?>
                                            Kamar Terisi
                                           <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
         <?php } ?> 
	</div>
		 
 		</div>
 	</div>
 </section>

 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Fasilitas</h2>
             <h3 class="section-subheading text-muted">Rumah Singgah Pasien</h3>
 		</div>
 		<div class="row">
             <div class="col-lg-4 col-sm-6 mb-4">
                <h3>Alat Kesehatan</h3>
                <?php foreach ($sm as $fasilitas) { ?>
                    <ul>
                        <li><?php echo $fasilitas['fas_alkes']; ?></li>
                    </ul>
                <?php } ?> 
             </div>
             <div class="col-lg-4 col-sm-6 mb-4">
                <h3>Elektronik</h3>
                <?php foreach ($sm as $fasilitas) { ?>
                    <ul>
                        <li><?php echo $fasilitas['fas_elektronik']; ?></li>
                    </ul>
                <?php } ?> 
             </div>
             <div class="col-lg-4 col-sm-6 mb-4">
                <h3>Lainnya</h3>
                <?php foreach ($sm as $fasilitas) { ?>
                    <ul>
                        <li><?php echo $fasilitas['keterangan_surat_masuk']; ?></li>
                    </ul>
                <?php } ?> 
             </div>
	    </div>
		 
 		</div>
 	</div>
 </section>

  <!-- kontak & peta -->
  <section style="position: fixed; bottom: 0; right: 0; padding: 50px 20px;">
	<a href="https://wa.me/6281952215980" target="_blank">
		<img width="50px" height="50px" src="<?= base_url()?>assets/img/whatsapp.png" alt="whatsapp">
	</a>
	<p>
		<a href="https://maps.app.goo.gl/LvgAEma9KXFSmam69" target="_blank">
			<img width="50px" height="50px" src="<?= base_url()?>assets/img/maps.png" alt="maps">
		</a>
	</p>
 </section>
