<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?=page_title?></title>
    <?php require "./tools/head.php"; ?>
    <?=custom_links?>
</head>
<body>
    <div class="div-main">
        <?php
            require "./sameparts/views/loader/pre_loader.php";
            require "./sameparts/views/navbar/top_navbar.php";
        ?>
        <?=page_body?>
        <?php
            require "./sameparts/views/footer/footer.php";
        ?>
    </div>

    <?php require "./tools/scripts.php"; ?>
    <?=custom_scripts?>
</body>
</html>