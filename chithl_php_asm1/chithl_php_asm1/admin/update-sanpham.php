<?php
include 'header.php';
require ("connect.php");

?>
<?php
    $id_product = $_GET['id'];
    $sql = "SELECT * FROM products where product_id = $id_product";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $product = mysqli_fetch_assoc($results);

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
                            <li class="breadcrumb-item active" aria-current="page">sửa sản phẩm</li>
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
                    <form class="form-horizontal" action="update-sanpham-action.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">sửa sản phẩm</h4>
                            <div class="form-group row">
                                <label for="product_id" class="col-sm-3 text-end control-label col-form-label">id sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" required readonly value="<?= $product['product_id']?>" id="product_id" name="product_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Giá</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="gia" name="price">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="mota" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Loại sản phẩm</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="category_id">

                                        <option value="1">1</option>
                                        <option value="2">2</option>

                                    </select>
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
                                <button type="submit" class="btn btn-primary" name="submit">sửa</button>
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