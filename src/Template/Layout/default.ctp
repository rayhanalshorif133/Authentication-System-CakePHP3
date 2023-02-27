<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | <?= $this->fetch('title') ?></title>

    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <?= $this->Html->css('tempusdominus-bootstrap-4.min.css') ?>
    <?= $this->Html->css('icheck-bootstrap.min.css') ?>
    <?= $this->Html->css('adminlte.min.css') ?>
    <?= $this->Html->css('jqvmap.min.css') ?>
    <?= $this->Html->css('OverlayScrollbars.min.css') ?>
    <?= $this->Html->css('daterangepicker.css') ?>
    <?= $this->Html->css('summernote-bs4.min.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <?= $this->element('nav_bar') ?>
        <?= $this->element('side_bar') ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <?= $this->element('header') ?>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <?= $this->fetch('content') ?>
                </div>
            </section>
        </div>
        <?= $this->element('footer') ?>
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
    </div>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('jquery-ui.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('Chart.min.js') ?>
    <?= $this->Html->script('sparkline.js') ?>
    <?= $this->Html->script('jquery.vmap.min.js') ?>
    <?= $this->Html->script('jquery.vmap.usa.js') ?>
    <?= $this->Html->script('jquery.knob.min.js') ?>
    <?= $this->Html->script('moment.min.js') ?>
    <?= $this->Html->script('daterangepicker.js') ?>
    <?= $this->Html->script('tempusdominus-bootstrap-4.min.js') ?>
    <?= $this->Html->script('summernote-bs4.min.js') ?>
    <?= $this->Html->script('jquery.overlayScrollbars.min.js') ?>
    <?= $this->Html->script('adminlte.min.js') ?>
    <?= $this->Html->script('demo.js') ?>
    <?= $this->Html->script('dashboard.js') ?>
</body>

</html>
