<?php
$cookie_name = "user";
$cookie_value = "Felipe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
