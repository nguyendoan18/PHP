<?php
  session_start();
  if(!isset($_SESSION['dsnguyen_hoten'])){
    header("location:login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản ly tin tức</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php
    include('components/linkcss.php');

    include('ketnoi.php');

    $sql = "SELECT a.dsnguyen_id, dsnguyen_hinh, dsnguyen_tieude, dsnguyen_ngaydang, dsnguyen_tacgia, b.dsnguyen_tenloai, dsnguyen_view ";
    $sql.="FROM dsnguyen_tintuc a, dsnguyen_loaitin b where a.dsnguyen_loaitin =b.dsnguyen_id";
    $ketqua = mysqli_query($ketnoi, $sql);
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
    include('components/header.php');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
    include('components/sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TIN TỨC
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Quản lý Tin tức</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Hình</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ngày đăng</th>
                    <th>Tên loại</th>

                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($row = mysqli_fetch_array($ketqua)){
                        echo "<tr>";
                          echo "<td>".$row['dsnguyen_id']."</td>";
                          echo "<td> <img style= \"width: 70px; height: 55px\" src=\"../images/".$row['dsnguyen_hinh']." \"></td>";
                          echo "<td>".$row['dsnguyen_tieude']."</td>";
                          echo "<td>".$row['dsnguyen_tacgia']."</td>";
                          echo "<td>".$row['dsnguyen_ngaydang']."</td>";
                          echo "<td>".$row['dsnguyen_tenloai']."</td>";

                          echo "<td><a href=\"xoatintuc.php?id=".$row[0]."\" class=\"btn btn-danger\">Xóa</a> <a href=\"capnhattintuc.php?id=".$row[0]."\" class=\"btn btn-primary\">Cập nhật</a></td>";
                        echo "</tr>";
                      }
                    ?>
                </tfoot>
                <tr>
                  <th>ID</th>
                  <th>Hình</th>
                  <th>Tiêu đề</th>
                  <th>Tác giả</th>
                  <th>Ngày đăng</th>
                  <th>Tên loại</th>

                  <th>ACTION</th>
                </tr>
              </table>
          <br>
          <a href="themtintuc.php" class="btn btn-primary">Thêm tin tức</a>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include('components/footer.php');
  ?>

  <!-- Control Sidebar -->
  <?php
    include('components/controlsidebar.php');
  ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php
    include('components/linkjs.php');
?>
</body>
</html>
