<?php 
    include '../master/header.php';

    if(!isset($_SESSION['user_id'])){
        header("location: http://localhost/mass_management/admin/");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
</head>
<body>
    <div class="header">
        <h1>All Users</h1>
        <h1><?php echo  $_SESSION['user_first_name']." ".  $_SESSION['user_last_name'];?></h1>
        <?php 
            if($_SESSION['user_role'] ==1){
                echo '<a href="../add_user_manager/add_user.php">ADD USERS</a>';
            }else if($_SESSION['user_role'] ==2){
                echo '<a href="../add_user_manager/add_manager.php">ADD USERS</a>';
            }
        ?>
    </div>

    <div id="table-container">
    <?php 
        require "../config/config.php";

        if($_SESSION['user_role'] == 1){
            $view_users = "SELECT * FROM users";
        }else if($_SESSION['user_role'] == 2){
            $view_users = "SELECT * FROM users WHERE role='{$_SESSION['user_role']}' AND username='{$_SESSION['username']}' ";
        }
        else if($_SESSION['user_role'] == 3){
            $view_users = "SELECT * FROM users WHERE role='{$_SESSION['user_role']}' AND username='{$_SESSION['username']}'";
        }else if($_SESSION['user_role'] == 4){
            $view_users = "SELECT * FROM users WHERE role='{$_SESSION['user_role']}' AND username='{$_SESSION['username']}'";
        }
        
        $result = mysqli_query($conn,$view_users);
            if(mysqli_num_rows($result) > 0 ){
                

    
        ?>
        <table id="user-table">
            <thead id="table-header" class="table-header">
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Role</th>
                    <th>Date</th>
                    <th>View Manager</th>
                    <th>View Amount</th>
                    <th>Total Cost</th>
                    <th>pabo / dibo</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id="table-body" class="table-body">
                <?php 
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?= $count?></td>
                    <td><?= $row['user_first_name']." ".$row['user_last_name']?></td>
                    <td><?= $row['username']?></td>
                    <td>
                        <?php 
                                if($row['role'] == 1){
                                    echo "Admin";
                                }else if($row['role'] == 2){
                                    echo "Manager";
                                }else if($row['role'] == 3){
                                    echo "Aunty Bill Manager";
                                }else if($row['role'] == 4){
                                    echo "Khori Bill Manager";
                                }
                            ?>
                    </td>


                    <td><?= $row['date']?></td>
                    <td><a href="../view_user_details/view_user_details.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a">View Manager</a></td>
                    <td><a href="../view_amount/view_amount.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a">View Amount</a></td>
                    
                    <td><a href="../total_cost/total_cost.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a">Total Cost</a></td>
                    
                    <td><a href="../pabo_dibo/pabo_dibo.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="edit_a"" class="edit_a">pabo / dibo</a></td>
                    <td><a href="user_delete.php?user_id=<?php echo $row['user_id'];?>&user_name=<?php echo $row['username'];?>&user_time=<?php echo $row['time'];?>" class="deleat_a">Delete</a></td>
                </tr>
                <?php
                    $count ++;
                    } 
                ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</body>
</html>
