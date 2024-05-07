<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telepharmacy</title>
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
                        <a class="toppic nav-link" href="Consult.php">ปรึกษาอาการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="toppic nav-link active" href="Note.php">บทความ</a>
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
    <div class="blocknote">
        <p style="font-size: 24px; margin-top: 20px; margin-left: 50px">บทความของฉัน</p>
        <div class="boxtable">
            <table class="table">
                <thead >
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อเรื่อง</th>
                    <th scope="col">ประเถท</th>
                    <th scope="col">จัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><button class="btn" style=" background-color: #D9D9D9;" onclick="deleteRow(this)">Delete</button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><button class="btn" style=" background-color: #D9D9D9;" onclick="deleteRow(this)">Delete</button></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td><button class="btn" style=" background-color: #D9D9D9;" onclick="deleteRow(this)">Delete</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="boxaddnote">
            <h2>ชื่อ USER</h2><br>
            <input type="text" placeholder="ชื่อหัวข้อ" class="form-control" style="margin-bottom: 10px;">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-bottom: 10px;">
                  <option selected>ประเภทบทความ</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <label for="floatingSelect">เลือกประเภท</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                <label for="floatingTextarea2">เนื้อหา</label>
              </div>
              <button class="d-grid gap-2 col-6 mx-auto btn" style="margin-top: 10px; background-color: #1B664B; color: white;" type="button">บันทึก</button>
        </div>
    </div>
    <div class="anothernote">
    <p style="font-size: 24px; margin-top: 20px; margin-left: 50px; font-family: prompt;">บทความของคนอื่น</p>
    <div class="boxtable2">
        <table class="table">
            <thead >
              <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อเรื่อง</th>
                <th scope="col">ประเถท</th>
                <th scope="col" style="text-align: right;">จัดการ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td style="text-align: right;"><button class="btn" style=" background-color: #D9D9D9;" >ดู</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td style="text-align: right;"><button class="btn" style=" background-color: #D9D9D9;" >ดู</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td style="text-align: right;"><button class="btn" style=" background-color: #D9D9D9;" >ดู</button></td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
    <script>
        function deleteRow(btn) {
          var row = btn.parentNode.parentNode; // หาแถวที่ต้องการลบ
          row.parentNode.removeChild(row); // ลบแถว
        }
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>