<?= view('dashboard/layouts/header') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard MI Attaqwa 28</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Berita</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalBerita ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Berita Publish</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPublished ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Berita Draft</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalDraft ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-spinner fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalUser ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Statistik Berita</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area h-auto">
                                        <canvas id="beritaChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Tabel Berita -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Berita</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="tabelBerita" width="100%" cellspacing="0">
                                            <thead class="text-center">
                                                <tr>
                                                    <th style="width: 5%;">No</th>
                                                    <!-- <th>Thumbnail</th> -->
                                                    <th>Judul</th>
                                                    <th>Status</th>
                                                    <th>Tanggal Dibuat</th>
                                                    <!-- <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'): ?>
                                                    <th style="width: 20%;">Aksi</th>
                                                    <?php endif; ?> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($berita as $news): ?>
                                                    <tr data-id="<?= $news['id'] ?>">
                                                        <td class="text-center"><?= $no++ ?></td>
                                                        <!-- <td>
                                                            <?php if ($news['thumbnail']): ?>
                                                                <img src="<?= base_url('uploads/thumbnail/' . $news['thumbnail']) ?>" alt="Thumbnail" class="img-thumbnail" width="200">
                                                            <?php endif; ?>
                                                        </td> -->
                                                        <td><?= $news['title'] ?></td>
                                                        <td><?= $news['status'] ?></td>
                                                        <td><?= $news['created_at'] ?></td>
                                                        <!-- <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'): ?>
                                                        <td class="text-center">
                                                            <a href="/admin/berita/edit/<?= $news['id'] ?>" class="btn btn-warning btn-sm">
                                                                <i class="fas fa-edit"></i>&nbsp;Edit
                                                            </a>
                                                            <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $news['id'] ?>)">
                                                            <i class="fas fa-trash-alt"></i>&nbsp;Delete</button>
                                                        </td>
                                                        <?php endif; ?> -->
                                                    </tr>
                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

    <!-- Script Statistik Chart -->
    <script>
        var ctx = document.getElementById('beritaChart').getContext('2d');
        var beritaChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php foreach($beritaData as $month => $count): ?>
                        '<?= $month; ?>',
                    <?php endforeach; ?>
                ],
                datasets: [{
                    label: 'Berita Dibuat',
                    data: [
                        <?php foreach($beritaData as $count): ?>
                            <?= $count; ?>,
                        <?php endforeach; ?>
                    ],
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                    // borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1 // Mengatur jarak antar nilai pada sumbu y menjadi 1
                        }
                    }
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tabelBerita').dataTable({
                "aLengthMenu": [[5], [5]],
                "iDisplayLength": 5
            });
        });
    </script>

</body>

</html>