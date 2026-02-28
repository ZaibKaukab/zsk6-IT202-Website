<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
require_once("desk.php");
$desks = Desk::getDesks();
if ($desks) {
    foreach ($desks as $desk) {
        $deskID = $desk->deskID;
        $deskName = $desk->deskName;
        $deskBuyPrice = $desk->deskBuyPrice;
        $deskSellPrice = $desk->deskSellPrice;
        $option = $deskID . " - " . $deskName . " - " . $deskBuyPrice . " - " . $deskSellPrice;
        echo "$option<br>";
    }
} else {
    echo "<h2>No desks found.</h2>";
}
?>
