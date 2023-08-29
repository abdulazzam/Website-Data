<?php
require_once "../_config/config.php";
if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url()."';</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Procurement</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= base_url('_assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('_assets/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('_assets/css/style.css'); ?>">
    <link rel="icon" href="<?=base_url()?>/_assets/2.png">
    <style>
        body {
            font-family: Roboto;
            color: #4d4d4d;
            background: #212936;
        }

        .jumbotron {
            background: rgba(100%, 100%, 100%, 0.1);
            color: #555;
        }

        .jumbotron label {
            color: #fff;
        }

        .login {
            width: 100px;
            height: 100px;
        }

        .btn-warning {
            background: red;
            border-color: red;
        }

        .btn-warning:hover {
            background: #cf1ecf;
            border-color: #cf1ecf;
        }

        .error-message {
            font-size: 13px;
        }

        .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-14 text-center mt-7 mb-6">
            <img src="../_assets/00.png" width="250" height="250" style="position: ainherit; bottom: 70px;">
            <h3 class="text-white mt-7"> </h3>
                <?php
                if(isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'" ) or die (mysqli_error($con));
                    if(mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='".base_url()."';</script>";
                    } else { ?>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <strong>Login gagal!</strong> Username / password salah
                                </div>
                            </div>                        
                        </div>
                    <?php
                    }
                }    
                ?>

                <div class="col-md-6 col-sm-17 offset-md-3">
                    <div class="jumbotron py-8 pt-4">
                    <h3 class="text-white margin top:10px;" >Login Admin</h3>
                    <form action="" method="post" class="navbar-form" style="margin-top: 20px; margin-bottom: 40px;" >

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="form-group float-right mb-5">
                            <button type="submit" name="login" value="Login" class="btn btn-warning text-white btn-sm">Sign In <i class="fa fa-sign-in"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
    <script src="<?= base_url('_assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('_assets/js/popper.js'); ?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
<?php
}
?>
