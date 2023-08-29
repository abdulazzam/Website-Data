<?php 

use \Dompdf\dompdf;

include_once('../_header.php'); ?>

<style>
    table {
        table-layout: fixed;
        width: 100%;
    }
</style>

    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Slide</a>

        <h2 class="mb-0"><i class="fa fa-database"></i>  Data Barang</h2>
        <h4>
            <small>Barang</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</a>
                <a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Excel</a>
                
            </div> 
        </h4>
        <form method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" style="table-layout: auto;" id="barang">
                <thead style="background-color: #ec1b23;">
                    <tr class="font-10">
                        <th>
                            <center>
                            <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th style="width: 50px">No. Binder</th>
                        <th style="width: 40px">No. SP3</th>
                        <th style="width: 50px">SP3 Desc</th>
                        <th style="width:10px;">SP3 Date</th>
                        <th style="width:10%;">Buyer</th>
                        <th style="width:10%;">Vendor</th>
                        <th style="width:40px">Item</th>
                        <th style="width:5px">Long Desc Item</th>
                        <th style="width:10%;">Qty</th>
                        <th style="width:10%;">Measurement</th>
                        <th style="width:20px">Currency</th>
                        <th style="width:10%;">Unit Price</th>
                        <th style="width:10%;">Total Price</th>
                        <th style="width:20px">Remarks</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $sql_barang = mysqli_query($con, "SELECT * FROM tb_barang") or die (mysqli_error($con));
                while($data = mysqli_fetch_array($sql_barang)) { ?>
                    <tr>
                        <td align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?=$data['id_barang']?>">
                        </td>
                        <td><?=$data['no_binder']?></td>
                        <td><?=$data['sp']?></td>
                        <td><?=$data['sp_des']?></td>
                        <td><?=$data['sp_date']?></td>
                        <td><?=$data['buyer']?></td>
                        <td><?=$data['vendor']?></td>
                        <td><?=$data['item']?></td>
                        <td><?=$data['ldi']?></td>
                        <td><?=$data['qty']?></td>
                        <td><?=$data['measure']?></td>
                        <td><?=$data['currency']?></td>
                        <td><?=$data['unit_price']?></td>
                        <td><?=$data['total_price']?></td>
                        <td><?=$data['remarks']?></td>
                        <td align="center">
                            <a href="edit.php?id=<?=$data['id_barang']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a></th>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>                    
            </table>
        </div>
        </form>
        <div class="box pull-right">
            <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
    </div>
        <script>
        $(document).ready(function() {
            $('#barang').DataTable({
                "processing": true,
                "serverside": true,
                // "ajax": "barang_data.php",
                scrollX : '500px',
                dom : 'Bfrtip',
                buttons : [
                    {
                        extend : 'pdf',
                        orientation : 'landscape',
                        pageSize : 'Legal',
                        title : 'Data Barang',
                        download : 'open'
                    },
                    'csv', 'excel', 'copy'
                ],
                columnDefs : [
                    {
                        searchable: false,
                        orderable: false,
                        targets: [0, 15]
                    } 
                ],
                order: [1, 'asc']
            });
            $('#select_all').on('click', function () {
                if(this.checked) {
                        $('.check').each(function() {
                            this.checked = true;
                        })
                    } else {
                        $('.check').each(function() {
                            this.checked = false;
                        })
                    }
            });
            $('.check').on('click', function() {
                if($('.check:checked').length == $('.check').length) {
                    $('#select_all').prop('checked', true)
                } else {
                    $('#select_all').prop('checked', false)
                }
            })
        });
        

        function hapus() {
            var conf = confirm('Yakin ingin menghapus data?');
            if(conf) {
                document.proses.action = 'del.php';
                document.proses.submit();
            }
        }
        </script>

<?php include_once('../_footer.php'); ?>    