<?php
/* Zaib Kaukab
   2026-02-28
   IT202-004
   Phase 2: CRUD Categories and Items
   zsk6@njit.edu
*/
error_log('$_POST ' . print_r($_POST, true));
require_once("desktype.php");
$deskTypeID = $_POST['deskTypeID'];
if ((trim($deskTypeID) == '') or (!is_numeric($deskTypeID))) {
    echo "<h2>Sorry, you must enter a valid desk type ID</h2>\n";
} else if (!DeskType::findDeskType($deskTypeID)) {
    echo "<h2>Sorry, A desk type with ID #$deskTypeID does not exist</h2>\n";
} else {
    $deskTypeID = $_POST['deskTypeID'];
    $deskType = DeskType::findDeskType($deskTypeID);
    $result = $deskType->removeDeskType();
    if ($result)
        echo "<h2>DeskType $deskTypeID removed</h2>\n";
    else
        echo "<h2>Sorry, problem removing desk type $deskTypeID</h2>\n";
}
?>
