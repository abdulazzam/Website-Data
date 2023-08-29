<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'tb_barang';
 
// Table's primary key
$primaryKey = 'id_barang';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id_barang',  'dt' => 0 ),
    array( 'db' => 'no_binder', 'dt' => 1 ),
    array( 'db' => 'sp',  'dt' => 2 ),
    array( 'db' => 'sp_des',  'dt' => 3 ),
    array( 'db' => 'sp_date',   'dt' => 4 ),
    array( 'db' => 'buyer',     'dt' => 5 ),
    array( 'db' => 'vendor',  'dt' => 6 ),
    array( 'db' => 'item',  'dt' => 7 ),
    array( 'db' => 'ldi',  'dt' => 8 ),
    array( 'db' => 'qty',  'dt' => 9 ),
    array( 'db' => 'measure',  'dt' => 10 ),
    array( 'db' => 'currency',  'dt' => 11 ),
    array( 'db' => 'unit_price',  'dt' => 12 ),
    array( 'db' => 'total_price',  'dt' => 13 ),
    array( 'db' => 'remarks',  'dt' => 14 ),
    array( 'db' => 'id_barang',  'dt' => 15 ),

//     array(
//         'db'        => 'salary',
//         'dt'        => 5,
//         'formatter' => function( $d, $row ) {
//             return '$'.number_format($d);
//         }
//     )
);
 
// SQL server connection information
include_once "../_config/conn.php";
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../_assets/libs/DataTables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
); 