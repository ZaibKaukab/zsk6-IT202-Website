<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
require_once("desk.php");

if (isset($_POST['cancel'])) {
    echo "<h2>Update Canceled</h2>\n";
} else if (!isset($_SESSION['login'])) {
    echo "<h2>Error: You must be logged in to update a desk.</h2>\n";
} else {
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
}
?>