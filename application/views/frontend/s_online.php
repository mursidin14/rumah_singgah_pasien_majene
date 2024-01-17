<br>
<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pengajuan Rumah Singgha Pasien</h2>
            <h3 class="section-subheading text-muted">Isi Form Pengajuan Dibawah:</h3>
        </div>
        <div class="text-justify pl-5 pr-5">
            <?= form_open_multipart('suratonline/ajukan', 'id="ajukanSurat"') ?>
            <div class="row">
                <div class="col-lg-6">
                    <label for="nik">NIK *</label>
                    <?= form_input(['name' => 'nik', 'id' => 'nik', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan NIK anda']); ?>
                </div>
                <div class="col-lg-6">
                    <label for="nama">Nama *</label>
                    <?= form_input(['name' => 'nama', 'id' => 'nama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="no_hp">No Hp *</label>
                    <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan No Hp anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="tujuan_rs">Tujuan Rumah Sakit *</label>
                    <?= form_input(['type' => 'text', 'name' => 'tujuan_rs', 'id' => 'tujuan_rs', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Tujuan rumah sakit anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="rencana_masuk">Rencana Masuk *</label>
                    <?= form_input(['type' => 'date', 'name' => 'rencana_masuk', 'id' => 'rencana_masuk', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Rencana masuk']); ?>
                </div>
                <!-- <div class="col-lg-6 mt-2">
                    <label for="jenis">Pilih Kamar *</label>
                    <?= form_dropdown('jenis_surat', $kamar, '', ['id' => 'jenis', 'class' => 'form-control']); ?> 
                </div> -->
                <div class="col-lg-6 mt-2">
                    <label for="jenis">Pilih Kamar*</label>
                    <select name="jenis_surat" id="jenis" class="form-control">
                        <?php foreach ($sm as $row): ?>
                            <?php
                                $isStatusFilled = $row['status'] == '2';
                                $statusLabel = ($isStatusFilled) ? ' (Kamar Terisi)' : ' (Kamar Kosong)';
                            ?>
                            <option value="<?= $row['kamar']; ?>" <?= $isStatusFilled ? 'disabled' : ''; ?>>
                                <?= $row['kamar'] . $statusLabel; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">File KTP <sup class="text-danger">*Max 5MB</sup></label>
                    <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control']) ?>
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">Surat Rujukan <sup class="text-danger">*Max 5MB</sup></label>
                    <?= form_upload(['name' => 'surat_rujukan', 'id' => 'file', 'class' => 'form-control']) ?>
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">Surat Rekomendasi Dinsos<sup class="text-danger">*Max 5MB</sup></label>
                    <?= form_upload(['name' => 'surat_dinsos', 'id' => 'file', 'class' => 'form-control']) ?>
                </div>
            </div>
            <hr>
            <small>
                <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                <div id="syarat" class="text-danger">
                </div>
            </small>
            <hr>
            <div class="row mt-2">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                </div>
            </div>
            <?= form_close() ?>
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
			<img style="margin-top: 15px;" width="50px" height="50px" src="<?= base_url()?>assets/img/_maps.png" alt="maps">
		</a>
	</p>
 </section>

 <script>
     document.addEventListener('DOMContentLoaded', function () {
        var select = document.getElementById('jenis');

        select.addEventListener('change', function () {
            var selectedOption = select.options[select.selectedIndex];
            var kamarStatus = <?= json_encode($status); ?>;
            var isStatusFilled = kamarStatus[selectedOption.value] === '2';

            selectedOption.disabled = isStatusFilled;

            if (isStatusFilled) {
                alert('Pengajuan ditolak karena kamar terisi.');
            }
        });
    });
</script>
