<?php
include 'header.php';
?>
<?php
require_once 'connect.php';
?>
<?php
    $id_category = $_GET['id'];
    $sql = "SELECT * FROM categories where category_id = $id_category";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $category = mysqli_fetch_assoc($results);

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
                            <li class="breadcrumb-item active" aria-current="page">sửa loại sản phẩm</li>
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
                    <form class="form-horizontal" action="update-loaisanpham-action.php" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">sửa loại sản phẩm</h4>
                            <div class="form-group row">
                                <label for="categori_id" class="col-sm-3 text-end control-label col-form-label">id loại</label>
                                <div class="col-sm-9">
                                    <input type="number"  class="form-control" id="category_id" required readonly value="<?= $category['category_id']?>" placeholder="Nhập tên loại sản phẩm..." name="category_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" id="ten"  value="<?= $category['name']?>" placeholder="Nhập tên loại sản phẩm..." name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Trạng thái</label>
                                <div class="col-md-9">
                                    <select  class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="status">
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