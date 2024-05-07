<?php 

    session_start();
    require_once 'config/process.php';

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

      
        if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอกusername';
            header("location: Loginpage.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: Loginpage.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: Loginpage.php");
        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM users WHERE username = ?");
                $check_data->bind_param("s", $username);
                $check_data->execute();
                $result = $check_data->get_result();
                $row = $result->fetch_assoc();
                
                if ($result->num_rows > 0) {

                    if ($username == $row['username']) {
                        if (password_verify($password, $row['password'])) {
                            if ($row['urole'] == 'admin') {
                                $_SESSION['admin_login'] = $row['id'];
                                header("location: admin.php");
                            } else {
                                $_SESSION['user_login'] = $row['id'];
                                header("location: user.php");
                            }
                        } else {
                            $_SESSION['error'] = 'รหัสผ่านผิด';
                            header("location: Loginpage.php");
                        }
                    } else {
                        $_SESSION['error'] = 'usernameผิด';
                        header("location: Loginpage.php");
                    }
                } else {
                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
                    header("location: Loginpage.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>