<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('admin/common/css') ?>
    </head>
    <body class="app sidebar-mini rtl">
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="logo">
                <h1>Vali</h1>
            </div>
            <div class="login-box">
                <form class="login-form" action="index.html">
                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                    <div class="form-group">
                        <label class="control-label">USERNAME</label>
                        <input class="form-control" type="text" placeholder="Email" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label">PASSWORD</label>
                        <input class="form-control" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="utility">
                            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Create New Account</a></p>
                            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
                        </div>
                    </div>
                    <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                    </div>
                </form>
            </div>
        </section>
        <script src="<?php echo base_url('assets') ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url('assets') ?>/js/popper.min.js"></script>
        <script src="<?php echo base_url('assets') ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets') ?>/js/main.js"></script>
        <script src="<?php echo base_url('assets') ?>/js/plugins/pace.min.js"></script>
    </body>
</html>