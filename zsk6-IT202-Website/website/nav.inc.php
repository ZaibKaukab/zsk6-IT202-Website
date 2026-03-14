<div style="padding: 10px; background-color: #ddd;">
    <ul style="list-style-type: none; padding: 0;">
        <li style="display: inline; margin-right: 15px;"><a href="index.php">Home</a></li>
        <li style="display: inline; margin-right: 15px;"><a href="index.php?content=list_desktypes">List Desk Types</a></li>
        <li style="display: inline; margin-right: 15px;"><a href="index.php?content=new_desktype">Add New Desk Type</a></li>
        <li style="display: inline; margin-right: 15px;"><a href="index.php?content=list_desks">List Desks</a></li>
        <li style="display: inline; margin-right: 15px;"><a href="index.php?content=new_desk">Add New Desk</a></li>
        <li style="display: inline; margin-right: 15px;"><a href="index.php?content=logout">Logout</a></li>
    </ul>

    <div style="margin-top: 15px;">
        <form action="index.php" method="get" style="display: inline-block; margin-right: 20px;">
            <input type="hidden" name="content" value="update_desk">
            <label for="searchDeskID">Search for Desk:</label>
            <input type="text" id="searchDeskID" name="deskID" required>
            <input type="submit" value="Update Desk">
        </form>

        <form action="index.php" method="get" style="display: inline-block;">
            <input type="hidden" name="content" value="display_desktype">
            <label for="searchDeskTypeID">Search for Desk Type:</label>
            <input type="text" id="searchDeskTypeID" name="deskTypeID" required>
            <input type="submit" value="Display Type">
        </form>
    </div>
</div>