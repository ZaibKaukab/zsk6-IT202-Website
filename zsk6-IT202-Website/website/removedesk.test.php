<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
require_once("desk.php");
$deskID = $_POST['deskID'];
if ((trim($deskID) == '') or (!is_numeric($deskID))) {
    echo "<h2>Sorry, you must enter a valid deskID</h2>\n";
} else if (!Desk::findDesk($deskID)) {
    echo "<h2>Sorry, A desk with ID #$deskID does not exist</h2>\n";
} else {
    $deskID = $_POST['deskID'];
    $desk = Desk::findDesk($deskID);
    $result = $desk->removeDesk();
    if ($result)
        echo "<h2>Desk $deskID removed</h2>\n";
    else
        echo "<h2>Sorry, problem removing desk $deskID</h2>\n";
}
?>
