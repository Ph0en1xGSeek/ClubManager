<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>注册</title>
     <!--Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/ClubManager/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/ClubManager/Public/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/ClubManager/Public/css/style.css" rel="stylesheet">
</head>

<body class="register">
<!-- Start your project here-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark">
        <!--<div class="container">-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>社团管理系统注册</strong>
        </a>

    </nav>
</header>

<!--</div>-->
<main>
    <div class="container center">
        <!--Form with header-->
        <div class="card">
            <div class="card-block">
            <form method="post" action="/ClubManager/index.php/Home/Register/getRegisterInfo">
                <!--Header-->
                <div class="form-header grey-gradient">
                    <h3><i class="fa fa-user"></i> 注册:</h3>
                </div>

                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" id="register-user" class="form-control" name="register-user">
                    <label for="register-user">账号</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="register-password" class="form-control" name="register-password">
                    <label for="register-password">密码</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="register-password-again" class="form-control" name="register-password-again">
                    <label for="register-password-again">重复密码</label>
                </div>

                <div class="text-center">
                    <button class="btn btn-indigo" id="register-register-btn">注册</button>
                </div>
            </form>

            </div>
        </div>
        <!--/Form with header-->
    </div>
</main>
<!--Form with header-->



<!--/Form with header-->
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/ClubManager/Public/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/ClubManager/Public/js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/ClubManager/Public/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/ClubManager/Public/js/mdb.min.js"></script>
</body>

</html>