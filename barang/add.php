<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Data Barang</h1>
        <h4>
            <small>Data Barang</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="binder">No Binder</label>
                        <input type="text" name="binder" id="binder" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="sp">SP3</label>
                        <input type="text" name="sp" id="sp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="spdes">SP3 Description</label>
                        <input type="text" name="spdes" id="spdes" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="spdate">SP3 Date</label>
                        <input type="text" name="spdate" id="spdate" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="buyer">Buyer</label>
                        <input type="text" name="buyer" id="buyer" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="vendor">Vendor</label>
                        <input type="text" name="vendor" id="vendor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="item">Item</label>
                        <input type="text" name="item" id="item" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ldi">Long Description Item</label>
                        <input type="text" name="ldi" id="ldi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" name="qty" id="qty" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="measure">Measurement</label>
                        <input type="text" name="measure" id="measure" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <input type="text" name="currency" id="currency" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="up">Unit Price</label>
                        <input type="number" name="up" id="up" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tp">Total Price</label>
                        <input type="number" name="tp" id="tp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="remark">Remarks</label>
                        <input type="text" name="remarks" id="remarks" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" name="add" class="btn btn-success" onClick="return confirm ('Item double, apakah proses tetap dilanjutkan?')"> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php include_once('../_footer.php'); ?>