<?= view('dashboard/layouts/header') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="">
            <!-- Page Heading -->
            <div class="row">
                <h1 class="h3 mb-4 text-gray-800 col-6">Tambah Berita</h1>
                <div class="col-6 d-flex justify-content-end">
                    <a class="btn btn-info mb-4 col-auto" href="<?= base_url('/admin/berita') ?>">
                        <i class="fas fa-fw fa-table"></i>&nbsp;Tabel Berita
                    </a>
                </div>
            </div>

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

            <!-- Add User Form -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 b">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
                </div>
                <div class="card-body">
                    <form id="beritaForm" action="/admin/berita/store" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control-file col-3" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="summary">Deskripsi Singkat</label>
                            <input type="text" class="form-control" id="summary" name="summary" required>
                            <small class="text-info">Sebagai informasi highlight pada card berita.</small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" id="summernote" name="content"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="status">Status</label> 
                            <?php if($user['role'] == 'admin'): ?>
                            <select class="form-control" id="status" name="status"> 
                                <option value="draft">Draft</option>
                            </select>
                            <?php endif; ?>
                            <?php if($user['role'] == 'super admin'): ?>
                            <select class="form-control" id="status" name="status"> 
                                <option value="draft">Draft</option>
                                <option value="publish">Published</option>
                            </select>
                            <?php endif; ?>
                            <!-- <select class="form-control" id="status" name="status"> 
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>&nbsp;
                        <!-- <a href="<?= base_url('/admin/berita') ?>" class="btn btn-danger">Batal</a> -->
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MI Attaqwa 28 | 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- CDN Summernote JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script> -->
    
    <!-- <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300
            });
        });
    </script> -->


    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 400,
            callbacks: {
                onImageUpload: function(files) {
                    uploadImage(files[0]);
                },
                onMediaDelete: function(target) {
                    deleteImage(target[0].src);
                }
            }
        });
    </script>

    <script>
        function uploadImage(file) {
            var formData = new FormData();
            formData.append('file', file);

            $.ajax({
                url: '/admin/berita/upload-image', // Ganti dengan URL yang sesuai di CI4
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#summernote').summernote('insertImage', response.url);
                },
                error: function(xhr, status, error) {
                    console.error('Upload error:', error);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#beritaForm').submit(function(e) {
                var fileInput = $('#thumbnail');
                var filePath = fileInput.val();
                var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                if (!allowedExtensions.exec(filePath)) {
                    e.preventDefault();
                    $('#alertMessage').text('Format file yang diunggah harus gambar atau video!');
                    $('#alertModal').modal('show');
                    fileInput.val('');
                    return false;
                }
            });
        });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('There was an error initializing the editor:', error);
            });
    </script>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="<?= base_url('dashboard/vendor/jquery/jquery.min.js') ?>"></script> -->
    <script src="<?= base_url('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('dashboard/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('dashboard/js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('dashboard/vendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('dashboard/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('dashboard/js/demo/chart-pie-demo.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('dashboard/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('dashboard/js/demo/datatables-demo.js') ?>"></script>

    <!-- CDN Import Manual -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // Inisialisasi DataTables
        });
    </script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").addClass('fade-out');
            }, 2000);

            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>

</body>

</html>