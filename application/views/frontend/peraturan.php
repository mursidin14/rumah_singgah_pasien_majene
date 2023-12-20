<br>
<section class="page-section">
	<div class="container">
		<?php if ($this->session->flashdata('message') == TRUE) : ?>
		<?= $this->session->flashdata('message'); ?>
		<?php endif; ?>
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Arsip & Peraturan</h2>
		</div>
		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<section class="page-section">
						<h3>Download Peraturan</h3>
						<a style="text-decoration: none; margin: auto;" href="<?php echo base_url('uploads/PERBUP.pdf'); ?>" download>
							<i class="fas fa-download download-icon fa-2x"></i> Download Surat
						</a>
					</section>
                    <h3>Arsip</h3>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<!-- Form untuk filter berdasarkan bulan -->
							<form action="<?php echo base_url('peraturan/filterByBulan'); ?>" method="post">
								<label for="bulan">Pilih Bulan</label>
								<select name="bulan" id="bulan">
									<option value="01">Januari</option>
									<option value="02">Februari</option>
									<option value="03">Maret</option>
									<option value="04">April</option>
									<option value="05">Mei</option>
									<option value="06">Juni</option>
									<option value="07">Juli</option>
									<option value="08">Agustus</option>
									<option value="09">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
								</select>
								<button type="submit" style="border: none;">Filter</button>
							</form>
		
							<br>
		
							<!-- Tampilan hasil filter -->
							<?php if(isset($hasil_filter) && !empty($hasil_filter)): ?>
								<table border="1">
									<thead>
										<tr>
											<th style="padding: 5px 7px;">No</th>
											<th style="padding: 5px 7px;">Nama</th>
											<th style="padding: 5px 7px;">Tanggal Pengajuan</th>
											<th style="padding: 5px 7px;">Tanggal Keluar</th>
										</tr>
									</thead>
									<tbody>
										<?php $nomor_urut = 1; ?>
										<?php foreach($hasil_filter as $data): ?>
											<tr>
												<td style="padding: 5px 7px;"><?php echo $nomor_urut; ?></td>
												<td style="padding: 5px 7px;"><?php echo $data->nama; ?></td>
												<td style="padding: 5px 7px;"><?php echo $data->tgl_masuk; ?></td>
												<td style="padding: 5px 7px;"><?php echo $data->tgl_keluar; ?></td>
											</tr>
											<?php $nomor_urut++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							<?php else: ?>
								<p>Tidak ada data yang ditemukan untuk bulan yang dipilih.</p>
							<?php endif; ?>

						</div>
					</div>
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
			<img width="50px" height="50px" src="<?= base_url()?>assets/img/maps.png" alt="maps">
		</a>
	</p>
 </section>
