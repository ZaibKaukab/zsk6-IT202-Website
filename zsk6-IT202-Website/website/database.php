<?php
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/
function getDB($echo_mode = false) {
    $host = 'localhost';
    $port = 3306;
    $dbname = 'desks';
    $username = 'desks_user';
    $password = 'DesksHelper';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli($host, $username, $password, $dbname, $port);
        error_log("Database connection successful to " . $host);
        if ($echo_mode) echo "Database connection successful to " . $host;
        return $db;
    } catch (mysqli_sql_exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        if ($echo_mode) echo "Database connection failed: " . $e->getMessage();
    }
}
// getDB(true);
?>
