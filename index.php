<?php
    require 'public/php/lib.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <section>
        <a href="login.php">login</a>
        <a href="register.php">register</a>
        <a href="logout.php">logout</a>
    </section>

    <section>
        <?php
            if (!empty($_SESSION['user_name'])){
                echo $_SESSION['user_id']."\n";
                echo $_SESSION['user_name'];
            }
        ?>
    </section>
</body>
</html>