<!doctype html>
<html lang="en">
    <?php include_once "templates/head.php"?>
    <body>
    <div class="wrapper">
    <?php include_once "templates/sidebar.php"?>
        <div class="main-panel">
            <?php echo str_replace("{page}","Dashboard",file_get_contents("templates/navbar.php"));?>
            <?php include_once "templates/content-dashboard.php"?>
            <?php include_once "templates/footer.php"?>
        </div>
    </div>

    </body>
    <?php include_once "templates/scripts.php"?>
    <?php include_once "templates/styles.php"?>
</html>
