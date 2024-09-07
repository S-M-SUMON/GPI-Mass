<?php 
    if(isset($_POST['update_edit_member'])){
            $_id = $_POST['am_id'];

            $user_id = $_POST['user_id'];
            $user_name = $_POST['user_name'];
            $user_time = $_POST['user_time'];
           

            $name  = $_POST['name']; 
            $sat = $_POST['sat'];
            $sun = $_POST['sun'];
            $mon = $_POST['mon'];
            $tue = $_POST['tue'];
            $wed = $_POST['wed'];
            $thu = $_POST['thu'];
            $fri = $_POST['fri'];
            $sate = $_POST['sate'];

            $amount = $_POST['amount'];
            $total = $sat + $sun + $mon + $tue + $wed +  $thu + $fri + $sate;

            require "../config/config.php";
            $sql = "UPDATE add_member SET am_name='{$name}', sat='{$sat}', sun='{$sun}', mon='{$mon}', tue='{$tue}', wed='{$wed}', thu='{$thu}', fri='{$fri}', sate='{$sate}', total='{$total}', amount='{$amount}' WHERE am_id ='{$_id}'";
            
            $result = mysqli_query($conn,$sql);
            // header("location: http://localhost/mass_management/admin/edit_view_user_details/edit_view_user_details.php?edit_id=$_id");
            header("location: http://localhost/mass_management/admin/view_user_details/view_user_details.php?user_id=$user_id&user_name=$user_name&user_time=$user_time");


    }

?>