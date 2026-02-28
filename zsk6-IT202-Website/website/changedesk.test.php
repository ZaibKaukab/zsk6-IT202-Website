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
    echo "<h2>Sorry, you must enter a valid desk ID</h2>\n";
} else if (!Desk::findDesk($deskID)) {
    echo "<h2>Sorry, A desk with ID #$deskID does not exist</h2>\n";
} else {
    $desk = Desk::findDesk($deskID);
    $desk->deskID = $_POST['deskID'];
    $desk->deskCode = $_POST['deskCode'];
    $desk->deskName = $_POST['deskName'];
    $desk->deskDescription = $_POST['deskDescription'];
    $desk->deskBrand = $_POST['deskBrand'];
    $desk->deskMaterial = $_POST['deskMaterial'];
    $desk->deskTypeID = !empty($_POST['deskTypeID']) ? $_POST['deskTypeID'] : NULL;
    $desk->deskBuyPrice = $_POST['deskBuyPrice'];
    $desk->deskSellPrice = $_POST['deskSellPrice'];
    $result = $desk->updateDesk();
    if ($result) {
        echo "<h2>Desk $deskID updated</h2>\n";
    } else {
        echo "<h2>Problem updating desk $deskID</h2>\n";
    }
}
?>
