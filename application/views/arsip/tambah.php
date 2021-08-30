<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6" style="margin-left:10px">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container" style="margin-top:20px">
        <div class="col-md-12" style="margin-left:-10px">
            <h1 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Arsip Surat >> Unggah </h1>
            <h5 style="text-align: justifiy; margin-bottom:30px; font-family:'Comic Sans MS', cursive"> Unggah surat yang telah terbit pada form ini untuk diarsipkan.
                <br> Catatan:</br>
                <li style="margin-left: 15px;">Gunakan file berformat PDF</li>
            </h5>
        </div>
    </div>
    <br>


    <h5>
        <div class="row mt-3" style="margin-left:10px; font-family:'Comic Sans MS', cursive">
            <div class="col-md-12">
                <!-- <div class="card"> -->
                <!-- <div class="card-body"> -->
                <!-- untuk menampilkan pesan error-->
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                <?php endif ?>
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