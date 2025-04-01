<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Home</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Variables.css" />
</head>

<body>
<?php
include("./Components/EmployeeBar.php");
?>

<?php
include("./Components/variables.php");
?>


<?php
    echo "<div class='heirarchybox'>";
    echo "<a href='guy.php'>";
    include("./Components/EmployeeGuy.php");
    echo "</a>";
    echo "</div>";
?>


<?php
    echo "<div class='heirarchybox'>";
    echo "<a href='reggie.php'>";
    include("./Components/EmployeeReggie.php");
    echo "</a>";
    echo "</div>";
?>


<?php
    echo "<div class='heirarchybox'>";
    echo "<a href='vincent.php'";
    include("./Components/EmployeeVincent.php");
    echo "</a>";
    echo "</div>";
?>

<?php
include("./Components/Footer.php");
?>
</body>

</html>