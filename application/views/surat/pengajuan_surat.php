<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="orange">
						<i class="material-icons">wysiwyg</i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Pengajuan Rumah Singgah Pasien</h4>
						<div class="toolbar">
						</div>
						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover nowrap overflow-x-auto" cellspacing="0" width="100%" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>File</th>
										<th>Surat Rujukan</th>
										<th>Surat Dinsos</th>
										<th>Status Pengajuan</th>
										<th class="disabled-sorting text-right">Actions</th>
										<th>No Hp</th>
										<th>Tanggal</th>
										<th>Kamar</th>
										<th>Rencana Masuk</th>
										<th>Tujuan RS</th>
									</tr>
								</thead>
								<tbody>

									<?php $no = 1; ?>
									<?php foreach ($data as $key) : ?>
									<?php if($key['status'] !== '5'):?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $key['id']; ?></td>
											<td><?= $key['nama']; ?></td>
											<td>
												<button class="btn btn-simple btn-info" data-toggle="modal" data-target="#lihatfile<?= $key['id']; ?>"><i class="material-icons">remove_red_eye</i></button>
											</td>
											<td>
												<button class="btn btn-simple btn-info" data-toggle="modal" data-target="#surat_rujukan<?= $key['id']; ?>"><i class="material-icons">remove_red_eye</i></button>
											</td>
											<td>
												<button class="btn btn-simple btn-info" data-toggle="modal" data-target="#surat_dinsos<?= $key['id']; ?>"><i class="material-icons">remove_red_eye</i></button>
											</td>
											<td><?= $status[$key['status']]; ?></td>
											<td class="text-right">
												<button class="btn btn-simple btn-success btn-icon" data-toggle="modal" data-target="#statusPengajuan<?= $key['id']; ?>"><i class="material-icons">outbond</i>Update Status</button>
												<button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusPengajuan<?= $key['id']; ?>"><i class="material-icons">delete</i></button>
											</td>
											<td><?= $key['no_hp']; ?></td>
											<td><?= $key['tanggal']; ?></td>
											<td><?= $key['jenis_surat']; ?></td>
											<td><?= $key['rencana_masuk']; ?></td>
											<td><?= $key['tujuan_rs']; ?></td>

										</tr>
										<?php $no++; ?>
									<?php endif; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
 

						<!-- large modal update  -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="statusPengajuan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>surat/updateStatus/<?= $key['id']; ?>">
											<div class="modal-body text-center">
												<h5>Update Status Pengajuan ID: <?= $key['id'] ?>? </h5>
												<label for="status">Pilih Status</label>
												<div class="radio">
													<label style="color: black;">
														<input type="radio" name="status" value="1" <?= $key['status'] == '1' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['1'] ?>
													</label>
													<label style="color: black;">
														<input type="radio" name="status" value="2" <?= $key['status'] == '2' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['2'] ?>
													</label>
												</div>
											</div>
											<div class="modal-footer text-center">
												<button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
												<button type="submit" class="btn btn-info btn-simple">Update</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!--    end large modal update  -->

						<!-- small modal hapus  -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="hapusPengajuan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-small ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>surat/hapusPengajuan/<?= $key['id']; ?>">
											<div class="modal-body text-center">
												<h5>Apakah anda yakin untuk menghapus pengajuan ini? </h5>
											</div>
											<div class="modal-footer text-center">
												<button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
												<button type="submit" class="btn btn-success btn-simple">Ya</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!--    end small modal hapus  -->

						<!-- notice modal -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="surat_dinsos<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notice">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
											<h5 class="modal-title text-center" id="myModalLabel">File Lampiran</h5>
										</div>
										<div class="modal-body">
											<div class="instruction">
												<div class="row">
													<div class="col-md-12">
														<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $key['surat_dinsos'] ?>"></embed>
													</div>
												</div>
											</div>

										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-info btn-round" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

						<!-- notice modal -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="surat_rujukan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notice">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
											<h5 class="modal-title text-center" id="myModalLabel">File Lampiran</h5>
										</div>
										<div class="modal-body">
											<div class="instruction">
												<div class="row">
													<div class="col-md-12">
														<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $key['surat_rujukan'] ?>"></embed>
													</div>

												</div>
											</div>

										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-info btn-round" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="lihatfile<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notice">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
											<h5 class="modal-title text-center" id="myModalLabel">File</h5>
										</div>
										<div class="modal-body">
											<div class="instruction">
												<div class="row">
													<div class="col-md-12">
														<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $key['file'] ?>"></embed>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-info btn-round" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!-- end notice modal -->
					</div>
					<!-- end content-->
				</div>
				<!--  end card  -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
</div>