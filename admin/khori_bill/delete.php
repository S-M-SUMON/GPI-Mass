<?php
    include "../config/config.php";
    include "../url/config.php";
    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $delete_query = "DELETE  FROM khori_bill_month WHERE id='$id'";
        mysqli_query($conn,$delete_query);
    
        header("location: $url_link/admin/khori_bill/khori_bill.php");
    }

    if(isset($_GET['de_ID'])){
        
        $id = $_GET['de_ID'];
        $viewid = $_GET['viewid'];
        $month = $_GET['month'];

        $delete_query = "DELETE  FROM khori_bill WHERE id='$id'";
        mysqli_query($conn,$delete_query);
    
        header("location: $url_link/admin/khori_bill/view_khori_bill_member.php?viewid=$viewid&month=$month");
        

    }

?>