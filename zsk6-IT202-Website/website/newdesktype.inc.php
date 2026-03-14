<h2>Add New Desk Type</h2>
<form action="index.php?content=add_desktype" method="post">
    <table>
        <tr>
            <td><label for="deskTypeID">deskTypeID:</label></td>
            <td><input type="text" id="deskTypeID" name="deskTypeID" required></td>
        </tr>
        <tr>
            <td><label for="deskTypeCode">deskTypeCode:</label></td>
            <td><input type="text" id="deskTypeCode" name="deskTypeCode" required></td>
        </tr>
        <tr>
            <td><label for="deskTypeName">deskTypeName:</label></td>
            <td><input type="text" id="deskTypeName" name="deskTypeName" required></td>
        </tr>
        <tr>
            <td><label for="deskAisleNumber">deskAisleNumber:</label></td>
            <td><input type="text" id="deskAisleNumber" name="deskAisleNumber" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
</form>