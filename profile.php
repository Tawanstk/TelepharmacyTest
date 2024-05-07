<?php

    session_start();
    require_once 'config/process.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Phofile<h1>
        <a href='user.php'>Get Back</a><br>
        <div class="container mt-5">
        <?php
        if(isset($_SESSION['user_login'])){
            $user_id = $_SESSION['user_login'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
        ?>
        <div class="card">
            <div class="card-header">
            <?php echo $row['firstname'].' '. $row['lastname'] ?>
            </div>
            <div class="card-body">
                <!-- สามารถเพิ่มข้อมูลเพิ่มเติมได้ตามต้องการ -->
                <form action="update_user.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="citizenid">CitizenID:</label>
                        <input type="number" class="form-control" id="citizenid" name="citizenid" value="<?php echo $row['citizenid']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>">
                    </div>
                
                    <button type="submit" class="btn btn-primary" name='savechange'>Save Changes</button>
                </form>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

</body>
</html>