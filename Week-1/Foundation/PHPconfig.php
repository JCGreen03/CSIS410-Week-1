<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/phpconfig.css">
</head>

<body>
    <?php
    Include "./Components/Navbar.php";
    ?>

<div>
    <?php
    phpinfo();
    ?>
</div>

    <?php
    Include "./Components/Footer.php";
    ?>

</body>

</html>