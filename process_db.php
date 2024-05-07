<?php
session_start();
require_once 'config/process.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $firstname = $_POST['firstname'];
    $citizenid = $_POST['citizenid'];
    $urole = 'user';
    $cpassword = $_POST['cpassword'];

    if (empty($username)) {
        $_SESSION['error'] = 'กรุณากรอก username';
        header('location: Signup.php');
        exit; // เพิ่ม exit เพื่อหยุดการทำงานทันทีหลังจาก redirect
    } else if (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัส';
        header('location: Signup.php');
        exit;
    } else if (empty($lastname)) {
        $_SESSION['error'] = 'กรุณากรอกนามสกุล';
        header('location: Signup.php');
        exit;
    } else if (empty($phone)) {
        $_SESSION['error'] = 'กรุณากรอกเบอร์';
        header('location: Signup.php');
        exit;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'กรุณากรอก email';
        header('location: Signup.php');
        exit;
    } else if (empty($address)) {
        $_SESSION['error'] = 'กรุณากรอกที่อยู่';
        header('location: Signup.php');
        exit;
    } else if (empty($firstname)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อ';
        header('location: Signup.php');
        exit;
    } else if (empty($citizenid)) {
        $_SESSION['error'] = 'กรุณากรอกบัตรประชาชน';
        header('location: Signup.php');
        exit;
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $_SESSION['error'] = 'รหัสผ่านต้องมีความยาว 5-20 ตัวอักษร';
        header('location: Signup.php');
        exit;
    } else if (empty($cpassword)) {
        $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
        header('location: Signup.php');
        exit;
    } else if ($password != $cpassword) {
        $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
        header('location: Signup.php');
        exit;
    }
    else{
        try{
            $check_email = $conn->prepare("SELECT email FROM users WHERE email = ?");
                $check_email->bind_param("s", $email);
                $check_email->execute();
                $row = $check_email->fetch();


            if($row['email'] == $email){
                $_SESSION['warning'] = "มีอีเมลนี้อยู่แล้ว <a href='signup.php'>คลิกที่นี้</a> เพื่อเข้าสู่ระบบ";
                header('location: Loginpage.php');
            } else if (!isset($_SESSION['error'])){
                $passwordHASH = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO users (username, firstname, lastname, phone, email, address, citizenid, password, urole) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssss", $username, $firstname, $lastname, $phone, $email, $address, $citizenid, $passwordHASH, $urole);
                $stmt->execute();
                $_SESSION['success']="สมัครสมาชิกเรียบร้อยแล้ว! <a href='Login.php' class='alert-link'>คลิกที่นี้เพื่อเข้าสู่ระบบ</a>";
                header("location: Signup.php");
            } else{
                $_SESSION['error']="มีบางอย่างผิดพลาด";
                header("location: Signup.php");
            }


        }catch(PDOException $e){
            echo $e->getMesssage();
        }
    }

    // ในกรณีที่ผ่านการตรวจสอบทุกเงื่อนไข คุณสามารถดำเนินการอื่นๆ ต่อไปได้
    // เช่น เพิ่มข้อมูลลงในฐานข้อมูล หรือทำการลงทะเบียนผู้ใช้
}
?>
