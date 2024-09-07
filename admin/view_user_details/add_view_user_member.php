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
<div class="form-container">
        <h2 class="add_user_title">Add Name</h2>
        <form class="user-form" action="save_view_user_member.php" method="POST">
            <div class="form-group">
                
                <label for="title" class="form-label">Name:</label>
                <input  name="add_member_name"type="text" class="form-input" placeholder="Enter Name">
               
                <input  name="user_id"type="hidden" class="form-input" placeholder="Enter Name" value="<?php echo $_POST['user_id'] ?>">
                
                <input  name="user_name"type="hidden" class="form-input" placeholder="Enter Name" value="<?php echo $_POST['user_name'] ?>">

                <input  name="user_time"type="hidden" class="form-input" placeholder="Enter Name" value="<?php echo $_POST['user_time'] ?>">


            </div>

            <div class="form-group">
                <button type="submit" class="form-button" name="save_member_name">Save</button>
            </div>
        </form>
    </div>
    
</body>
</html>