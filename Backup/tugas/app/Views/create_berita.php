<div class="container mt-5">
    <h2>Create Berita</h2>
    <form method="post" action="<?= base_url('admin/halaman/store'); ?>">
        <div class="form-group">
            <label>Judul Berita</label>
            <input class="form-control" type="text" name="judulhalaman">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input class="form-control" type="text" name="author">
        </div>
        <div class="form-group">
            <label>Tanggal Upload</label>
            <input class="form-control" type="date" name="tglposting">
        </div>
        <div class="form-group">
            <label>Isi Halaman</label>
            <textarea class="ckeditor" name="isihalaman"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Input">
    </form>
</div>