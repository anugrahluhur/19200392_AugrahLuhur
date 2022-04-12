<form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
            <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
            <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $buku['judul_buku']; ?>">
        </div>
        <div class="form-group">
            <select name="id_kategori" class="form-control form-control-user">
                <option value="">Pilih Kategori</option>
                <?php
                foreach ($kategori as $k) { ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang" value="<?= $buku['pengarang']; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value="<?= $buku['penerbit']; ?>">
        </div>
        <div class="form-group">
            <select name="tahun" class="form-control form-control-user">
                <option value="">Pilih Tahun</option>
                <?php
                for ($i = date('Y'); $i > 1000; $i--) {
                ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $buku['isbn']; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value="<?= $buku['stok']; ?>">
        </div>
        <div class="form-group">
            <input type="file" class="form-control form-control-user" id="image" name="image">
        </div>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url('buku'); ?>" type="button" class="btn btn-secondary"><i class="fas fa-ban"></i> Close</a>
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
    </div>
</form>