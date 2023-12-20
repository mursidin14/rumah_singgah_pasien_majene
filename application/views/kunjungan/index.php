<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">view_list</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Daftar Kunjungan</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <a href="<?= base_url() ?>kunjungan/tambah">
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
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>JK</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Nomor BPJS</th>
                                        <th>Poli Tujuan</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Keterangan</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $key['nama']; ?></td>
                                            <td><?= $key['jk']; ?></td>
                                            <td><?= $key['alamat']; ?></td>
                                            <td><?= $key['tgl_masuk']; ?></td>
                                            <td><?= $key['no_bpjs']; ?></td>
                                            <td><?= $key['poli_tujuan']; ?></td>
                                            <td><?= $key['tgl_keluar']; ?></td>
                                            <td><?= $key['keterangan']; ?></td>
                                            <td class="text-right">

                                                <a href="<?= base_url() ?>kunjungan/edit/<?= $key['id']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>

                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapusKunjungan<?= $key['id']; ?>"><i class="material-icons">close</i></button>

                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- small modal hapus pegawai -->

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusKunjungan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>kunjungan/hapus/<?= $key['id']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah anda yakin untuk menghapus kunjungan pasien ini? </h5>
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
                        <!--    end small modal hapus pegawai -->
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