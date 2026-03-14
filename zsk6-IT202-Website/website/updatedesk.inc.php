<h2>Update Desk</h2>
<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
require_once("desk.php");
$deskID = $_REQUEST['deskID'] ?? '';
$desk = null;

if ($deskID && is_numeric($deskID)) {
    $desk = Desk::findDesk($deskID);
}

if (!$desk) {
    echo "<h2>Error: Desk not found or invalid ID.</h2>";
} else {
?>
<form action="index.php?content=change_desk" method="post">
    <table>
        <tr><td><label for="deskID">deskID:</label></td><td><input type="text" id="deskID" name="deskID" value="<?php echo htmlspecialchars($desk->deskID); ?>" readonly></td></tr>
        <tr><td><label for="deskCode">deskCode:</label></td><td><input type="text" id="deskCode" name="deskCode" value="<?php echo htmlspecialchars($desk->deskCode); ?>" required></td></tr>
        <tr><td><label for="deskName">deskName:</label></td><td><input type="text" id="deskName" name="deskName" value="<?php echo htmlspecialchars($desk->deskName); ?>" required></td></tr>
        <tr><td><label for="deskDescription">deskDescription:</label></td><td><textarea id="deskDescription" name="deskDescription" required><?php echo htmlspecialchars($desk->deskDescription); ?></textarea></td></tr>
        <tr><td><label for="deskBrand">deskBrand:</label></td><td><input type="text" id="deskBrand" name="deskBrand" value="<?php echo htmlspecialchars($desk->deskBrand); ?>" required></td></tr>
        <tr><td><label for="deskMaterial">deskMaterial:</label></td><td><input type="text" id="deskMaterial" name="deskMaterial" value="<?php echo htmlspecialchars($desk->deskMaterial); ?>" required></td></tr>
        <tr><td><label for="deskTypeID">deskTypeID:</label></td><td><input type="text" id="deskTypeID" name="deskTypeID" value="<?php echo htmlspecialchars($desk->deskTypeID); ?>"></td></tr>
        <tr><td><label for="deskBuyPrice">deskBuyPrice:</label></td><td><input type="text" id="deskBuyPrice" name="deskBuyPrice" value="<?php echo htmlspecialchars($desk->deskBuyPrice); ?>" required></td></tr>
        <tr><td><label for="deskSellPrice">deskSellPrice:</label></td><td><input type="text" id="deskSellPrice" name="deskSellPrice" value="<?php echo htmlspecialchars($desk->deskSellPrice); ?>" required></td></tr>
    </table>
    <br>
    <input type="submit" name="update" value="Update Item">
    <input type="submit" name="cancel" value="Cancel">
</form>
<?php } ?>