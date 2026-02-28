<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
require_once("desktype.php");
$deskTypeID = $_POST['deskTypeID'];
if ((trim($deskTypeID) == '') or (!is_numeric($deskTypeID))) {
    echo "<h2>Sorry, you must enter a valid desk type ID number</h2>\n";
} else if (DeskType::findDeskType($deskTypeID)) {
    echo "<h2>Sorry, A desk type with the ID #$deskTypeID already exists</h2>\n";
} else {
    $deskTypeCode = $_POST['deskTypeCode'];
    $deskTypeName = $_POST['deskTypeName'];
    $deskAisleNumber = $_POST['deskAisleNumber'];
    $deskType = new DeskType($deskTypeID, $deskTypeCode, $deskTypeName, $deskAisleNumber);
    $result = $deskType->saveDeskType();
    if ($result) {
        echo "<h2>New DeskType #$deskTypeID successfully added</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that desk type</h2>\n";
    }
}
?>
