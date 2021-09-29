<?php
session_start();
if (isset($_COOKIE["user"])) {
    echo "Olá Cookie" . $_COOKIE["user"]."<br>";
} else {
    echo "Seu cookie tá fechado!<br>";
}

if (isset($_SESSION["user"])) {
    echo "Olá Session" . $_SESSION["user"]."<br>";
} else {
    echo "Sua sessão está fechada!<br>";
}