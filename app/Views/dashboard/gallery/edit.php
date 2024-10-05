<?= view('dashboard/layouts/header') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-lg-6 col-md-8">
            <!-- Page Heading -->
            <div class="row">
                <h1 class="h3 mb-4 text-gray-800 col-6">Edit Gambar</h1>
                <div class="col-6 d-flex justify-content-end">
                    <a class="btn btn-info mb-4 col-auto" href="<?= base_url('/admin/gallery') ?>">
                        <i class="fas fa-fw fa-table"></i>&nbsp;Tabel Gambar
                    </a>
                </div>
            </div>

            <!-- Add User Form -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 b">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Gambar</h6>
                </div>
                <div class="card-body">
                    <form action="/admin/gallery/update/<?= $gallery['id']; ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                        <div class="form-group">
                            <label for="nama">Gambar Sekarang</label><br>
                            <img src="/uploads/<?= $gallery['image']; ?>" class="img-thumbnail" width="200">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="nama">Gambar Baru (opsional)</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            <small class="text-danger">biarkan saja jika tidak ingin mengganti gambar.</small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="Admin">Admin</option>
                                <option value="Super Admin">Super Admin</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="desc">Deskripsi Singkat Gambar</label>
                            <input type="text" class="form-control" id="desc" name="desc" placeholder="Masukkan Deskripsi Singkat" value="<?= $gallery['desc']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>&nbsp;
                        <a href="<?= base_url('/admin/gallery') ?>" class="btn btn-danger">Batal</a>
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