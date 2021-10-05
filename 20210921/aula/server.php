<?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";


    $url = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];

    echo $url;