<?php
/* Zaib Kaukab
   2026-02-13
   IT202-004
   Phase 1: Login and Logout
   zsk6@njit.edu
*/
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Desk Inventory Helper</title></head>
<body>
    <section>
        <main>
            <?php
            if (isset($_REQUEST['content'])) {
                include($_REQUEST['content'] . ".inc.php");
            } else {
                include("main.inc.php");
            }
            ?>
        </main>
    </section>
</body>
</html>
