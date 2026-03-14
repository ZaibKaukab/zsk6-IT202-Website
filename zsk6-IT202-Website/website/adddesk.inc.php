<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
require_once("desk.php");

if (!isset($_SESSION['login'])) {
    echo "<h2>Error: You must be logged in to add a desk.</h2>\n";
} else {
    $deskID = $_POST['deskID'];
    if ((trim($deskID) == '') or (!is_numeric($deskID))) {
        echo "<h2>Sorry, you must enter a valid desk ID number</h2>\n";
    } else if (Desk::findDesk($deskID)) {
        echo "<h2>Sorry, A desk with the ID #$deskID already exists</h2>\n";
    } else {
        $deskName = $_POST['deskName'];
        $deskCode = $_POST['deskCode'];
        $deskDescription = $_POST['deskDescription'];
        $deskBrand = $_POST['deskBrand'];
        $deskMaterial = $_POST['deskMaterial'];
        $deskTypeID = !empty($_POST['deskTypeID']) ? $_POST['deskTypeID'] : NULL;
        $deskBuyPrice = $_POST['deskBuyPrice'];
        $deskSellPrice = $_POST['deskSellPrice'];
        
        $desk = new Desk($deskID, $deskCode, $deskName, $deskDescription, $deskBrand, $deskMaterial, $deskTypeID, $deskBuyPrice, $deskSellPrice);
        $result = $desk->saveDesk();
        if ($result)
            echo "<h2>New Desk #$deskID successfully added</h2>\n";
        else
            echo "<h2>Sorry, there was a problem adding that desk</h2>\n";
    }
}
?>