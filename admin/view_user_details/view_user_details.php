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
        <form action="add_view_user_member.php" method="POST">

            <input type="hidden" value="<?php echo $_GET['user_id']; ?>" name="user_id">
            <input type="hidden" value="<?php echo $_GET['user_name']; ?>" name="user_name">
            <input type="hidden" value="<?php echo $_GET['user_time']; ?>" name="user_time">
            
            <button type="submit">ADD Member</button>
        </form>

       
        

    </div>  

    <div id="table-container">
        <?php 
            require "../config/config.php";


            $user_id = $_GET['user_id'];
            $user_name = $_GET['user_name'];
            $user_time = $_GET['user_time'];
            
            

            $sql = "SELECT * FROM add_member 
            WHERE am_user_id='{$user_id}' AND am_username='{$user_name}' AND am_user_time='{$user_time}'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) >0 ){
                
            

                
        ?>
        <table id="user-table">
            <thead id="table-header" class="table-header">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Sat</th>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Total</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <tbody id="table-body" class="table-body">
                <?php 
                    $total = 0;
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
               <tr>
                    <td><?php echo $count ;?></td>
                    <td><?php echo $row['am_name'];?></td>
                    <td><?php echo $row['sat'];?></td>
                    <td><?php echo $row['sun'];?></td>
                    <td><?php echo $row['mon'];?></td>
                    <td><?php echo $row['tue'];?></td>
                    <td><?php echo $row['wed'];?></td>
                    <td><?php echo $row['thu'];?></td>
                    <td><?php echo $row['fri'];?></td>
                    <td><?php echo $row['sate'];?></td>
                    <td><?php echo $row['total'];?></td>
                    <td>
                    <a href="../edit_view_user_details/edit_view_user_details.php?edit_id=<?php echo $row['am_id']?>&user_id=<?php echo $_GET['user_id'];?>&user_name=<?php echo $_GET['user_name'];?>&user_time=<?php echo $_GET['user_time'];?>" class="edit_a">Edit</a>
                    </td>

               </tr>
               
               <?php $total = $total+$row['total']; $count ++; }?>

               <tfoot>
                <tr>
                    <td colspan="9"></td>
                    <td colspan="1">Total :</td>
                    <td colspan="1"><?php echo $total;?></td>
                    <td colspan="2"></td>
                </tr>
            </tfoot>
            </tbody>
        </table>
        <?php }?>
    </div>
</body>
</html>