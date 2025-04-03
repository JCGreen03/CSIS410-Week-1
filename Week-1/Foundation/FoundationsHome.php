<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/foundations.css">
</head>

<body>

    <?php
    Include "./Components/Navbar.php";
    ?>

    <?php
    echo"<h1>The Newly Rise</h1>";
    echo '<div class="homeimg">';
    echo '<img src="./Media/Golgotha.jpg" alt="CrossOnGolgotha">';
    echo "</div>";
    ?>

    <?php
    Include "./Components/Footer.php";
    ?>
</body>

</html>