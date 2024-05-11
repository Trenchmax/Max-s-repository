<?php
include 'header.php';
require ("connect.php");

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
                            <li class="breadcrumb-item active" aria-current="page">Danh sách người dùng</li>
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
    <?php
    $sql = "SELECT * FROM users";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $users = mysqli_fetch_all($results, MYSQLI_BOTH);

        ?>
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Danh sách sản phẩm</h5>
                            <div class="table-responsive">
                                <table id="" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>mật khẩu</th>
                                            <th>email</th>

                                            <th>tài khoản</th>
                                            <th>Trạng thái</th>
                                            <th>sửa</th>
                                            <th>xóa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($users as $user):

                                            ?>

                                            <tr>
                                                <td>
                                                    <?= $user['user_id'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['name'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['password'] ?>
                                                </td>

                                                <td>
                                                    <?= $user['email'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['username'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['status'] ?>
                                                </td>
                                                <td>
                                                <a href="update-nguoidung.php?id=<?= $user['user_id'] ?>">Sửa</a>

                                                </td>
                                                <td>
                                                    <a href="delete-nguoidung.php?id=<?= $user['user_id'] ?>">Xóa</a>


                                                </td>
                                            </tr>

                                        </tbody>
                                        <?php
                                        endforeach;
                                        ?>
                                </table>
                            </div>

                        </div>
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