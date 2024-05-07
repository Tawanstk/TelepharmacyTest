<?php

    session_start();
    require_once 'config/process.php';
    if(!isset($_SESSION['user_login'])){
        header("location: Loginpage.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telepharmacy</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav
        class="navbar navbar-expand-sm backnavbar"
    >
        <div class="container">
            <a class="navbar-brand text-white" href="user.php">LOGO</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="toppic nav-link active" href="user.php" aria-current="page"
                            >หน้าหลัก
                            <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="toppic nav-link" href="Consult.php">ปรึกษาอาการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="toppic nav-link" href="Note.php">บทความ</a>
                    </li>
                    <li class="nav-item">
                        <a class="toppic nav-link" href="Contact.php">ติดต่อเรา</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle text-white"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Dropdown</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId"
                        >
                            <a class="dropdown-item" href="#"
                                >Action 1</a
                            >
                            <a class="dropdown-item" href="#"
                                >Action 2</a
                            >
                        </div>
                    </li> -->
                </ul>
                <li class="nav-item d-flex my-2 my-lg-0">
                <?php
        if(isset($_SESSION['user_login'])){
            $user_id = $_SESSION['user_login'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
        }
        ?>
                    <a class="toppic nav-link" href="profile.php"><?php echo $row['firstname'].' '. $row['lastname'] ?></a>
                </li>
            </div>
        </div>
    </nav>
    <div class="banner">
        <p class="headtoppic" style="color: white;">อยากทราบอาการหรือข้อมูลโรคหรอ ?</p>
        <p class="smalltoppic" style="color: white;">คุณสามารถสอบถามอาการที่คุณเป็นหรือถามเกี่ยวกับโรคที่คุณอยากทราบได้
            โดยเราจะวินิจฉัยและบอกผลลัพธ์พร้อมวิธีรักษาเพียงคุยกับเรา ลองเลย!!!</p>
        <button type="button" class="btn buttonhome" onclick="window.location.href = 'Consult.php'">แชทเลย</button>
        <div class="photoban1">
            <img src="photo/หมอ-removebg-preview.png" class="doctor">
        </div>
        <div class="photoban2">
            <img src="photo/chatbot.png" class="bot">
        </div>
    </div>
    <div class="bannerchat">
        <img src="photo/chatbot.png" class="bot2">
        <div class="boxbannerchat">
            <p style="font-size: 38px; display: inline;">แชทบอทที่จะสามารถตอบคำถามต่างๆ เกี่ยวกับ
                โรคและอาการป่วยของคุณได้ <h1 style="font-size: 60px; display: inline;">24</h1> <p style="font-size: 38px; display: inline;">ชั่วโมง</p>
        </div>
        <button type="button" class="btn buttonhome2" onclick="window.location.href = 'Consult.php'">แชทเลย</button>
    </div>
    <div class="bannerarticle">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="photo/r33.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="photo/918.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="photo/r33 ep2.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>