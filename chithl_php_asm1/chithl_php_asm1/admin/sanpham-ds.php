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
    <?php
    $sql = "SELECT * FROM products";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $products = mysqli_fetch_all($results, MYSQLI_BOTH);

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
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th>sửa</th>

                                        <th>Xoa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                foreach ($products as $product):
?>
                                            <tr>
                                                <td><?=$product['product_id'] ?></td>
                                                <td>
                                                    <img src="../uploads/<?=$product['image']?>" alt="" width="100px">

                                                </td>
                                                <td><?=$product['name'] ?></td>
                                                <td><?= number_format($product['price']) ?></td>
                                                <td><?=$product['description'] ?></td>
                                               
                                                <td>
                                                    <a href="update-sanpham.php?id=<?= $product['product_id'] ?>">sửa</a>

                                                </td>
                                                <td>
                                                    <a href="delete-sanpham.php?id=<?= $product['product_id'] ?>">Xóa</a>

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