<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
require_once("desktype.php");
$deskTypes = DeskType::getDeskTypes();
if ($deskTypes) {
    echo "<form>";
    echo "<select name='deskTypeID'>";
    foreach ($deskTypes as $deskType) {
        $deskTypeID = $deskType->deskTypeID;
        $name = $deskTypeID . " - " . $deskType->deskTypeCode . ", " . $deskType->deskTypeName;
        echo "<option value='$deskTypeID'>$name</option>";
    }
    echo "</select>";
    echo "</form>";
} else {
    echo "<h2>No desk types found.</h2>";
}
?>