<?php
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
}
header("Location: index.php");
?>
