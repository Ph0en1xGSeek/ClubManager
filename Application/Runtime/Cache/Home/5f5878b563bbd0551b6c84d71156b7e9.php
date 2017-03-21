<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>登录</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/ClubManager/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/ClubManager/Public/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/ClubManager/Public/css/style.css" rel="stylesheet">

</head>

<body  class="loggin">
<!-- Start your project here-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark">
        <!--<div class="container">-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>社团管理系统登录</strong>
        </a>

    </nav>
</header>
<!--Form with header-->

<main>
    <div class="container center">
        <div class="card">
            <div class="card-block">
            <form method="post" action="/ClubManager/index.php/Home/Index/getLoginInfo">
                <!--Header-->
                <div class="form-header blue-gradient">
                    <h3><i class="fa fa-lock"></i> 登录:</h3>
                </div>

                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" id="loggin-user" class="form-control" name="loggin-user">
                    <label for="loggin-user">账号</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="loggin-password" class="form-control" name="loggin-password">
                    <label for="loggin-password">密码</label>
                </div>

                <div class="text-center">
                    <button class="btn btn-blue-grey" id="loggin-loggin-btn" >登录</button>
                </div>
            </form>
                <div class="text-center">
                    <button class="btn btn-deep-orange" id="loggin-register-btn" onclick="toregister()">注册</button>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <!--<p>没有账号？ <a href="#">注册</a></p>-->
                    <p><a href="#">忘记密码</a></p>
                </div>
            </div>
        </div>
    </div>
</main>

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
<script type="text/javascript">
    function  toregister() {
        window.location.href='/ClubManager/index.php/Home/Register/index';
        
    }
</script>
</html>