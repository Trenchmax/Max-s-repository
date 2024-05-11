<?php
include 'header.php';
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
                <h4 class="page-title">QUẢN LÝ SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
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
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách sản phẩm</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                            <tr>
                                                <td>0001</td>
                                                <td>
                                                    <img src="../assets/client/img/iphone-15-pro-max_3.webp" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 1</td>
                                                <td><?= number_format(25000000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="#">Sửa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>0002</td>
                                                <td>
                                                    <img src="../assets/client/img/dien-thoai-infinix-hot-40-pro.webp" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 2</td>
                                                <td><?= number_format(4500000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="#">Sửa</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>0003</td>
                                                <td>
                                                    <img src="../assets/client/img/ss-s24-ultra-xam-222.webp" alt="" width="100px">

                                                </td>
                                                <td>Sản phẩm 3</td>
                                                <td><?= number_format(23000000)  ?></td>
                                                <td>Hiển thị</td>
                                                <td>
                                                    <a href="#">Sửa</a>
                                                </td>
                                            </tr>
                                </tbody>
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
    include 'footer.php';
    ?>