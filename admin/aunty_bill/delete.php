<?php
    include "../config/config.php";
    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $delete_query = "DELETE  FROM aunty_bill_month WHERE id='$id'";
        mysqli_query($conn,$delete_query);
    
        header("location: http://localhost/mass_management/admin/aunty_bill/aunty_bill.php");
    }

    if(isset($_GET['de_ID'])){
        
        $id = $_GET['de_ID'];
        $viewid = $_GET['viewid'];
        $month = $_GET['month'];

        $delete_query = "DELETE  FROM aunty_bill WHERE id='$id'";
        mysqli_query($conn,$delete_query);
    
        header("location: http://localhost/mass_management/admin/aunty_bill/view_aunty_bill_member.php?viewid=$viewid&month=$month");
        

    }

?>