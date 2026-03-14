<h2>Add New Desk</h2>
<form action="index.php?content=add_desk" method="post">
    <table>
        <tr><td><label for="deskID">deskID:</label></td><td><input type="text" id="deskID" name="deskID" required></td></tr>
        <tr><td><label for="deskCode">deskCode:</label></td><td><input type="text" id="deskCode" name="deskCode" required></td></tr>
        <tr><td><label for="deskName">deskName:</label></td><td><input type="text" id="deskName" name="deskName" required></td></tr>
        <tr><td><label for="deskDescription">deskDescription:</label></td><td><textarea id="deskDescription" name="deskDescription" required></textarea></td></tr>
        <tr><td><label for="deskBrand">deskBrand:</label></td><td><input type="text" id="deskBrand" name="deskBrand" required></td></tr>
        <tr><td><label for="deskMaterial">deskMaterial:</label></td><td><input type="text" id="deskMaterial" name="deskMaterial" required></td></tr>
        <tr><td><label for="deskTypeID">deskTypeID:</label></td><td><input type="text" id="deskTypeID" name="deskTypeID"></td></tr>
        <tr><td><label for="deskBuyPrice">deskBuyPrice:</label></td><td><input type="text" id="deskBuyPrice" name="deskBuyPrice" required></td></tr>
        <tr><td><label for="deskSellPrice">deskSellPrice:</label></td><td><input type="text" id="deskSellPrice" name="deskSellPrice" required></td></tr>
    </table>
    <br>
    <input type="submit" value="Submit">
</form>