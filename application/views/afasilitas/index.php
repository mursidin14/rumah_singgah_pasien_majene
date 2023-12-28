<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="orange">
                        <i class="material-icons">fact_check</i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Fasilitas</h4>
						<div class="toolbar">
							<!--        Here you can write extra buttons/actions for the toolbar              -->
							<a href="<?= base_url() ?>afasilitas/tambah">
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
										<th>Fasilitas</th>
										<th>Jumlah Fasilitas</th>
										<th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Fasilitas</th>
										<th>Jumlah Fasilitas</th>
										<th class="text-right">Actions</th>
									</tr>
								</tfoot>
								<tbody>

									<?php $no = 1; ?>
									<?php foreach ($data as $key) : ?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $key['fasilitas']; ?></td>
										<td><?= $key['jml_fasilitas']; ?></td>
										<td class="text-right">
											<a href="<?= base_url() ?>afasilitas/edit/<?= $key['id']; ?>"
												class="btn btn-simple btn-primary btn-icon"><i
													class="material-icons">edit</i></a>
											<button class="btn btn-simple btn-warning btn-icon" data-toggle="modal"
												data-target="#hapusIventaris<?= $key['id']; ?>"><i
													class="material-icons">close</i></button>
										</td>
									</tr>
									<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>

						<!-- small modal hapus user -->

						<?php foreach ($data as $key) : ?>
						<div class="modal fade" id="hapusIventaris<?= $key['id']; ?>" tabindex="-1"
							role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-small ">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
												class="material-icons">clear</i></button>
									</div>

									<form method="post"
										action="<?= base_url(); ?>afasilitas/hapus/<?= $key['id']; ?>">
										<div class="modal-body text-center">
											<h5>Apakah anda yakin untuk menghapus Fasilitas ini? </h5>
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
