<?php
session_start();
require_once 'config/process.php';
// ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
if (isset($_POST['savechange'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $address = $_POST['address'];

    $citizenid = $_POST['citizenid'];
    $urole = 'user';


    // อัปเดตข้อมูลผู้ใช้ในฐานข้อมูล
    $user_id = $_SESSION['user_login'];
    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, password = ?, phone = ?, citizenid = ?, address = ? WHERE id = ?");
    $stmt->bind_param("sssiiss", $username, $email, $password, $phone, $citizenid, $address, $user_id);
    if ($stmt->execute()) {
        // อัปเดตข้อมูลสำเร็จ
        header('location: profile.php');

    } else {
        // ข้อผิดพลาดในการอัปเดตข้อมูล
        echo "Error updating user data: " . $conn->error;
    }

    
}

// ปิดการเชื่อมต่อฐานข้อมูล
?>
