<div class="container">
    <div class="container" style="margin-top:20px">
        <div class="col-md-12" style="margin-left:-10px">
            <h1 style="text-align: justifiy; font-family:'Comic Sans MS', cursive"> Arsip Surat </h1>
            <h5 style="text-align: justifiy; margin-bottom:30px; font-family:'Comic Sans MS', cursive"> Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.
                <br> Klik "Lihat" pada kolom aksi untuk menampilkan surat.</br>
            </h5>
        </div>

        <!-- mt-3 artinya margin top 3 -->
        <div class="row mt-3" style="margin-bottom:10px;">
            <h5 style="margin-left:20px; margin-top:23px; font-family:'Comic Sans MS', cursive"> Cari surat: </h5>
            <div class="col-md-9">
                <form action="" method="post">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" style="border-radius: 20px;" placeholder="search" name="keyword">
                        <button class="btn btn-outline-dark" style="margin-left:10px" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- alert -->
        <?php if (empty($arsip)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Arsip tidak ditemukan
            </div>
        <?php endif; ?>

        <table class="table table-bordered table-hover" id="list_arsip">
            <thead class="thead-light">
                <tr>
                    <th style="text-align: center;">Nomor Surat</th>
                    <th style="text-align: center;">Kategori</th>
                    <th style="text-align: center;">Judul</th>
                    <th style="text-align: center;">Waktu Pengarsipan</th>
                    <th style="text-align: center;">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($arsip as $ar) { ?>
                    <tr>
                        <td> <?= $ar['nomorsurat'] ?></td>
                        <td> <?= $ar['kategori'] ?></td>
                        <td> <?= $ar['judul'] ?></td>
                        <td> <?= $ar['waktu'] ?></td>
                        <td style="text-align: center;">
                            <a href="<?= base_url(); ?>arsip/hapus/<?= $ar['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?');">Hapus</a>
                            <a href="<?= base_url(); ?>arsip/download/<?= $ar['filesurat'] ?>" class="btn btn-warning ">Unduh</a>
                            <a href="<?= base_url(); ?>arsip/detail/<?= $ar['id']; ?>" class="btn btn-primary">Lihat>></a>



                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>arsip/tambah" class="btn btn-outline-dark"> Arsipkan Surat</a>
            </div>
        </div>
    </div>
</div>