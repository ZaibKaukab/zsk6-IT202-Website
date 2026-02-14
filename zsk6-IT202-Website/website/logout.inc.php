<?php

/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>