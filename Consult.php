<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telepharmacy</title>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="HealthcareChatbot"
      agent-id="e4dc28f4-8e01-4d3e-b6ad-fdddb765b8f2"
      language-code="th"
    ></df-messenger>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #9CDABA;">
    <nav
        class="navbar navbar-expand-sm backnavbar"
    >
        <div class="container">
            <a class="navbar-brand text-white" href="Home.php">LOGO</a>
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
                        <a class="toppic nav-link" href="Home.php" aria-current="page"
                            >หน้าหลัก
                            <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="toppic nav-link active" href="Consult.php">ปรึกษาอาการ</a>
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
                    <a class="toppic nav-link" href="Loginpage.php">เข้าสู่ระบบ/สมัครสมาชิก</a>
                </li>
            </div>
        </div>
    </nav>
    <div class="whitebox">
        <img src="photo/chatbot.png" style="position: absolute; margin-right: 1000px; scale: 80%;">
        <p>ท่านสามารถสอบถามอาการจากอาการที่ท่านเป็นอยู่หรือสอบถามวิธีรักษาโรคและวิธีป้องกันของโรคที่ท่านต้องการได้เลย โดยคลิกที่ปุ่มขวาล่างเลย!!!</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>