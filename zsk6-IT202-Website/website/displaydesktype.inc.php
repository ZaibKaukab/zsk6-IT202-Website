<h2>Desk Type Details</h2>
<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
require_once("desktype.php");
require_once("desk.php");

$deskTypeID = $_REQUEST['deskTypeID'] ?? '';
$deskType = null;

if ($deskTypeID && is_numeric($deskTypeID)) {
    $deskType = DeskType::findDeskType($deskTypeID);
}

if (!$deskType) {
    echo "<h2>Error: Desk Type not found or invalid ID.</h2>";
} else {
    echo "<h3>Type: " . htmlspecialchars($deskType->deskTypeName) . " (Code: " . htmlspecialchars($deskType->deskTypeCode) . ")</h3>";
    echo "<p>Aisle Location: " . htmlspecialchars($deskType->deskAisleNumber) . "</p>";
    
    // Fetch all desks and filter by type
    $allDesks = Desk::getDesks();
    $typeDesks = [];
    if ($allDesks) {
        foreach($allDesks as $d) {
            if ($d->deskTypeID == $deskTypeID) {
                $typeDesks[] = $d;
            }
        }
    }
    
    if (count($typeDesks) > 0) {
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
        echo "<tr><th>Desk ID</th><th>Name</th><th>Brand</th><th>Material</th><th>Sell Price</th></tr>";
        foreach ($typeDesks as $d) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($d->deskID) . "</td>";
            echo "<td>" . htmlspecialchars($d->deskName) . "</td>";
            echo "<td>" . htmlspecialchars($d->deskBrand) . "</td>";
            echo "<td>" . htmlspecialchars($d->deskMaterial) . "</td>";
            echo "<td>$" . number_format($d->deskSellPrice, 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No desks currently found belonging to this type.</p>";
    }
}
?>