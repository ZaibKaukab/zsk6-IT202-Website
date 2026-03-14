<?php
/* Zaib Kaukab
   2026-03-13
   IT202-004
   Phase 3: HTML Website Layout
   zsk6@njit.edu
*/
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Desk Inventory Helper</title></head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <nav>
        <?php include("nav.inc.php"); ?>
    </nav>
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
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>
</html>