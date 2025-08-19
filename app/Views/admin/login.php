<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc(TITLE) ?></title>

    <link rel="icon" href="<?= base_url(FAVICON); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap"
        rel="stylesheet">
    <!-- Flag icon css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flag-icon.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/iconly-icon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bulk-style.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/themify.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fontawesome-min.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/weather-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/slick-theme.css">
    <!-- App css -->
    <link id="color" rel="stylesheet" href="<?= base_url('assets/'); ?>css/color-1.css" media="screen">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

</head>
<style>
    .img-fluid {
        height: 86px !important;
    }
</style>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
        <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="#"><img class="img-fluid for-light m-auto" src="<?= base_url(LOGO) ?>" alt="looginpage"><img class="img-fluid for-dark" src="<?= base_url(LOGO) ?>" alt="logo"></a></div>
                        <div class="login-main">
                          <p class="text-dark"><?= $message ?? '' ?></p>
                            <form class="theme-form" action="<?= base_url('admin/login') ?>" method="POST">
                                <h2 class="text-center">Sign in to account</h2>
                                <p class="text-center">Enter your userid & password to login</p>

                                <div class="form-group">
                                    <label class="col-form-label">User ID</label>
                                    <input class="form-control" type="text" name="user_id" required placeholder="User ID">
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required placeholder="Enter Password">
                                    </div>
                                </div>

                                <p class="mt-4 mb-0 text-center">
                                    <button type="submit" class="btn btn-primary ms-2">Login</button>
                                </p>
                            </form>

                            <!-- <div class="login-social-title d-none">
                                    <h6>Or Sign in with </h6>
                                </div>
                                <div class="form-group d-none">
                                    <ul class="login-social">
                                        <li><a href="https://www.linkedin.com" target="_blank"><i class="icon-linkedin"></i></a></li>
                                        <li><a href="https://twitter.com" target="_blank"><i class="icon-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com" target="_blank"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <p class="mt-4 d-none mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery-->
        <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
        <!-- bootstrap js-->
        <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js" defer=""></script>
        <script src="<?= base_url('assets/'); ?>js/popper.min.js" defer=""></script>
        <!--fontawesome-->
        <script src="<?= base_url('assets/'); ?>js/fontawesome-min.js"></script>
        <!-- password_show-->
        <script src="<?= base_url('assets/'); ?>js/password.js"></script>
        <!-- custom script -->
        <script src="<?= base_url('assets/'); ?>js/script.js"></script>
    </div>

</body>

</html>