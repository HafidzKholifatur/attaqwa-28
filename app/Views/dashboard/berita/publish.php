<?= view('dashboard/layouts/header') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <h1 class="h3 mb-4 text-gray-800 col-6">Tabel Berita</h1>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-success mb-4 col-auto" href="/admin/berita/create">
                    <i class="fas fa-fw fa-plus"></i>&nbsp;Tambah Berita
                </a>
            </div>
        </div>
        
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal Dibuat</th>
                                <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'): ?>
                                <th style="width: 20%;">Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($berita as $news): ?>
                                <tr data-id="<?= $news['id'] ?>">
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td>
                                        <?php if ($news['thumbnail']): ?>
                                            <img src="<?= base_url('uploads/thumbnail/' . $news['thumbnail']) ?>" alt="Thumbnail" class="img-thumbnail" width="200">
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $news['title'] ?></td>
                                    <td><?= $news['status'] ?></td>
                                    <td><?= $news['created_at'] ?></td>
                                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'): ?>
                                    <td class="text-center">
                                        <a href="/admin/berita/edit/<?= $news['id'] ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>&nbsp;Edit
                                        </a>
                                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $news['id'] ?>)">
                                        <i class="fas fa-trash-alt"></i>&nbsp;Delete</button>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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

    <!-- Modal Konfirmasi Hapus -->
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // Inisialisasi DataTables
        });
    </script>

</body>

</html>