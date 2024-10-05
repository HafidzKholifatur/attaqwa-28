<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Berita</h1>
        <a href="/admin/berita" class="btn btn-primary">Tabel Berita</a><br><br>

        <!-- Alert Modal -->
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="alertModalLabel">Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="alertMessage"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <form id="beritaForm" action="/admin/berita/update/<?= $berita['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $berita['title'] ?>" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <br>
                <?php if ($berita['thumbnail']): ?>
                    <img src="<?= base_url('uploads/thumbnail/' . $berita['thumbnail']) ?>" alt="Thumbnail" class="img-thumbnail mt-2" width="200">
                <?php endif; ?>
                <br><br>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
                <small class="text-danger">Kosongkan jika tidak ingin mengganti gambar.</small>
            </div>
            <hr>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea class="form-control" id="content" name="content"><?= $berita['content'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="draft" <?= $berita['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                    <option value="published" <?= $berita['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 300
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#beritaForm').submit(function(e) {
                var fileInput = $('#thumbnail');
                var filePath = fileInput.val();
                if (filePath) {
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                    if (!allowedExtensions.exec(filePath)) {
                        e.preventDefault();
                        $('#alertMessage').text('Format file yang diunggah harus gambar atau video!');
                        $('#alertModal').modal('show');
                        fileInput.val('');
                        return false;
                    }
                }
            });
        });
    </script>
</body>
</html>
