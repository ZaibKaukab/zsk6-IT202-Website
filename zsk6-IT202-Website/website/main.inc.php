<?php

session_start();
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/

?>
<h1>Welcome to Inventory Helper for the Desks Website!</h1>
<h2>Welcome: <?= $_SESSION['firstName'] ?> <?= $_SESSION['lastName'] ?> (<?= $_SESSION['pronouns'] ?>)</h2>
<p>Your email address is: <?= $_SESSION['emailAddress'] ?></p>
<p>Your phone number is: <?= $_SESSION['phoneNumber'] ?></p>

<a href="logout.inc.php">Logout</a>