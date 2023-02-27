<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo"><b>Admin</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in</p>

                <?php echo $this->Form->create('$user', ['url' => ['action' => 'login'], 'type' => 'post']) ?>
                <fieldset>
                    <?php echo $this->Form->input('email', ['class' => "form-control", 'name' => 'email', "placeholder" => "Email", 'value' => "admin@gmail.com"]) ?>
                    <?php echo $this->Form->input('password', ['class' => "form-control", 'name' => 'password', "placeholder" => "password", 'value' => 'Password']) ?>
                    <div class="row">
                        <div class="col-4 mt-4">
                            <?php echo $this->Form->button(_('Log In'), ['type' => 'submit', 'class' => 'btn btn-primary btn-sm btn-block']) ?>
                        </div>
                    </div>
                </fieldset>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('adminlte.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>
</body>

</html>
