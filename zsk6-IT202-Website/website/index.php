<?php
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/
?>
<h1>Please login to the Desks Website:</h1>

<form action="validate.inc.php" method="POST">
    <label>Email Address:</label>
    <input type="text" name="emailAddress">
    <br>
    <label>Password:</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Login">
</form>

