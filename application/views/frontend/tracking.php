<br>
<section class="page-section">
	<div class="container">
		<?php if ($this->session->flashdata('message') == TRUE) : ?>
		<?= $this->session->flashdata('message'); ?>
		<?php endif; ?>
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tracking Pengajuan Rumah Singgah</h2>
			<h3 class="section-subheading text-muted">Masukkan NIK Pengajuan untuk <b>Track</b>:</h3>
		</div>
		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<?= form_open('tracking/cari', 'id="tracking", class="card card-sm"') ?>
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" type="search"
								name="trackid" placeholder="Masukkan NIK Pengajuan Anda">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Cari</button>
						</div>
						<!--end of col-->
					</div>
					<?= form_close()?>
				</div>
				<!--end of col-->
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

<section class="page-section">
</section>
