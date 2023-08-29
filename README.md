<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>
    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Procurement Telin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('_assets/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datetimepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('_assets/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="icon" href="<?=base_url()?>/_assets/2.png">
    <link rel="shortcut icon" href="<?= base_url('_assets/img/favicon.ico'); ?>">
    
</head>
<body>
    <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
    
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <center>
                <a href="<?=base_url('dashboard')?>"><img src="../_assets/telin_2.png" width="170" height="100"></a>
                </center>
                <li>
                    <a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i>    Dashboard</a>
                </li>

                <li>
                    <a href="<?=base_url('barang/data.php')?>"><i class="fa fa-database"></i>     Data Barang</a>
                </li>

                <li>
                    <a href="<?=base_url('about/tentang.php')?>"><i class="fa fa-search"></i>     About</a>
                </li>

                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger"><i class="fa fa-reply"></i>     Logout</span></a>
                </li>

                <!-- <li>
                    <a href="<?=base_url('obat/data.php')?>">logout</span></a>
                </li> -->
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                

