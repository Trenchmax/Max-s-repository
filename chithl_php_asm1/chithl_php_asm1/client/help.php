<?php
    include "header.php";
if (isset($_SESSION['admin']) !== true) {
    header("location: login.php");
    exit;
}
?>
    <link rel="stylesheet" href="../assets/client/css/style2.css">
    <div class="slider">
        <img src="../assets/client/img/HTKH_03-min.jpg" alt="anh loi roi" class="img-slider">
        <div class="quote-slider">
            <span>
                MobileStore sẵn sàng hỗ trợ bạn!

            </span>
            <h1>
                Chào mừng đến với trang Hỗ Trợ

            </h1>
            <input type="text" class="form-controlt" placeholder="Nhập từ tìm kiếm">
        </div>
    </div>
    <div class="content">
        <div class="tittle-help">
            <h1>
                Trợ giúp Sản phẩm của bạn
            </h1>
            <h6>
                Hỗ trợ giải pháp, tải hướng dẫn, phần mềm và thông tin hữu ích khác
            </h6>
        </div>
        <div class="list-smalls">
            <div class="list-small">
                <img src="../assets/client/img/Category_MX_72x72.avif" alt="" class="img-small">
                <h3>
                    Di động
                </h3>
            </div>
            <div class="list-small">
                <img src="../assets/client/img/Category_HA_72x72.webp" alt="" class="img-small">
                <h3>
                    Gia dụng
                </h3>
            </div>
            <div class="list-small">
                <img src="../assets/client/img/Category_PC_72x72.avif" alt="" class="img-small">
                <h3>
                    Thiết bị văn phòng
                </h3>
            </div>
            <div class="list-small">
                <img src="../assets/client/img/Category_TV_72x72.avif" alt="" class="img-small">
                <h3>
                    Màn hình thiết bị
                </h3>
            </div>
            <div class="list-small">
                <img src="../assets/client/img/Camera_Product_Support_72x72.png.webp" alt="" class="img-small">
                <h3>
                    Máy ảnh & quay phim
                </h3>
            </div>
            <div class="list-small">
                <img src="../assets/client/img/pc-apps-icon-B.avif" alt="" class="img-small">
                <h3>
                    Ứng dụng & dịch vụ
                </h3>
            </div>

        </div>
        <div class="small-lists">
            <div class="small-list">
                <div class="quote-small">
                    <h2>Hỗ trợ thông minh Samsung Smart Touch Call</h2>
                    <h6>
                        Smart Touch Call (STC) là dịch vụ hỗ trợ thông minh khi Khách hàng gọi đến số tổng đài Samsung
                        miễn
                        phí 1800 588 889.
                        Hệ thống tự động sẽ hướng dẫn và liên kết đến website Samsung các công cụ như: kiểm tra bảo
                        hành,
                        xem báo giá sửa chữa ngoài bảo hành, tìm kiếm Trung Tâm Bảo Hành gần nhất...
                    </h6>
                    <h5>
                        Tìm hiểu thêm
                    </h5>
                </div>
            </div>
            <div class="small-list">
                <div class="quote-small">
                    <h2>Hỗ trợ thông minh Samsung Smart Touch Call</h2>
                    <h6>
                        Smart Touch Call (STC) là dịch vụ hỗ trợ thông minh khi Khách hàng gọi đến số tổng đài Samsung
                        miễn
                        phí 1800 588 889.
                        Hệ thống tự động sẽ hướng dẫn và liên kết đến website Samsung các công cụ như: kiểm tra bảo
                        hành,
                        xem báo giá sửa chữa ngoài bảo hành, tìm kiếm Trung Tâm Bảo Hành gần nhất...
                    </h6>
                    <h5>
                        Tìm hiểu thêm
                    </h5>
                </div>
            </div>
            <div class="small-list">
                <div class="quote-small">
                    <h2>Hỗ trợ thông minh Samsung Smart Touch Call</h2>
                    <h6>
                        Smart Touch Call (STC) là dịch vụ hỗ trợ thông minh khi Khách hàng gọi đến số tổng đài Samsung
                        miễn
                        phí 1800 588 889.
                        Hệ thống tự động sẽ hướng dẫn và liên kết đến website Samsung các công cụ như: kiểm tra bảo
                        hành,
                        xem báo giá sửa chữa ngoài bảo hành, tìm kiếm Trung Tâm Bảo Hành gần nhất...
                    </h6>
                    <h5>
                        Tìm hiểu thêm
                    </h5>
                </div>
            </div>

        </div>
        <div class="tittle-help">
            <h1>Tìm thông tin bổ sung</h1>
        </div>
        <div class="list-largers">
            <div class="list-larger">
                <div class="quote-list">
                    <h2>
                        Bảo hành
                        <img src="../assets/client/img/additional-info-icon-warranty-pc.webp" alt="" class="img-list">
                    </h2>

                    <p>
                        Đăng ký sản phẩm của bạn và tìm hiểu phạm vi bảo hành
                    </p>
                    <p class="p">
                        CHÍNH SÁCH BẢO HÀNH
                    </p>
                    <p class="p">
                        KIỂM TRA THỜI HẠN BẢO HÀNH
                    </p>
                </div>
            </div>
            <div class="list-larger">
                <div class="quote-list">
                    <h2>
                        Trang của tôi
                        <img src="../assets/client/img/your-service-icon-pc.webp" alt="" class="img-list">
                    </h2>

                    <p>
                        Nhận tin trải nghiệm sản phẩm Samsung mới nhất gồm đề xuất, sửa chữa, bảo hành, hướng dẫn… Kiểm
                        tra điểm thưởng hiện tại và các quyền lợi hội viên dành riêng cho bạn.
                    </p>

                    <p class="p">
                        TRANG CỦA TÔI
                    </p>
                </div>
            </div>
            <div class="list-larger">
                <div class="quote-list">
                    <h2>
                        Bảng giá linh kiện
                        <img src="../assets/client/img/Home_addInfo_ServicePortal.webp" alt="" class="img-list">
                    </h2>

                    <p>
                        Tham khảo bảng giá linh kiện điện thoại
                    </p>

                    <p class="p">
                        TÌM HIỂU THÊM
                    </p>
                </div>
            </div>
            <div class="list-larger">
                <div class="quote-list">
                    <h2>
                        Eco-Conscious Service
                        <img src="../assets/client/img/eco_image_1.avif" alt="" class="img-list">
                    </h2>

                    <p>
                        Tìm hiểu về những dự án vì môi trường được thực hiện trong phạm vi dịch vụ Chăm sóc Khách hàng
                        của Samsung
                    </p>
                    <p class="p">
                        TÌM HIỂU THÊM
                    </p>
                    <p class="p">
                        ĐIỂM XỬ LÍ PIN CŨ
                    </p>
                </div>
            </div>
            <div class="list-larger">
                <div class="quote-list">
                    <h2>
                        Dịch vụ mở rộng
                        <img src="../assets/client/img/Home_addInfo_ServicePortal (1).webp" alt="" class="img-list">
                    </h2>

                    <p>
                        Tham khảo những dịch vụ Gia tăng nhằm nâng cao trải nghiệm sản phẩm Samsung
                    </p>
                    <p class="p">
                        LÊN ĐỜI SẢN PHẨM
                    </p>
                    <p class="p">
                        BẢO HÀNH BẢO HIỂM MỞ RỘNG TV
                    </p>
                </div>
            </div>
            <div class="list-larger">
                <div class="quote-list">
                    <h2>
                        Ngôn ngữ ký hiệu
                        <img src="../assets/client/img/sign_lang_icon.webp" alt="" class="img-list">
                    </h2>

                    <p>Samsung cam kết mang đến cho mọi khách hàng sự quan tâm và trải nghiệm tốt nhất. Đó là lý do
                        chúng tôi đã tiên phong triển khai dịch vụ hỗ trợ khách hàng sử dụng Ngôn ngữ ký hiệu lần đầu
                        tiên tại Việt Nam.

                    </p>
                    
                    <p class="p">
                        TÌM HIỂU THÊM
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php
    include "footer.php";
?>