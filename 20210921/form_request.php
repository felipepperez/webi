<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
        if(isset($_REQUEST['fname'])){
            $name = $_REQUEST['fname'];
            echo "<h1>$name</h1>";
        }
    ?>
</body>
</html>