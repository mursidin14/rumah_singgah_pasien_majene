<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart('arsip/upload_file'); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Arsip</h4>

                        <div class="form-group">
                            <label class="label-control">Keterangan</label>
                            <input class="form-control" name="name" id="nama" type="text" value="<?= set_value('name'); ?>" />
                        </div>
                        <?= form_error('name', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">File</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="userfile" id="foto" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('foto', '<div class="text-danger">', '</div>'); ?>

                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart('arsip/tambah'); ?>
                    <input type="file" name="userfile" />
                    <input type="submit" value="Upload" />
                    <?php echo form_close(); ?>
                        <!--  end card  -->

                </div>
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div> -->