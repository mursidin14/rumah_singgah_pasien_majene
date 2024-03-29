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
                        <h4 class="card-title">Edit Fasilitas</h4>

                        <div class="form-group">
                            <label class="label-control">Fasilitas</label>
                            <input class="form-control" name="fasilitas" id="fasilitas" value="<?= $data['fasilitas']; ?>" type="text" required="true" />
                        </div>

                        <div class="form-group">
                            <label class="label-control">Jumlah Fasilitas</label>
                            <input class="form-control" name="jml_fasilitas" id="jml_fasilitas" value="<?= $data['jml_fasilitas']; ?>" type="text" required="true" />
                        </div>

                        <div class="form-group">
                            <label class="label-control">Keterangan (max 30)</label>
                            <input class="form-control" name="note" id="note" maxlength="30" value="<?= $data['note']; ?>" type="text" required="true" />
                        </div>

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