<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
</head>

<body>
    
    <?php
    
    Include "./Components/Navbar.php";
    ?>

    <form method="post"> 
        <input type="submit" name="button1" class="button" value="Contact us!" />
    </form>

    <div>
        
        <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }

        function button1() {
            print '
            <p>Phone: (123)456-7890</p>
            <p>Address: 123 Street Name BLVD City, State 12345</p>
            <p>Email: example@mail.com
            ';
        }
        ?>
    </div>

    <?php
    Include "./Components/Footer.php";
    ?>
</body>

</html>