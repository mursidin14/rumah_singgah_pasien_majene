
<!-- jumlah kamar & vasilitas -->
<br>
<section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Kamar</h2>
 			<h3 class="section-subheading text-muted">Rumah Singgah Pasien</h3>
 		</div>
 		<div class="row">
            <table class="table">
                <thead>
                    <th class="py-2 px-5">No</th>
                    <th class="py-2 px-5">Kamar</th>
                    <th class="py-2 px-5">Keterangan</th>
                </thead>
                <tbody>
                        <?php
                        $nomor = 1;
                        $totalKamar = 0;
                        foreach ($sm as $surat) {
                        $totalKamar++;
                            ?>  
                            <tr>
                                <td class="py-2 px-5"><?php echo $nomor++ ?></td>
                                <td class="py-2 px-5"><?php echo $surat['kamar']; ?></td>
                                <td class="py-2 px-5">
                                    <?php if ($surat['status'] == '1') { ?>
                                        Kamar Kosong
                                    <?php } ?> 
                                    <?php if ($surat['status'] == '2') { ?>
                                        Kamar Terisi
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?> 
                </tbody>
                <tfoot>
                    <tr>
                        <td class="py-2 px-5"></td>
                        <td class="py-2 px-5">Total :&nbsp;&nbsp; <?php echo $totalKamar ?></td>
                    </tr>
                </tfoot>
            </table>
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