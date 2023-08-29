<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php"; 

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $binder = trim(mysqli_real_escape_string($con, $_POST['binder']));
    $sp = trim(mysqli_real_escape_string($con, $_POST['sp']));
    $spdes = trim(mysqli_real_escape_string($con, $_POST['spdes']));
    $spdate = trim(mysqli_real_escape_string($con, $_POST['spdate']));
    $buyer = trim(mysqli_real_escape_string($con, $_POST['buyer']));
    $vendor = trim(mysqli_real_escape_string($con, $_POST['vendor']));
    $item = trim(mysqli_real_escape_string($con, $_POST['item']));
    $ldi = trim(mysqli_real_escape_string($con, $_POST['ldi']));
    $qty = trim(mysqli_real_escape_string($con, $_POST['qty']));
    $measure = trim(mysqli_real_escape_string($con, $_POST['measure']));
    $currency = trim(mysqli_real_escape_string($con, $_POST['currency']));
    $up = trim(mysqli_real_escape_string($con, $_POST['up']));
    $tp = trim(mysqli_real_escape_string($con, $_POST['tp']));
    $remarks = trim(mysqli_real_escape_string($con, $_POST['remarks']));
    $sql_cek_binder = mysqli_query($con, "SELECT * FROM tb_barang WHERE no_binder = '$binder'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_binder) > 0) {
        echo "<script>alert('Nomer Barang Sudah Pernah Diisi!'); window.location='add.php';</script>";
    } else {    
        mysqli_query($con, "INSERT INTO tb_barang (id_barang, no_binder, sp, sp_des, sp_date, buyer, vendor, item, ldi, qty, measure, currency, unit_price, total_price, remarks)
                            VALUES ('$uuid', '$binder', '$sp', '$spdes', '$spdate', '$buyer', '$vendor', '$item', '$ldi', '$qty', '$measure', '$currency', '$up', '$tp', '$remarks')") or die (mysqli_error($con));
        echo "<script>window.location='data.php';</script>";                    
    }
} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $binder = trim(mysqli_real_escape_string($con, $_POST['binder']));
    $sp = trim(mysqli_real_escape_string($con, $_POST['sp']));
    $spdes = trim(mysqli_real_escape_string($con, $_POST['spdes']));
    $spdate = trim(mysqli_real_escape_string($con, $_POST['spdate']));
    $buyer = trim(mysqli_real_escape_string($con, $_POST['buyer']));
    $vendor = trim(mysqli_real_escape_string($con, $_POST['vendor']));
    $item = trim(mysqli_real_escape_string($con, $_POST['item']));
    $ldi = trim(mysqli_real_escape_string($con, $_POST['ldi']));
    $qty = trim(mysqli_real_escape_string($con, $_POST['qty']));
    $measure = trim(mysqli_real_escape_string($con, $_POST['measure']));
    $currency = trim(mysqli_real_escape_string($con, $_POST['currency']));
    $up = trim(mysqli_real_escape_string($con, $_POST['up']));
    $tp = trim(mysqli_real_escape_string($con, $_POST['tp']));
    $remarks = trim(mysqli_real_escape_string($con, $_POST['remarks']));
    // $sql_cek_folder = mysqli_query($con, "SELECT * FROM tb_barang WHERE folder_db = '$folder' AND id_barang != '$id'") or die (mysqli_error($con));
    // if(mysqli_num_rows($sql_cek_folder) > 0) {
    //     echo "<script>alert('Nomer Barang Sudah Pernah Diisi!'); window.location='add.php';</script>";
    // } else {
    mysqli_query($con, "UPDATE tb_barang SET no_binder = '$binder', sp = '$sp', sp_des = '$spdes', sp_date = '$spdate', buyer = '$buyer', vendor = '$vendor', item = '$item', ldi = '$ldi', qty = '$qty', measure = '$measure', currency = '$currency', unit_price = '$up', total_price = '$tp', remarks = '$remarks' WHERE id_barang = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";                    
    }
     if(isset($_POST['import'])) {
    $file = $_FILES['file']['name'];
    $ekstensi = explode(".", $file);
    $file_name = "file-".round(microtime(true)).".".end($ekstensi);
    $sumber = $_FILES['file']['tmp_name'];
    $target_dir = "../_file/";
    $target_file = $target_dir.$file_name;
    move_uploaded_file($sumber, $target_file);
    
    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

    $sql = "INSERT INTO tb_barang (id_barang, no_binder, sp, sp_des, sp_date, buyer, vendor, item, ldi, qty, measure, currency, unit_price, total_price, remarks) VALUES";
    for ($i=3; $i <= count($all_data); $i++) {
        $uuid = Uuid::uuid4()->toString();
        $binder = $all_data[$i]['A'];
        $sp = $all_data[$i]['B'];
        $spdes = $all_data[$i]['C'];
        $spdate = $all_data[$i]['D'];
        $buyer = $all_data[$i]['E'];
        $vendor = $all_data[$i]['F'];
        $item = $all_data[$i]['G'];
        $ldi = $all_data[$i]['H'];
        $qty = $all_data[$i]['I'];
        $measure = $all_data[$i]['J'];
        $currency = $all_data[$i]['K'];
        $up = $all_data[$i]['L'];
        $tp = $all_data[$i]['M'];
        $remarks = $all_data[$i]['N'];
        $sql .= " ('$uuid', '$binder', '$sp', '$spdes', '$spdate', '$buyer', '$vendor', '$item', '$ldi', '$qty', '$measure', '$currency', '$up', '$tp', '$remarks'),";
    }
    $sql = substr($sql, 0, -1);
    // echo $sql;
    mysqli_query($con, $sql) or die (mysqli_error($con));

    unlink($target_file);
    echo "<script>window.location='data.php';</script>";
}

?>