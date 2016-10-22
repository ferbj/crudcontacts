<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
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
$table = 'contactos';
 
// Table's primary key
$primaryKey = 'personaId';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'nombre', 'dt' => 0 ),
    array( 'db' => 'apellido','dt' => 1 ),
    array( 'db' => 'telefono','dt' => 2 ),
    array( 'db' => 'direccion','dt' => 3 ),
    array( 'db' => 'email', 'dt' => 4),
    array( 'db' => 'sexo','dt'  => 5)
   
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'root',
    'db'   => 'agenda',
    'host' => 'localhost'
);

