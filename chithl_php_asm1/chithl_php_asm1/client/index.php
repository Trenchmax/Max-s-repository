<!-- Thêm file header.php  -->
<?php
include 'header.php';
require 'connect.php';
if (isset($_SESSION['admin']) !== true) {
    header("location: login.php");
    exit;
}


?>

<?php
    $sql = "SELECT * FROM products";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $products = mysqli_fetch_all($results, MYSQLI_BOTH);

        ?>
<!-- Nội dung trang chủ  -->

<!-- hết footer -->
<link rel="stylesheet" href="../assets/client/css/style1.css">
<div class="slider">
        <img src="../assets/client/img/b31c51ea-fb40-4eeb-b97e-9eae5da9b010-cover.png" alt="" class="img-slider">
    </div>

    <div class="content">
        <h1 class="titile-content">Sản phẩm mới</h1>
        <div class="list-products">
            <div class="list-product">
                <img src="../assets/client/img/iphone-15-pro-max_3.webp" alt="ảnh lỗi rồi" class="img-product">
                <h4 class="title-product">
                    iPhone 15 Pro Max 256GB | Chính hãng VN/A
                </h4>
                <span class="cost-product">
                    30.890.000₫
                </span>
                <br>
                <div class="sub-down">
                    <span>
                        Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6 tháng
                    </span>
                </div>
                <br>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            <div class="list-product">
                <img src="../assets/client/img/ss-s24-ultra-xam-222.webp" alt="ảnh lỗi rồi" class="img-product">
                <h4 class="title-product">
                    Samsung Galaxy S24 Ultra 12GB 256GB
                </h4>
                <span class="cost-product">
                    29.190.000₫
                </span>
                <br>
                <div class="sub-down">
                    <span>
                        Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung Finance+
                    </span>
                </div>
                <br>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            <div class="list-product">
                <img src="../assets/client/img/dien-thoai-infinix-hot-40-pro.webp" alt="ảnh lỗi rồi" class="img-product">
                <h4 class="title-product">
                    Infinix Hot 40 Pro Free Fire 8GB 256GB
                </h4>
                <span class="cost-product">
                    4.290.000₫
                </span>
                <br>
                <div class="sub-down">
                    <span>
                        Trả góp 0% lãi suất, không trả trước, không phụ phí qua Shinhan Finance
                    </span>
                </div>
                <br>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            <div class="list-product">
                <img src="../assets/client/img/gtt_7766_3__1_5.webp" alt="ảnh lỗi rồi" class="img-product">
                <h4 class="title-product">
                    Xiaomi Redmi Note 12 8GB 128GB
                </h4>
                <span class="cost-product">
                    4.290.000₫
                </span>
                <br>
                <div class="sub-down">
                    <span>
                        Trả góp 0% lãi suất, không trả trước, không phụ phí qua Shinhan Finance
                    </span>
                </div>
                <br>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            <div class="list-product">
                <img src="../assets/client/img/oppo-reno-11-f-xanh-2.webp" alt="ảnh lỗi rồi" class="img-product">
                <h4 class="title-product">
                    OPPO Reno11 F 5G 8GB 256GB
                </h4>
                <span class="cost-product">
                    8.990.000₫
                </span>
                <br>
                <div class="sub-down">
                    <span>
                        Trả góp 0% lãi suất, không trả trước, không phụ phí qua Shinhan Finance
                    </span>
                </div>
                <br>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>
            <div class="list-product">
                <img src="../assets/client/img/xiaomi-redmi-note-13-pro-4g_13__1.webp" alt="ảnh lỗi rồi" class="img-product">
                <h4 class="title-product">
                    Xiaomi 13T Pro 5G (12GB - 512GB) - Chỉ có tại CellphoneS
                </h4>
                <span class="cost-product">
                    14.790.000₫
                </span>
                <br>
                <div class="sub-down">
                    <span>
                        Tặng bảo hành Premium
                    </span>
                </div>
                <br>
                <button class="btn">Thêm vào giỏ hàng</button>
            </div>

        </div>
        <h1 class="tittle-product">
            Những sản phẩm khác
        </h1>
        <div class="different-products">

            <div class="different-product">
                <img src="../assets/client/img/gaming_003_3__3.webp" alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">
                    Laptop Lenovo Yoga Duet 7 13ITL6 
                </h4>
                <span class="product-cost">

                    18.990.000₫

                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 1.000.000đ khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/smart-tivi-khung-tranh-samsung-the-frame-ltv-4k-55-inch-55ls03ba.webp"
                    alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">
                    Smart Tivi Samsung LTV 55 inch 55LS03BA
                </h4>
                <span class="product-cost">


                    13.990.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Tặng TV Samsung VG-SCFA55TKBRU
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/group_170_1_1.webp" alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">
                    Tai nghe Bluetooth Apple AirPods 3
                </h4>
                <span class="product-cost">


                    3.990.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Nhận gói 6 tháng Apple Music miễn phí
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/may-cao-rau-enchen-blackstone-5s.webp" alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">
                    Máy cạo râu Enchen Blackstone 5S
                </h4>
                <span class="product-cost">


                    239.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 1.000.000đ khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/smart_tivi_samsung_qled_55_inch_55q60bak.webp" alt="anh loi roi "
                    class="product-img">
                <h4 class="product-tittle">
                    Smart Tivi Samsung QLED 55 inch 55Q60BAK
                </h4>
                <span class="product-cost">


                    11.790.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 1.000.000đ khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/tai-nghe-khong-day-huawei-freeclip-0.webp" alt="anh loi roi "
                    class="product-img">
                <h4 class="product-tittle">
                    Tai nghe Bluetooth True Wireless
                </h4>
                <span class="product-cost">


                    4.290.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 1.000.000đ khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/noi-com-dien-bluestone-1-5-lit-rcb-5949-1.webp" alt="anh loi roi "
                    class="product-img">
                <h4 class="product-tittle">
                    Nồi cơm điện tử BlueStone RCB-5949
                </h4>
                <span class="product-cost">


                    1.490.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 1.000.000đ khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/apple-watch-se-2023-40mm.webp" alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">
                    Apple Watch SE 2 2023 40mm (GPS)
                </h4>
                <span class="product-cost">

                    5.690.000₫

                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 500K khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/m_y_t_m_n_c_h2ofloss_hf-9p.webp" alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">

                    Máy tăm nước H2ofloss HF-9P
                </h4>
                <span class="product-cost">
        


                    610.000₫



                </span>
                <div class="sub-down">
                    <span>
                        Giảm ngay 500K khi thanh toán qua VNPAY
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>
            <div class="different-product">
                <img src="../assets/client/img/samsung-tab-s9-xam-1_1-pre_1_.webp" alt="anh loi roi " class="product-img">
                <h4 class="product-tittle">
                    Samsung Galaxy Tab S9 Ultra 12GB 512GB
                </h4>
                <span class="product-cost">


                    23.490.000₫


                </span>
                <div class="sub-down">
                    <span>
                        Tặng gói dịch vụ đặc quyền (Microsoft Office 365,...)
                    </span>
                </div>
                <button class="btn-2">
                    Thêm vào giỏ hàng
                </button>
            </div>

        </div>
    </div>

<!-- Thêm file footer  -->
<?php
endif;
include 'footer.php';
?>