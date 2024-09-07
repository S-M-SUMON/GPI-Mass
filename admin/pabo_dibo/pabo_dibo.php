<?php 
    include "../master/header.php";

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>All Member</h1>
        <h1><?php echo  $_SESSION['user_first_name']." ".  $_SESSION['user_last_name']; ?></h1>
        <h1></h1>
    </div>  

    <div id="table-container">
        <?php 
            require "../config/config.php";
            

            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $user_name = mysqli_real_escape_string($conn, $_GET['user_name']);
            $user_time = mysqli_real_escape_string($conn, $_GET['user_time']);

            $sql = "SELECT * FROM add_member 
            WHERE am_user_id='{$user_id}' AND am_username='{$user_name}' AND am_user_time='{$user_time}'";

            $result = mysqli_query($conn, $sql);




            $sql1 = "SELECT * FROM total_cost 
            WHERE user_id='{$user_id}' AND user_name='{$user_name}' AND user_time='{$user_time}'";
            $result1 = mysqli_query($conn, $sql1);


            $total_amount = 0;
            if (mysqli_num_rows($result1) > 0) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $total_amount += $row1['amount'];
                    
                }
            }



            $total = 0;
            $total_amt = 0;
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $total += $row['total'];
                    $total_amt += $row['amount'];

                   
                }

                
                // Calculate Mill Read value after the loop
                $mill_read = $total ? ($total_amount / $total) : 0;
                // $cost_amount = $mill_read * $row['total'];

                

            }
        ?>

        






        <?php if (mysqli_num_rows($result) > 0) { ?>

            
            <td colspan="1">Total Amount : <?php echo $total_amt;?> </td><br>
            <td colspan="1">Total Cost : <?php echo $total_amount;?></td><br><br>

        <table id="user-table">
            
            <thead id="table-header" class="table-header">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Joma Amount</th>
                    <th>Cost Amount</th>
                    <th>Mill Read</th>
                    <th>Total MiLL</th>
                    <th>Pabo</th>
                    <th>Dibo</th>

                </tr>
            </thead>
            <tbody id="table-body" class="table-body">
                <?php 

                    mysqli_data_seek($result, 0); // Reset the pointer to the beginning of the result set
                    $count = 1;

                    while ($row = mysqli_fetch_assoc($result)) {

                        $pabo = 0;
                        $dibo = 0;
                ?>
               <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['am_name']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo number_format($row['total'] * $mill_read,2); ?></td>
                    <td><?php echo number_format($mill_read, 2); ?></td>
                    <td><?php echo $row['total']; ?></td>

                    <?php 

                        $pabo_dio = $row['amount'] -($row['total'] * $mill_read);

                        if($pabo_dio < 0){
                            $dibo = $pabo_dio *(-1) ;
                            
                        }else{
                            $pabo = $pabo_dio;
                            
                        }
                        
                    ?>
                    <td><?php echo number_format($dibo,0); ?></td>
                    <td><?php echo number_format($pabo,0); ?></td>
                    
               </tr>
               
               <?php 
                    $count++;  
                } 
               ?>
               <tfoot>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="1">Total Mill: <?php echo number_format($total, 0); ?></td>

                    <?php 

                     mysqli_data_seek($result, 0); // Reset the pointer to the beginning of the result set
                        $total_pabo = 0;
                        $total_dibo = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            $ttotal =$row['total'];
                            $tamount =$row['amount'];
                            // $mill_read;

                                $tpabo_dibo =$tamount - ($mill_read * $ttotal );


                            ?>
                        <?php 
                        ?>


                    <?php 
                        if( $tpabo_dibo < 0){
                            $total_dibo =  $total_dibo +$tpabo_dibo * (-1);
                            
                        }if($tpabo_dibo > 0){
                            $total_pabo =  $total_pabo + $tpabo_dibo ;
                           
                        }

                        
                    }?>
                     <td colspan="1">Pabo: <?php echo number_format($total_dibo, 0); ?></td>
                     <td colspan="1">Dibo: <?php echo number_format($total_pabo, 0); ?></td>

                </tr>
            </tfoot>
            </tbody>
        </table>
        <?php } ?>
    </div>
</body>
</html>
