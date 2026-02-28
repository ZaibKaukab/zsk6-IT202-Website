<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
require_once("desktype.php");
$deskTypes = DeskType::getDeskTypes();
if ($deskTypes) {
    foreach ($deskTypes as $deskType) {
        $deskTypeID = $deskType->deskTypeID;
        $name = $deskTypeID . " - " . $deskType->deskTypeCode . ", " . $deskType->deskTypeName;
        echo "$name<br>";
    }
} else {
    echo "<h2>No desk types found.</h2>";
}
?>
