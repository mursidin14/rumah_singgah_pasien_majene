<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="orange">
                        <i class="material-icons">fact_check</i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Inventaris</h4>
						<div class="toolbar">
							<!--        Here you can write extra buttons/actions for the toolbar              -->
							<a href="<?= base_url() ?>iventaris/tambah">
								<button class="btn btn-info">
									<span class="btn-label">
										<i class="material-icons">check</i>
									</span>
									Tambah
								</button>
							</a>

							<?php if ($this->session->flashdata('success') == TRUE) : ?>
							<div class="alert alert-success">
								<span><?= $this->session->flashdata('success'); ?></span>
							</div>
							<?php endif; ?>

						</div>
						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover"
								cellspacing="0" width="100%" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kamar</th>
										<th>Status</th>
										<th>Update Status</th>
										<th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Kamar</th>
										<th>Status</th>
										<th>Update Status</th>
										<th class="text-right">Actions</th>
									</tr>
								</tfoot>
								<tbody>

									<?php $no = 1; ?>
									<?php foreach ($data as $key) : ?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $key['kamar']; ?></td>
										<td><?= $status[$key['status']]; ?></td>
										<td>
											<button class="btn btn-simple btn-success btn-icon" data-toggle="modal" data-target="#statusKamar<?= $key['id_kamar']; ?>"><i class="material-icons">outbond</i>Update Status</button>
										</td>
										<td class="text-right">
											<a href="<?= base_url() ?>iventaris/edit/<?= $key['id_kamar']; ?>"
												class="btn btn-simple btn-primary btn-icon"><i
													class="material-icons">edit</i></a>
											<button class="btn btn-simple btn-warning btn-icon" data-toggle="modal"
												data-target="#hapusIventaris<?= $key['id_kamar']; ?>"><i
													class="material-icons">close</i></button>
										</td>
									</tr>
									<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>

						<!-- large modal update  -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="statusKamar<?= $key['id_kamar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>iventaris/updateStatusKamar/<?= $key['id_kamar']; ?>">
											<div class="modal-body text-center">
												<h5>Update Status Kamar: <?= $key['kamar'] ?>? </h5>
												<label for="status">Pilih Status</label>
												<div class="radio">
													<label>
														<input type="radio" name="status" value="1" <?= $key['status'] == '1' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['1'] ?>
													</label>
													<label>
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


						<!-- small modal hapus user -->

						<?php foreach ($data as $key) : ?>
						<div class="modal fade" id="hapusIventaris<?= $key['id_kamar']; ?>" tabindex="-1"
							role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-small ">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
												class="material-icons">clear</i></button>
									</div>

									<form method="post"
										action="<?= base_url(); ?>iventaris/hapus/<?= $key['id_kamar']; ?>">
										<div class="modal-body text-center">
											<h5>Apakah anda yakin untuk menghapus iventaris ini? </h5>
										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-simple"
												data-dismiss="modal">Tidak</button>
											<button type="submit" class="btn btn-success btn-simple">Ya</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<!--    end small modal hapus user -->

						<!-- notice modal -->

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
