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
                <h4 class="page-title">QUẢN LÝ LOẠI SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách loại sản phẩm</li>
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
    $sql = "SELECT * FROM categories";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $categories = mysqli_fetch_all($results, MYSQLI_BOTH);

        ?>
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Danh sách loại sản phẩm</h5>
                            <div class="table-responsive">
                                <table id="" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Trạng thái</th>
                                            <th>sửa</th>
                                            <th>xóa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($categories as $category):

                                            ?>

                                            <tr>
                                                <td>
                                                    <?= $category['category_id'] ?>
                                                </td>
                                                <td>
                                                    <?= $category['name'] ?>
                                                </td>
                                                <td>

                                                    <?php
                                                    if ($category['status'] == 1) {





                                                        ?>
                                                        hiển thị

                                                        <?php
                                                    } else {

                                                        ?>
                                                        Ẩn

                                                        <?php
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="update-loaisanpham.php?id=<?= $category['category_id'] ?>">Sửa</a>


                                                </td>
                                                <td>
                                                    <a href="delete-loaisanpham.php?id=<?= $category['category_id'] ?>">Xóa</a>

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