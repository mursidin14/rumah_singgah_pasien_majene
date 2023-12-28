<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">fact_check</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Kamar</h4>

                        <div class="form-group">
                            <label class="label-control">Kamar</label>
                            <input class="form-control" name="kamar" id="kamar" type="text" value="<?= set_value('kamar'); ?>" />
                        </div>
                        <?= form_error('kamar', '<div class="text-danger">', '</div>'); ?>

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