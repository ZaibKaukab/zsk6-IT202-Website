<?php
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/
error_log('$_POST ' . print_r($_POST, true));
require_once('database.php');
$emailAddress = $_POST['email_address'];
$password = $_POST['password'];
$query = "SELECT first_name, last_name, pronouns, email_address, phone_number FROM desk_users " .
    "WHERE email_address = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns, $emailAddr, $phoneNumber);
$fetched = $stmt->fetch();
$db->close();
$name = "$firstName $lastName";
if ($fetched && isset($name)) {
    $_SESSION['login'] = $name;
    $_SESSION['emailAddress'] = $emailAddr;
    $_SESSION['pronouns'] = $pronouns;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['phoneNumber'] = $phoneNumber;
    header("Location: index.php");
} else {
    echo "<h2>Sorry, login incorrect for the Desk Inventory Website</h2>\n";
    echo "<p>The email or password you entered does not match our records.</p>\n";
    echo "<a href=\"index.php\">Return to Login Page</a>\n";
}
?>
