
    <div class="container mt-5">
        <a href="<?= base_url('admin//create') ?>"class="btn btn-success mb-2">Create</a>
        <h2> List User </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php if($users): ?>
                            <?php foreach($users as $pengguna): ?>
                        <tr>
                            <td><?= $pengguna['id']; ?></td>
                            <td><?= $pengguna['name']; ?></td>
                            <td><?= $pengguna['email']; ?></td>
                            <td><?= $pengguna['contact_no']; ?></td>
                            <td><a href="<?= base_url('admin/users/edit/'.$pengguna['id']) ?>"class="btn btn-primary mb-2"><i class="fa fa-edit"></i></i></a>
                            <a href="<?= base_url('admin/users/delete/'.$pengguna['id']) ?>"class="btn btn-danger mb-2"><i class="fa fa-trash"></i></a></td>
                        </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
            </div>
   </div>
