<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Login | MI Attaqwa 28</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('dashboard/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('dashboard/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        .fade-out {
            transition: opacity 0.5s ease-out;
        }
    </style>

</head>

<body class="bg-gradient-success d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center w-100">

            <div class="col-xl-5 col-lg-8 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        
                                        <img class="w-50 h-auto mb-3" src="<?= base_url('img/logo/logo-mi-attaqwa-28.png') ?>" alt="Logo MI Attaqwa 28">
                                        <!-- <h1 class="h5 text-gray-900 mb-3">Selamat Datang!</h1> -->
                                        <h3 class="h5 text-gray-900 mb-3">Silahkan masuk untuk melanjutkan ke dashboard MI Attaqwa 28.</h3>
                                        
                                    </div>
                                    <br>
                                    <!-- Session Username dan Password Tidak Sesuai -->
                                    <?php if (isset($error)) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show fade-out" role="alert">
                                            <?php echo $error; ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                    <!-- End Session Username dan Password Tidak Sesuai -->

                                    <form class="user" action="<?= base_url('/auth') ?>" method="post">
                                    <?= csrf_field() ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user rounded" id="username" name="username" aria-describedby="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user rounded" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <br>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div> -->
                                        <button type="submit" class="btn btn-success btn-user btn-block rounded">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/') ?>">Halaman Utama MI Attaqwa 28</a>
                                    </div>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('dashboard/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('dashboard/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('dashboard/js/sb-admin-2.min.js') ?>"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
