<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">mail_outline</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Kamar</h4>

                        <div class="form-group">
                            <label class="label-control">Kode Kamar</label>
                            <input class="form-control" name="nama_surat" id="nama_surat" type="text" value="<?= set_value('nama_surat'); ?>" />
                        </div>
                        <?= form_error('nama_surat', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Fasilitas</label>
                            <input class="form-control" name="keterangan_surat" id="keterangan_surat" type="text" <?= set_value('keterangan_surat'); ?> />
                        </div>
                        <?= form_error('keterangan_surat', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Fasilitas Alkes</label>
                            <input class="form-control" name="fas_alkes" id="fas_alkes" type="text" <?= set_value('fas_alkes'); ?> />
                        </div>
                        <?= form_error('fas_alkes', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Fasilitas Elektronik</label>
                            <input class="form-control" name="fas_elektronik" id="fas_elektronik" type="text" <?= set_value('fas_elektronik'); ?> />
                        </div>
                        <?= form_error('fas_elektronik', '<div class="text-danger">', '</div>'); ?>
                        

                        <div class="form-group">
                            <label class="label-control">Gambar</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <!-- <img src="<?= base_url() ?>assets/save.png" alt="..."> -->
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="file_surat" id="file_surat" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('file_surat', '<div class="text-danger">', '</div>'); ?>

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