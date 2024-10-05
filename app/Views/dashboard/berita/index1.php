<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Berita</h1>
        <a href="/admin/berita/create" class="btn btn-primary mb-3">Tambah Berita</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($berita as $news): ?>
                    <tr>
                        <td><?= $news['id'] ?></td>
                        <td>
                            <?php if ($news['thumbnail']): ?>
                                <img src="<?= base_url('uploads/thumbnail/' . $news['thumbnail']) ?>" alt="Thumbnail" class="img-thumbnail" width="200">
                            <?php endif; ?>
                        </td>
                        <td><?= $news['title'] ?></td>
                        <td><?= $news['status'] ?></td>
                        <td><?= $news['created_at'] ?></td>
                        <td>
                            <a href="/admin/berita/edit/<?= $news['id'] ?>" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger" onclick="confirmDelete(<?= $news['id'] ?>)">Delete</button>
                            <!-- <form action="/admin/berita/delete/<?= $news['id'] ?>" method="post" style="display:inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus berita ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form id="deleteForm" method="post" style="display:inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            var form = document.getElementById('deleteForm');
            form.action = '/admin/berita/delete/' + id;
            $('#deleteModal').modal('show');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
