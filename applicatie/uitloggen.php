<?php


session_start();

if(isset($_SESSION['login'])) {
    if($_SESSION['login']) {
        session_destroy();
    }
}

header('Location: begin.php');


?>