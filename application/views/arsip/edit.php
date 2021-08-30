<div class="container">
    <form action="<?php echo base_url() ?>arsip/proses_arsip" enctype="multipart/form-data" method="post">
        <div class="form-group row">
            <label for="nomorsurat" class="col-sm-2 col-form-label">Nomor Surat</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nomorsurat" name="nomorsurat" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-md-5">
                <select class="form-control" id="kategori" name="kategori">
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="filesurat" class="col-sm-2 col-form-label">File Surat(PDF)</label>
            <div class="col-md-4">
                <input type="file" class="form-control-file" id="filesurat" name="filesurat">
            </div>
        </div>
        <br><br>

        <a href="<?= base_url(); ?>arsip" class="btn btn-outline-dark floaat-left">
            << Kembali </a>
                <button type="submit" name="submit" class="btn btn-success" style="margin-left:15px;"> Selesai </button>
    </form>
    <?php echo form_close() ?>
</div>
</div>
</h5>
</div>