<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
require_once("desk.php");
$desks = Desk::getDesks();
if ($desks) {
    echo "<form>";
    echo "<select name='deskID'>";
    foreach ($desks as $desk) {
        $deskID = $desk->deskID;
        $deskName = $desk->deskName;
        $deskBuyPrice = number_format($desk->deskBuyPrice, 2); 
        $deskSellPrice = number_format($desk->deskSellPrice, 2); 
        $option = $deskID . " - " . $deskName . " - $" . $deskBuyPrice . " - $" . $deskSellPrice;
        echo "<option value='$deskID'>$option</option>";
    }
    echo "</select>";
    echo "</form>";
} else {
    echo "<h2>No desks found.</h2>";
}
?>