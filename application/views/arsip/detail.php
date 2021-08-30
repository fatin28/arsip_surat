<div class="container">
    <div class="container" style="margin-top:20px">
        <div class="col-md-12" style="margin-left:-10px">
            <h1 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Arsip Surat >> Lihat </h1>
            <div class="card-body" style="margin-left:-16px; margin-top:-20px">
                <h5 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Nomor Surat : <?= $arsip['nomorsurat'] ?></h5>
                <h5 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Kategori : <?= $arsip['kategori'] ?></h5>
                <h5 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Judul : <?= $arsip['judul'] ?></h5>
                <h5 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Waktu Unggah : <?= $arsip['waktu'] ?></h5>
            </div>
            <iframe src="<?= base_url() ?>uploads/<?= $arsip['filesurat'] ?>" width="100%" height="450px"></iframe>
        </div>
        <div class="row mt-3" style="margin-left:10px; font-family:'Comic Sans MS', cursive">
            <div class="col-md-1">
                <a href="<?= base_url(); ?>arsip" class="btn btn-outline-dark floaat-left" style="margin-left:-20px;">
                    << Kembali </a>
            </div>
            <div class="col-md-1">
                <a href="<?= base_url(); ?>arsip/unduh/" class="btn btn-warning float-left" style="margin-left:=10px;"> Unduh </a>
            </div>
            <div class="col-md-1">
                <a href="<?= base_url(); ?>arsip/edit/<?= $arsip['id']; ?>" class="btn btn-info float-left" style="margin-left:-5px;"> Edit/Ganti File </a>
            </div>


        </div>
    </div>
</div>
</div>