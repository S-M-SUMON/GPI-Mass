<?php 
    include './master/header.php';
    include "./admin/config/config.php";
    include "./admin/url/config.php";
    
    if (isset($_GET['viewid'])) {
        $viewid = $_GET['viewid'];
    }
    if (isset($_GET['month'])) {
        $month = $_GET['month'];
    }

    $khori_bill = "SELECT * FROM khori_bill WHERE auth_id = '$viewid'";
    $views = mysqli_query($conn, $khori_bill);

    if (isset($_GET['update_save'])) {
        $ids = $_GET['id'];
        $names = $_GET['name'];
        $amounts = $_GET['amount'];
        $original_names = []; 
        $original_amounts = [];
        
        // Fetch original data
        foreach ($views as $view) {
            $original_names[$view['id']] = $view['name'];
            $original_amounts[$view['id']] = $view['amount'];
        }

        $currentDate = date("d M Y");

        foreach ($ids as $index => $id) {
            $name = $names[$index];
            $amount = $amounts[$index];

            // Only update the date if the name or amount has changed
            if ($name !== $original_names[$id] || $amount !== $original_amounts[$id]) {
                $update = "UPDATE khori_bill SET name='$name', amount='$amount', pament_date='$currentDate' WHERE id='$id'";
                mysqli_query($conn, $update);
            } else {
                // Update the name and amount without changing the date
                $update = "UPDATE khori_bill SET name='$name', amount='$amount' WHERE id='$id'";
                mysqli_query($conn, $update);
            }
        }

        header("location: $url_link/admin/khori_bill/view_khori_bill_member.php?viewid=$viewid&month=$month");
    }
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
        <h1>All MEMBER</h1>
        
</div>

<div class="user_container">
    <?php 
        if(isset($_GET['add_member'])){
            $id = $_GET['viewid'];
    ?>
    <form class="weekly_form" action="" method="GET">
        <label for="">Name</label>
        <input type="hidden" name="viewid" value="<?= $viewid;?>">
        <input type="hidden" name="month" value="<?= $month;?>">
        <input type="text" name="name"  class="form-input">
        <button class="cost_button" type="submit" name="save_add_member"> Save</button>
    </form>
    <?php }?>

    <?php 
        if(isset($_GET['save_add_member'])){
            $viewid = $_GET['viewid'];
            $month = $_GET['month'];
            $name = $_GET['name'];
            $date = date("d M Y");

            if($name){
                $insert = "INSERT INTO khori_bill (name,month_name,auth_id,pament_date) VALUES ('$name','$month','$viewid','$date')";
                mysqli_query($conn, $insert);
                header("location: $url_link/admin/khori_bill/view_khori_bill_member.php?viewid=$viewid&month=$month");
            }else{
                echo "Type Name";
            }
        }
    ?>

    <div id="table-container">
        <form action="" method="GET">
            <table id="user-table">
                <thead id="table-header" class="table-headeran">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Month</th>
                        <th>Pament Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>

                <tbody id="table-body" class="table-bodyan">
                    <?php $count = 1; foreach( $views as  $view ) :?>
                    <tr id="input">
                        <td><?= $count++;?></td>
                        <td><input type="hidden" name="id[]" value="<?= $view['id'];?>">
                            <input type="text" name="name[]" value="<?= $view['name'];?>" readonly></td>
                        <td><input type="text" name="month[]" value="<?= $view['month_name'];?>" readonly></td>
                        <td><input type="text" name="pament_date[]" value="<?= $view['pament_date'];?>" readonly></td>
                        <td><input type="text" name="amount[]" value="<?= $view['amount'];?>" readonly></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

               
            </table>
            <input type="hidden" name="viewid" value="<?= $viewid;?>">
            <input type="hidden" name="month" value="<?= $month;?>">
        </form>
    </div>
</div>
</body>
</html>
