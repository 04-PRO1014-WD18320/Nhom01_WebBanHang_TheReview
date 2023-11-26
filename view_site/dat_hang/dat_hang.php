<div class="container">
    <form id="myForm" class="mt-5" method="POST">
        <h1 class="py-5">Chọn địa chỉ khi đặt hàng của bạn </h1>
        <div class="row">
            <div>
                <div class="form-group">
                    <label for="province">Tỉnh/Thành phố</label>
                    <select id="tinh" name="tinh" class="form-control">
                        <option value="">Chọn một tỉnh</option>
                        <?php foreach ($tinh as $tinh) { ?>
                            <option value="<?php echo $tinh['id_tinh']; ?>">
                                <?php echo $tinh['ten_tinh']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Quận/Huyện</label>
                    <select id="quan_huyen" name="quan_huyen" class="form-control">
                        <option value="">Chọn một quận/huyện</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phuong_xa">Phường/Xã</label>
                    <select id="phuong_xa" name="phuong_xa" class="form-control">
                        <option value="">Chọn một xã</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="so_dien_thoai">Số điện thoại nhận hàng</label>
                    <input class="form-control" id="sdt" type="text" placeholder="Nhập số điện thoại nhận hàng">
                    <label style="color: red;" for=""><?php if(isset($error['sdt'])){
                                        echo $error['sdt'];
                                    } ?></label>
                </div>
                <input type="text" id="tinhInput" name="tinh" value="">
                <label style="color: red;" for=""><?php if(isset($listError['tinh'])){
                                        echo $listError['tinh'];
                                    } ?></label>
                <input type="text" id="huyenInput" name="huyen" value="">
                <label style="color: red;" for=""><?php if(isset($listError['huyen'])){
                                        echo $listError['huyen'];
                                    } ?></label>
                <input type="text" id="xaInput" name="xa" value="">
                <label style="color: red;" for=""><?php if(isset($listError['xa'])){
                                        echo $listError['xa'];
                                    } ?></label>

                <input type="button" name="add_sale" id="add_sale" class="btn btn-primary w-100 form-input my-3"
                    value="Đặt hàng">
            </div>
            <div>
                <div class="form-group my-4 d-flex flex-column">
                    <label for="">Thông tin khách hàng</label>

                    <input type="text" class="form-control" value="<?= $_SESSION['ho_ten'] ?>">
                    <input type="text" class="form-control" value="<?= $_SESSION['email'] ?>">
                    <input class="form-control" name="sdt" id="sdt" type="number" placeholder="Nhập số điện thoại nhận hàng" required>
                </div>
                <div class="form-group my-4 d-flex flex-column">
                    <label>Thông tin đơn hàng</label>
                    <?php include_once "controller/c_gio_hang.php";
                    $dat_hang = (new C_gio_hang())->gio_hang_by_id($_GET['id_gio_hang']);

                    echo '<input name="ten_hh" type="text" class="form-control" value="' . $dat_hang[0]['ten_hang_hoa'] . '">';
                    echo '<input name="dg" type="number" class="form-control" value="' . $dat_hang[0]['don_gia'] . '">';
                    echo '<input name="sl" type="number" class="form-control" value="' . $dat_hang[0]['so_luong_san_pham'] . '">';
                    echo '<input name="tg" type="number" class="form-control" value="' . $dat_hang[0]['tong_gia'] . '">';

                    ?>
                    <input onclick="alert('Đặt hàng thành công')" type="submit" name="add_salee"  class="btn btn-primary w-100 form-input my-3" value="Đặt hàng">
                </div>
            </div>
    </form>
    <?php
    // include_once "controller/c_don_hang.php";
    include_once 'model/database.php';
    if (isset($_POST['add_salee'])) {
        $ten_hang_hoa = $_POST['ten_hh'];
        $gia_tien = $_POST['dg'];
        $so_luong = $_POST['sl'];
        $tong_gia = $_POST['tg'];
        $ten_khach_hang = $_SESSION['ho_ten'];
        $email_khach_hang = $_SESSION['email'];
        $xa = $_POST['phuong_xa'];
        $huyen = $_POST['quan_huyen'];
        $tinh = $_POST['tinh'];
        $sdt = $_POST['sdt'];
        $trang_thai = 1;

        $query = "INSERT INTO `don_hang`(`ten_hang_hoa`, `gia_tien`, `so_luong`, `tong_gia`, 
        `ten_khach_hang`, `email_khach_hang`, `xa`, `huyen`, `tinh`, `sdt`, `trang_thai`)
         VALUES (?,?,?,?,?,?,?,?,?,?,?);";
        (new database())->pdo_execute(
            $query,
            $ten_hang_hoa,
            $gia_tien,
            $so_luong,
            $tong_gia,
            $ten_khach_hang,
            $email_khach_hang,
            $xa,
            $huyen,
            $tinh,
            $sdt,
            $trang_thai
        );
        header("Location:gio_hang.php");
    }
    ?>
</div>

<script>
    $(document).ready(function() {
        $('#tinh').on('change', function() {
            var id_tinh = $(this).val();
            $.ajax({
                url: "dat_hang.php",
                method: "POST",
                data: {
                    id_tinh: id_tinh,
                    action: "select_huyen"
                },
                success: function(data) {
                    var huyen_list = JSON.parse(data);
                    console.log(huyen_list);

                    $('#quan_huyen').empty();
                    $.each(huyen_list, function(i, huyen) {
                        $('#quan_huyen').append($('<option>', {
                            value: huyen.id_quan_huyen,
                            text: huyen.ten_quan_huyen
                        }));
                    });
                    $('#phuong_xa').empty();
                }
            });
        });

        $('#quan_huyen').on('change', function() {
            var id_quan_huyen = $(this).val();
            $.ajax({
                url: "dat_hang.php",
                method: "POST",
                data: {
                    id_quan_huyen: id_quan_huyen,
                    action: "select_phuong_xa"
                },
                success: function(data) {
                    var phuong_xa_list = JSON.parse(data);
                    console.log(phuong_xa_list);
                    $('#phuong_xa').empty();
                    $.each(phuong_xa_list, function(i, phuong_xa) {
                        $('#phuong_xa').append($('<option>', {
                            value: phuong_xa.id_phuong_xa,
                            text: phuong_xa.ten_phuong_xa
                        }));
                    });
                }
            });
        });

        $('#sdt').on('change', function(e) {
            e.preventDefault();

            var id_tinh = $('#tinh').val();
            var id_quan_huyen = $('#quan_huyen').val();
            var id_phuong_xa = $('#phuong_xa').val();
            var sdt = $('#sdt').val();

            var dataToSend = {
                id_phuong_xa: id_phuong_xa,
                id_quan_huyen: id_quan_huyen,
                id_tinh: id_tinh,
                sdt: sdt,
                action: "dat_dia_chi"
            };

            $.ajax({
                url: "dat_hang.php",
                method: "POST",
                data: dataToSend,
                success: function(data) {
                    var dia_chi_cu_the = JSON.parse(data);
                    console.log(dia_chi_cu_the);

                    $('#tinhInput').val(dia_chi_cu_the[0].ten_tinh);
                    $('#huyenInput').val(dia_chi_cu_the[0].ten_quan_huyen);
                    $('#xaInput').val(dia_chi_cu_the[0].ten_phuong_xa);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi khi gửi yêu cầu AJAX
                    console.log("Lỗi khi gửi yêu cầu: " + error);
                }
            });

        });


    });

    
</script>