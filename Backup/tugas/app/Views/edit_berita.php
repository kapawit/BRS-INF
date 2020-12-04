<div class="container mt-5">
    <h2>Edit Berita</h2>
    <form method="post" action="<?= base_url('admin/halaman/store'); ?>">
        <div class="form-group">
            <label>Judul Berita</label>
            <input class="form-control" type="text" name="judulhalaman" value="<?= $halaman['judulhalaman'] ?>">
        </div>
        <div class=" form-group">
            <label>Author</label>
            <input class="form-control" type="text" name="author" value="<?= $halaman['author'] ?>">
        </div>
        <div class=" form-group">
            <label>Tanggal Upload</label>
            <input class="form-control" type="date" name="tglposting" value="<?= $halaman['tglposting'] ?>">
        </div>
        <div class=" form-group">
            <label>Isi Halaman</label>
            <textarea class="ckeditor" name="isihalaman"><?= $halaman['isihalaman'] ?></textarea>
        </div>
        <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Edit">
    </form>
</div>