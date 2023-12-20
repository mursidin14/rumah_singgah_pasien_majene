<br>
<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pengajuan Rumah Singgha Pasien</h2>
            <h3 class="section-subheading text-muted">Isi Form Pengajuan Dibawah:</h3>
        </div>
        <div class="text-justify pl-5 pr-5">
            <?= form_open_multipart('suratonline/ajukan', 'id="ajukanSurat"') ?>
            <div class="row">
                <div class="col-lg-6">
                    <label for="nik">NIK *</label>
                    <?= form_input(['name' => 'nik', 'id' => 'nik', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan NIK anda']); ?>
                </div>
                <div class="col-lg-6">
                    <label for="nama">Nama *</label>
                    <?= form_input(['name' => 'nama', 'id' => 'nama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="no_hp">No Hp *</label>
                    <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan No Hp anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="tujuan_rs">Tujuan Rumah Sakit *</label>
                    <?= form_input(['type' => 'text', 'name' => 'tujuan_rs', 'id' => 'tujuan_rs', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Tujuan rumah sakit anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="rencana_masuk">Rencana Masuk *</label>
                    <?= form_input(['type' => 'date', 'name' => 'rencana_masuk', 'id' => 'rencana_masuk', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Rencana masuk']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="jenis">Pilih Kode Kamar *</label>
                    <?= form_dropdown('jenis_surat', $options, '', ['id' => 'jenis', 'class' => 'form-control']); ?> 
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">File Berkas/Lampiran <sup class="text-danger">*PDF Recommended! | Max 5MB</sup></label>
                    <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control']) ?>
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">surat rujukan <sup class="text-danger">*PDF Recommended! | Max 5MB</sup></label>
                    <?= form_upload(['name' => 'surat_rujukan', 'id' => 'file', 'class' => 'form-control']) ?>
                </div>
            </div>
            <hr>
            <small>
                <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                <div id="syarat" class="text-danger">
                </div>
            </small>
            <hr>
            <div class="row mt-2">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</section>

<!-- jumlah kamar & vasilitas -->

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
