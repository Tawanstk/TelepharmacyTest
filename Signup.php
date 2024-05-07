<?php
session_start();
require_once 'config/process.php';



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
                    <a class="toppic nav-link active" href="Loginpage.php">เข้าสู่ระบบ/สมัครสมาชิก</a>
                </li>
            </div>
        </div>
    </nav>
    <div class="boxsignin">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card  text-white" style="border-radius: 1rem; background-color:white ;">
                    <div class="card-body p-5 text-center">
          
                      <div class="mb-md-5 mt-md-4 pb-5">
          
                        <h2 class="fw-bold mb-2 text-uppercase" style="color: black;">Sign up</h2>
                        <p class=" mb-5" style="color: gray;">Please enter your login and password!</p>
                        <form method="post" action="process_db.php">
                            <?php if(isset($_SESSION['error'])){?>
                                <div class="alert alert-danger" role=alert>
                                    <?php
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    
                                    ?>
                                </div>
                            <?php }?> 
                            <?php if(isset($_SESSION['success'])){?>
                                <div class="alert alert-success" role=alert>
                                    <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    
                                    ?>
                                </div>
                            <?php }?> 
                            <?php if(isset($_SESSION['warning'])){?>
                                <div class="alert alert-warning" role=alert>
                                    <?php
                                        echo $_SESSION['warning'];
                                        unset($_SESSION['warning']);
                                    
                                    ?>
                                </div>
                            <?php }?> 
                        <div data-mdb-input-init class="form-outline form-black mb-4 ">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                            
                        </div>
          
                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirmpassword" name='cpassword'>

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Firstname" name="firstname">

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Lastname" name="lastname">

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="number" class="form-control" id="floatingPassword" placeholder="Phone" name="phone">

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="number" class="form-control" id="floatingPassword" placeholder="CitizenID" name="citizenid">

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="email" class="form-control" id="floatingPassword" placeholder="Email" name="email">

                        </div>

                        <div data-mdb-input-init class="form-outline form-black mb-4">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Address" name="address">

                        </div>
                        
          
          
                        <button data-mdb-button-init data-mdb-ripple-init class="btn px-5" type="submit" style="background-color: #1B664B; color: white;" name='signup'>Sign up</button>
                    </form>
                      </div>
          
                      <div>
                        <p class="mb-0" style="color: black;">already have an account? <a href="Login.php" class="text-black-50 fw-bold">Log in</a>
                        </p>
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </div>
      </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>