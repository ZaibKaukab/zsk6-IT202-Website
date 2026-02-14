<?php
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/

session_start();
$_SESSION['login'] = true;
$_SESSION['emailAddress'] = 'ronaldo@desks.com';
$_SESSION['pronouns'] = 'He/Him';
$_SESSION['firstName'] = 'Cristiano';
$_SESSION['lastName'] = 'Ronaldo';
$_SESSION['phoneNumber'] = '123-456-7890';

header("Location: main.inc.php");
exit();
?>