
    <div class="container mt-5">
        <a href="<?= base_url('admin/halaman/create') ?>"class="btn btn-success mb-2">Create</a>
        <h2> List Berita</h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Halaman</th>
                            <th>Author</th>
                            <th>Tanggal Posting</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php if($halaman): ?>
                            <?php foreach($halaman as $berita): ?>
                        <tr>
                            <td><?= $berita['id_halaman']; ?></td>
                            <td><?= $berita['judulhalaman']; ?></td>
                            <td><?= $berita['author']; ?></td>
                            <td><?= $berita['tglposting']; ?></td>
                            <td><a href="<?= base_url('admin/halaman/edit/'.$berita['id_halaman']) ?>"class="btn btn-primary mb-2"><i class="fa fa-edit"></i></i></a>
                            <a href="<?= base_url('admin/halaman/delete/'.$berita['id_halaman']) ?>"class="btn btn-danger mb-2"><i class="fa fa-trash"></i></a></td>
                        </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
            </div>
   </div>
