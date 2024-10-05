<?= view('dashboard/layouts/header') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <h1 class="h3 mb-4 text-gray-800 col-6">Tabel Galeri</h1>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-success mb-4 col-auto" href="<?= base_url('/admin/gallery/create') ?>">
                    <i class="fas fa-fw fa-plus"></i>&nbsp;Tambah Foto
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
                                <th>Gambar</th>
                                <th>Deskripsi Singkat</th>
                                <!-- <th>Role</th> -->
                                <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'): ?>
                                <th style="width: 20%;">Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($gallery as $item): ?>
                                <tr data-id="<?= $item['id'] ?>">
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td style="width: 25%;"><img src="/uploads/<?= $item['image']; ?>" width="150" class="img-thumbnail"></td>
                                    <td class="text-center"><?= $item['desc']; ?></td>
                                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'): ?>
                                    <td class="text-center">
                                        <a href="/admin/gallery/edit/<?= $item['id']; ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>&nbsp;Edit
                                        </a>
                                        <a href="/admin/gallery/delete/<?= $item['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Gambar?')">
                                            <i class="fas fa-trash-alt"></i>&nbsp;Hapus
                                        </a>                                        
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