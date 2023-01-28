<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '12341234';
$db['db_name'] = 'schema_parks';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

global $connection;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//if ($connection) {
//    echo "connect";
//}

?>