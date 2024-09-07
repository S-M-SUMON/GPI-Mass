<?php
    require "../config/config.php";

    $user_id = $_GET['user_id'];
    $user_name = $_GET['user_name'];
    $user_time = $_GET['user_time'];

    $delete_query = "DELETE  FROM users WHERE user_id='$user_id' AND username = '$user_name' AND time ='$user_time'";
    mysqli_query($conn,$delete_query);

    $delete_add_member = "DELETE  FROM add_member WHERE am_user_id='$user_id' AND am_username = '$user_name' AND am_user_time ='$user_time' ";
    mysqli_query($conn,$delete_add_member);

    $delete_cost = "DELETE  FROM total_cost WHERE user_id='$user_id' AND user_name = '$user_name' AND user_time ='$user_time' ";
    mysqli_query($conn,$delete_cost);

    header("location: http://localhost/mass_management/admin/user/users.php")

?>