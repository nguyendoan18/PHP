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
  <title>Trang cập nhật tin tức</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php
    include('components/linkcss.php');

    include('ketnoi.php');
    $sql ="SELECT * FROM dsnguyen_loaitin";

    $id=$_GET['id'];
    $sql_tintuc = "SELECT * FROM dsnguyen_tintuc WHERE dsnguyen_id=$id";
    $ketqua_tintuc = mysqli_query($ketnoi,$sql_tintuc);
    $row_tintuc = mysqli_fetch_array($ketqua_tintuc);
    
    $ketqua = mysqli_query($ketnoi,$sql);
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
        Cập nhật tin tức
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
          <h3 class="box-title">Cập nhật tin tức</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <form role="form" action="thuchiencapnhattintuc.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1">ID</label> -->
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row_tintuc[0]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Hình:</label>
                  <input type="file" class="form-control" name="hinh" placeholder="Chọn hình ảnh...">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tiêu đề:</label>
                  <input type="text" class="form-control" value="<?php echo $row_tintuc[2]; ?>" name="tieude" placeholder="Nhập tiêu đề...">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tác giả:</label>
                  <input type="text" class="form-control" value="<?php echo $row_tintuc[4]; ?>" name="tacgia" placeholder="Nhập tác giả...">
                </div>
                <div class="form-group">
                  <label for="">Nội dung</label>
                  <textarea class="form-control"  name="noidung" rows="3"><?php echo $row_tintuc[5]; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="">Loại tin</label>
                  <select class="form-control" name="loaitin">
                        <?php
                            
                            while($row1 = mysqli_fetch_array($ketqua)){
                                
                                 echo "<option value=\"".$row1[0]."\">".$row1[1]."</option>";
                            }
                        ?>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
              </div>
            </form>
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
