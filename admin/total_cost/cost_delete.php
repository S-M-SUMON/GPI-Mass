<?php
    require "../config/config.php";
    $_id = $_GET['cost_id'];

    $user_id = $_GET['user_id'];
    $user_name = $_GET['user_name'];
    $user_time = $_GET['user_time'];

   
    $updatw_cost = "DELETE FROM total_cost WHERE cost_id='$_id'";

    $result = mysqli_query($conn,$updatw_cost);

    header("location: http://localhost/mass_management/admin/total_cost/total_cost.php?user_id=$user_id&user_name=$user_name&user_time=$user_time");


?>