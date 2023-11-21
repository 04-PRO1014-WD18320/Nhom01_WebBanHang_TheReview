<?php
// session_start();
?>

<div class="container pb-5">
            <div id="sec-2" class="container-fluid mt-5">
                
                <div id="sec-2-content" class="container-fluid mt-1">
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <img src="public/asset/<?= $chi_tiet_hang_hoa['hinh']?>" class="d-block w-100 img-slider" alt="...">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <h4 class="">
                            <?= $chi_tiet_hang_hoa['ten_hang_hoa'] ?>
                                </h5>
                                <p class="card-text">
                                    
                                    –
                                    NEW
                                </p>
                                <del>
                                <?= $chi_tiet_hang_hoa['don_gia'] ?>
                                </del>
                                <p class="fs-4 text-danger fw-bold">
                                <?= $chi_tiet_hang_hoa['don_gia'] ?> VND
                                </p>
                                <div>
                                    <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Sản
                                        phẩm
                                        chính hãng Apple mới
                                        100% nguyên seal</p>
                                    <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Giá đã
                                        bao
                                        gồm VAT</p>
                                    <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Bảo
                                        hành
                                        12 tháng</p>
                                    <p><i class="fa-solid fa-hand-point-up fa-rotate-90" style="color: #218656;"></i> Giảm
                                        giá
                                        10% khi mua phụ kiện
                                        kèm theo</p>
                                </div>
                                <form action="" class="my-3 d-flex flex-column">
                                    <div class="my-3">
                                    <input type="checkbox" class="btn-check dungluong" id="btn-check-1" checked autocomplete="off">
                                    <label class="btn tendungluong" for="btn-check-1">128 GB</label>
                                    <input type="checkbox" class="btn-check dungluong" id="btn-check-2" checked autocomplete="off">
                                    <label class="btn tendungluong" for="btn-check-2">256 GB</label>
                                    <input type="checkbox" class="btn-check dungluong" id="btn-check-3" checked autocomplete="off">
                                    <label class="btn tendungluong" for="btn-check-3">512 GB</label>
                                    </div>
                                    
                                    <div class="my-3">
                                    <input type="checkbox" class="btn-check rounded-circle m-3" id="btn-check-4" checked autocomplete="off">
                                    <label class="btn btn-light m-2 p-4 border border-secondary border-2" for="btn-check-4"></label>
                                    <input type="checkbox" class="btn-check rounded-circle m-3" id="btn-check-5" checked autocomplete="off">
                                    <label class="btn btn-dark m-2 p-4 border border-secondary border-2" for="btn-check-5"></label>
                                    <input type="checkbox" class="btn-check rounded-circle m-3" id="btn-check-6" checked autocomplete="off">
                                    <label class="btn btn-danger m-2 p-4 border border-secondary border-2" for="btn-check-6"></label>
                                    </div>
                                    

                                </form>
                                
                                <div class="border p-4">

                                    <p><i class="fa-solid fa-gear" style="color: red;"></i> Bộ xử lý CPU:
                                        chip with
                                        8‑core CPU, 8‑core GPU, 16‑core Neural Engine
                                    </p>
                                    <p><i class="fa-solid fa-gear" style="color: red;"></i> Bộ nhớ RAM:
                                       unified memory
                                    </p>
                                    <p><i class="fa-solid fa-gear" style="color: red;"></i> Ổ cứng:
                                       SSD storage
                                    </p>
                                    <p><i class="fa-solid fa-gear" style="color: red;"></i> Màn hình:
                                         Liquid Retina
                                        display with True Tone
                                    </p>
                                    <p><i class="fa-solid fa-gear" style="color: red;"></i> Card màn hình:
                                      
                                    </p>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <a href="#" class="btn btn-danger"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                        Mua
                                        ngay</a>
                                    <a href="#" class="btn btn-success"><i class="fa-solid fa-phone"></i> Liên hệ</a>
                                </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <a href="#" class="card-title link-underline-opacity-0 link-underline">
                                <div class="card">
                                    <div class="card-header">
                                        Chính sách bán hàng
                                    </div>
                                    <div class="card-body">
                                        <p><i class="fa-solid fa-check" style="color: #218656;"></i> Dùng thử 10 ngày miễn
                                            phí
                                            đổi máy. (Macbook Like New)</p>
                                        <p><i class="fa-solid fa-check" style="color: #218656;"></i> Lỗi 1 Đổi 1 trong 30
                                            ngày
                                            đầu. (Macbook Like New)</p>
                                        <p><i class="fa-solid fa-check" style="color: #218656;"></i> Giao hàng tận nhà toàn
                                            quốc
                                        </p>
                                        <p><i class="fa-solid fa-check" style="color: #218656;"></i> Thanh toán khi nhận
                                            hàng
                                            (nội thành)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sec-3" class="mx-5">
                <h3 class="mt-5 mb-4">Thông số kỹ thuật</h3>
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Bộ xử lý CPU:</th>
                            <td>
                                chip with
                                8‑core CPU, 8‑core GPU, 16‑core Neural Engine
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Bộ nhớ RAM:</th>
                            <td>
                                 unified memory
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Màn hình:</th>
                            <td>1
                                 Liquid Retina
                                display with True Tone
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Card màn hình:</th>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Ổ cứng:</th>
                            <td>
                                SSD storage
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Kích thước và trọng lượng:</th>
                            <td>2.7 pounds (1.24 kg)</td>
                        </tr>
                        <tr>
                            <th scope="row">Camera:</th>
                            <td>
                                FaceTime HD camera
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="sec-4" class="mx-5 d-flex flex-column">
                <h3 class="mt-5 mb-4">Mô tả sản phẩm</h3>
                <img src="public/asset/<?= $chi_tiet_hang_hoa['hinh']?>" style="width: 30rem;" alt="">
                <?= $chi_tiet_hang_hoa['mo_ta'] ?>
            </div>
            <h3 class="mt-5 mb-4 m-5">Bình luận</h3>
            <div style="width: 80%" class="d-block mx-auto">
                
            <iframe src="comments.php?pro_id=17" height="500" width="100%" title="Iframe Example"></iframe>
            </div>
        </div>


<div class="related-products" style="background-color: #f7f7f7; padding: 20px;">
    <!-- Phần hiển thị các sản phẩm tương tự -->
    <h2 class="related-products-title" style="font-size: 24px; margin-bottom: 20px; border-bottom: 2px solid #333; padding-bottom: 10px;">Sản phẩm
        tương tự</h2>
    <div class="related-products-list" style="display: flex; flex-wrap: wrap; gap: 20px;">
        <!-- Phần hiển thị các sản phẩm tương tự -->
        <?php foreach ($loai_hang as $lh) { ?>

            <a href="" class="card-title link-underline-opacity-0 link-underline">
                        <div class="card">
                            <img style="height: 15rem;" src="public/asset/<?=$lh['hinh']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class=""><?=$lh['ten_hang_hoa']?></h5>
                                <p class="card-text">Ram Rom </p>
                                <span class="badge text-bg-warning">Đã bán: <?=$lh['da_ban']?></span>
                                <del><?=$lh['don_gia']?> đ</del>
                                <p class="fs-5 text-danger fw-bold"><?=$lh['don_gia'] ?>đ</p>

                                <a href="#" class="btn btn-outline-danger mt-1"><i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </a>
        <?php } ?>
    </div>
</div>

<script>
    $('#add').on('click', function() {

        var ma_san_pham = $('#ma_san_pham').val();
        var so_luong = $('#so_luong').val();
        var action = "create"; // Định nghĩa biến action và gán giá trị "create"



        // Tạo một đối tượng JavaScript chứa dữ liệu để gửi
        var dataToSend = {
            ma_san_pham: ma_san_pham,
            so_luong: so_luong,
            action: action
        };
        console.log("ma_san_pham: " + ma_san_pham);
        console.log("so_luong: " + so_luong);

        $.ajax({
            url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {
                // Hiển thị popup
                $("#popup").show();

                // Đặt thời gian chờ 1 giây (1000 milliseconds) trước khi ẩn popup
                setTimeout(function() {
                    // Ẩn popup sau 1 giây
                    $("#popup").hide();
                }, 1000);
            }
        });
    });



    $('#binh_luan').click(function() {
        var ma_san_pham = $('#ma_san_pham').val();
        var ma_khach_hang = $('#ma_khach_hang').val();
        var comment = $('#comment').val();
        var action = "create";

        var dataToSend = {
            ma_khach_hang: ma_khach_hang,
            ma_hang_hoa: ma_san_pham,
            noi_dung: comment,
            action: action
        };

        $.ajax({
            url: "binh_luan.php",
            method: "POST",
            data: dataToSend,
            success: function(data) {
                data = JSON.parse(data);

                $("#a").text(data);


                $('#comment').val('');
            }
        });
    });

    $('#binh_luan').click(function() {

        var ma_san_pham = $('#ma_san_pham').val();

        var action = "create2";


        // Tạo một đối tượng JavaScript chứa dữ liệu để gửi
        var dataToSend = {

            ma_hang_hoa: ma_san_pham,
            action: action

        };
        $.ajax({
            url: "binh_luan.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {

            }
        });
    });

    let dungluong = document.querySelectorAll('.dungluong');
    let tendungluong = document.querySelectorAll('.tendungluong');
    function removeAll(){
        dungluong.forEach((item, index) =>{
            tendungluong[index].classList.remove('btn-success');
    })
    }
    dungluong.forEach((item, index) =>{
        item.addEventListener('click', function(){
            removeAll();
            tendungluong[index].classList.toggle('btn-success');
        });
    })
</script>