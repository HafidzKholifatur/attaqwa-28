<?= view('dashboard/layouts/header') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-lg-6 col-md-8">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 col-6">Pengaturan</h1>

            <!-- Add User Form -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 b">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Sekolah</h6>
                </div>
                <div class="card-body">
                <?php if(session()->has('success')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show fade-out" role="alert">
                        <?= session('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                    <?php foreach ($settings as $s): ?>
                    <form method="post" action="<?= base_url('/admin/settings/update') ?>">
                    <div class="form-group">
                        <label for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $s['nama_sekolah'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $s['no_telepon'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $s['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= $s['alamat'] ?></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>&nbsp;
                        
                    <?php if(session()->get('role') === 'admin'): ?>
                        <!-- Disable form elements and button if the user role is admin -->
                        <script>
                            document.getElementById('nama_sekolah').disabled = true;
                            document.getElementById('no_telepon').disabled = true;
                            document.getElementById('email').disabled = true;
                            document.getElementById('alamat').disabled = true;
                            document.querySelector('button[type="submit"]').disabled = true;
                        </script>
                    <?php endif; ?>
                    </form>
                    <?php endforeach; ?>
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
    <script src="<?= base_url('dashboard/vendor/jquery/jquery.min.js') ?>"></script>
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