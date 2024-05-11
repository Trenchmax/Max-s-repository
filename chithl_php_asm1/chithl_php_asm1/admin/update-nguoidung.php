<?php
 include 'header.php';
 require 'connect.php';
?>
<?php
    $id_user = $_GET['id'];
    $sql = "SELECT * FROM users where user_id = $id_user";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $user = mysqli_fetch_assoc($results);

        ?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">QUẢN LÝ NGƯỜI DÙNG</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">sửa người dùng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="update-nguoidung-action.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">sửa Người dùng</h4>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">id người dùng</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" required readonly value="<?= $user['user_id']?>" id="ten" name="user_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="gia" name="password" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="gia" name="email" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên người dùng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten" name="username">
                                </div>
                            </div>
                           
                           
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Trạng thái</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="them">sửa</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->


    <?php
    endif;
    include 'footer.php';
    ?>


