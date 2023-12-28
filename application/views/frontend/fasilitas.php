<br>
 <?php $nomor=1; ?>

 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Fasilitas</h2>
             <h3 class="section-subheading text-muted">Rumah Singgah Pasien</h3>
 		</div>
 		<div class="row">
             <h3>Fasilitas</h3>
             <div class="col-lg-12 col-sm-12 mb-4">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Fasilitas</th>
                        <th>Jumlah</th>
                    </thead>
                    <tbody>
                        <?php foreach ($sm as $fasilitas) { ?>
                            <tr>
                                <td><?php echo $nomor++ ?></td>
                                <td><?php echo $fasilitas['fasilitas']; ?></td>
                                <td><?php echo $fasilitas['jml_fasilitas']; ?></td>
                            </tr>
                        <?php } ?>      
                    </tbody>
                </table>
             </div>
	    </div>
		 
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
			<img style="margin-top: 15px;" width="50px" height="50px" src="<?= base_url()?>assets/img/_maps.png" alt="maps">
		</a>
	</p>
 </section>
