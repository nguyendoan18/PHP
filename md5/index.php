<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="admin.ico" />
    <!-- preponsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- End preponsive -->
    <title>Mã hóa MD5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 style="color: red;">MÃ HÓA PASSWORD MD5</h1>
                    </div>
                    <div class="card-body">
                    <form action="thuchienthem.php" method="POST">
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">User:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="user" placeholder="User...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Name...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Password:</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password...">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Enter the password:</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="enterthepassword" placeholder="Enter the password...">
                            </div>
                        </div>  
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <a href="logout.php"><button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Đăng xuất</button></a>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>