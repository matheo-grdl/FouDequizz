<?php
include('auth.php');

function db() {
    static $db = null;
    if ( $db === null ) {
        $dbString = "mysql:dbname=". DB_NAME .";host=". DB_HOST .";port=3306;charset=utf8";
        try {
            $db = new PDO( $dbString, DB_USER, DB_PASS );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            exit($ex->getMessage());
        }
    }
    return $db;
}
