<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">view_list</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Kunjungan</h4>

                        <div class="form-group">
                            <label class="label-control">Nama</label>
                            <input class="form-control" name="nama" id="nama" type="text" value="<?= set_value('nama'); ?>" />
                        </div>
                        <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group">
                            <label class="label-control">Jenis Kelamin</label>
                            <select class="form-control" name="jk" id="jk">
                                <option value="laki-laki" <?= set_select('jk', 'laki-laki'); ?>>Laki-laki</option>
                                <option value="perempuan" <?= set_select('jk', 'perempuan'); ?>>Perempuan</option>
                            </select>
                        </div>
                        <?= form_error('jk', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="text" value="<?= set_value('alamat'); ?>" />
                        </div>
                        <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Tanggal Masuk</label>
                            <input type="date" class="form-control datepicker" name="tgl_masuk" id="tgl_masuk" value="" />
                        </div>
                        <?= form_error('tgl_masuk', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">NOMOR BPJS</label>
                            <input class="form-control" name="no_bpjs" id="no_bpjs" type="text" value="<?= set_value('no_bpjs'); ?>" />
                        </div>
                        <?= form_error('no_bpjs', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Poli Tujuan</label>
                            <input class="form-control" name="poli_tujuan" id="poli_tujuan" type="text" value="<?= set_value('poli_tujuan'); ?>" />
                        </div>
                        <?= form_error('poli_tujuan', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Tanggal Keluar</label>
                            <input type="date" class="form-control datepicker" name="tgl_keluar" id="tgl_keluar" value="" />
                        </div>
                        <?= form_error('tgl_keluar', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Keterangan</label> 
                            <input class="form-control" name="keterangan" id="keterangan" type="text" value="<?= set_value('keterangan'); ?>" />
                        </div>
                        <?= form_error('keterangan', '<div class="text-danger">', '</div>'); ?>

                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>