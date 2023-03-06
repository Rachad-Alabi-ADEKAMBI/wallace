<?php
// session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include 'meta.php'; ?>

    <title><?= $title ?></title>
</head>


<body>
    <div class="main" id='main'>
        <?php include 'header.php'; ?>

        <div class="content" id='app'>
            <?= $content ?>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>