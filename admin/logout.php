<?php
    include "../url/config.php";


    session_start();
    session_unset();

    session_destroy();

    header("location: $url_link/admin/index.php");

?>