<?php 
    include '../master/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
</head>
<body>

    <div class="header">
        <h1>ADD USERS</h1>

        <!-- <a href="add_user.php">ADD USERS</a> -->
    </div>

    <div class="user_container">
        <form class="add_user_form" action="save_users.php" method="POST">
            <h2 class="add_user_title">Add User</h2>

            <label class="add_user_label">First Name:</label>
            <input type="text" name="firstName" class="add_user_input" required>

            <label  class="add_user_label">Last Name:</label>
            <input type="text" name="lastName" class="add_user_input" required>

            <label class="add_user_label">User Name:</label>
            <input type="text" name="username" class="add_user_input" required>

            <label  class="add_user_label">Password:</label>
            <input type="password" name="password" class="add_user_input" required>

            <label class="add_user_label">User Role:</label>

            <select  name="userRole" class="add_user_select" required>
                <option value="1">Admin</option>
                <option value="2">Aunty Bill Manager</option>
                <option value="3">Khori Bill Manager</option>
                <option value="4">Manager</option>
            </select>

            <button type="submit" class="add_user_button" name="add_user">Add User</button>
        </form>
    </div>
</body>
</html>
