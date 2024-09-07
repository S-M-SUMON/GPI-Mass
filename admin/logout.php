<?php

    session_start();
    session_unset();

    session_destroy();

    header("location: http://localhost/mass_management/admin/index.php");

?>