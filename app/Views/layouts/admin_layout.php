<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title><?= esc(TITLE) ?></title>
    <!-- Favicon icon-->
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
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/dropzone.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/datatables.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/quill-bubble.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/quill-snow.css">

</head>

<body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
        <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Load Header -->
        <?= view('layouts/partials/admin_header') ?>

        <!-- Page Content -->
        <main class="container my-4">
            <?= $this->renderSection('content') ?>
        </main>

        <!-- Load Footer -->
        <?= view('layouts/partials/admin_footer') ?>
    </div>
</body>

</html>