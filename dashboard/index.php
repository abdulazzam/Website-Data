<?php include_once('../_header.php'); 

function hari_ini()

{
    switch (date('D')) {
        case 'Sun':
            $hari = 'Minggu';
            break;
        case 'Mon':
            $hari = 'Senin';
            break;
        case 'Tue':
            $hari = 'Selasa';
            break;
        case 'Wed':
            $hari = 'Rabu';
            break;
        case 'Thu':
            $hari = 'Kamis';
            break;
        case 'Fri':
            $hari = 'Jum\'at';
            break;
        case 'Sat':
            $hari = 'Sabtu';
            break;

        default:
            $hari = 'Hari tidak diketahui';
            break;
    }

    return $hari;
}
function tanggal_indo()
{
    $bulan  = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $exp    = explode('-', date('d-m-Y'));

    return $exp[0] . ' ' . $bulan[(int) $exp[1]] . ' ' . $exp[2];
}
?>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>
    h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
    line-height: 1.5;
    font-weight: 400;
    font-family: "Lato", Arial, sans-serif;
    color: #000;
    }
    .alert-info {
    color: #000000;
    background-color: #ec1b23;
    /* border-color: #000000 */
    }
    </style>
    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Slide</a>
    <br><br>
        <nav class="navbar navbar-expand-lg">
        <div class="alert alert-info" role="alert">
        <p class="mb-0 text-right"><b><i class="fa fa-calendar"></i> <?= hari_ini(); ?>, <?= tanggal_indo(); ?></b></p>
            <h4 class="alert-heading"><i class="fa fa-info-circle"></i> Selamat Datang <mark><?=$_SESSION['user'];?></mark>di <b>Aplikasi Data Barang</b> </a></h4>
            <!-- <p class="mb-5" style="font-size: 16px;">Selamat datang <mark><?=$_SESSION['user'];?></mark>di website penyimpanan data unit procurement Telin</p> -->
        </div>
    </nav>
        <center>
                
                <img src="../_assets/datbar.jpg" width="350" height="350">
                <h4> Website Penyimpanan Data Barang Unit Procurement Telin</h4>
                </center>
                
        </div>
    </div>

        

<?php include_once('../_footer.php'); ?>