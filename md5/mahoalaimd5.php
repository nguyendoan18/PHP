<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <form action="xulymahoa.php" method="POST">
        <div class="imgcontainer">
            <img src="admin.ico" class="">
        </div>

        <div class="container">
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Chuỗi mã hóa md5:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="mahoalaimd5" placeholder="Chuỗi mã hóa md5...">
            </div>
        </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Mã hóa lại md5</button>
        </div>
    </form>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>