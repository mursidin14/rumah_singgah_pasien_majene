<br>
<section class="page-section">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tracking Pengajuan</h2>
			<h3 class="section-subheading text-muted">Pengajuan <b>Ditemukan</b>, Detail Dibawah:</h3>
		</div>
		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="row">
						<div class="col-lg-7">
							<h3>Keterangan:</h3>
						</div>
					</div>
					<div>
								<?php if ($row['status'] == '1') : ?>
									<h1>Mengajukan...</h1>
								<?php elseif ($row['status'] == '2') : ?>
									<h1>MAAF PENGAJUAN ANDA DITOLAK KARENA SYARAT TIDAK TERPENUHI</h1>
								<?php elseif ($row['status'] == '3') : ?>
									<h1>Verifikasi Berkas / Persyaratan<br>Diproses...</h1>
								<?php elseif ($row['status'] == '4') : ?>
									<h1><br>Diterima</h1>

									<table class="table">
										<thead>
											<th>ID</th>
											<th>Nama</th>
											<th>Kode Kamar</th>
											<th>Tujuan Rumah Sakit</th>
											<th>Rencana Masuk</th>
										</thead>
										<tbody>
											<tr>
												<td><?= $row['id'] ?></td>
												<td><?= $row['nama'] ?></td>
												<td><?= $options[$row['jenis_surat']] ?></td>
												<td><?= $row['tujuan_rs'] ?></td>
												<td><?= $row['rencana_masuk'] ?></td>
												<!-- <td><a href="<?= base_url('application/frontend/cetak.php')?>" target="_blank" onclick="printRow(<?= $row['id']; ?>)">Cetak</a></td> -->
											</tr>
										</tbody>
									</table>
								<?php endif; ?>
					</div>
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
			<img width="50px" height="50px" src="<?= base_url()?>assets/img/maps.png" alt="maps">
		</a>
	</p>
 </section>

<section class="page-section">
</section>

<!-- Modal -->
<div class="modal fade" id="lihatFile<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="fileLampiran">File ID: <?= $row['id'] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $row['file'] ?>"></embed>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="surat_rujukan<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="fileLampiran">File ID: <?= $row['id'] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $row['surat_rujukan'] ?>"></embed>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>
    function printRow(id) {
        // Menggunakan id untuk mencetak baris tabel yang sesuai
        var printContents = document.getElementById("row_" + id).innerHTML;
        var originalContents = document.body.innerHTML;

        // Membuat jendela baru untuk mencetak
        var newWindow = window.open();
        newWindow.document.write('<html><head><title>Cetak Tabel</title></head><body>' + printContents + '</body></html>');

        // Menutup dokumen saat selesai mencetak
        newWindow.document.close();
        newWindow.print();
    }
</script>
