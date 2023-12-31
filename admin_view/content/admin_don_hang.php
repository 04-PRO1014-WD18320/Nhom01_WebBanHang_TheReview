<?php include_once "model/m_dia_chi.php"?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Xin chào Admin</h1>

    </div>

    <div class="row overflow-scroll">

        <table class="table table-striped ">
            <thead>
                <tr>
                    <td>Mã đơn hàng</td> 
                    <td>Tên khách hàng</td>
                    <td>Trạng thái</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($don_hang as $val) { ?>
                    <tr style="width : 2000px">
                        <td><?= $val['id_don_hang'] ?></td>
                        <td><?= $val['ten_khach_hang'] ?></td>
                        <td><?php
                            switch ($val['trang_thai']) {
                                case 1:
                                    echo '<span class="alert alert-danger d-block w-75">Đang xử lý</span>';
                                    break;
                                case 2:
                                    echo '<span class="alert alert-info d-block w-75">Đang giao hàng</span>';
                                    break;
                                case 3:
                                    echo '<span class="alert alert-success d-block w-75">Giao hàng thành công</span>';
                                    break;
                            } ?></td>

                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $val['id_don_hang'] ?>">
                                Chi tiết
                            </button>

                            <div class="modal fade" id="exampleModal<?= $val['id_don_hang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">ID : <?= $val['id_don_hang'] ?></h1>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body d-flex flex-column">
                                            Thông tin khách hàng
                                            <table class='table table-striped align-middle'>
                                                <thead>
                                                    <tr>
                                                        <td>Họ tên</td>
                                                        <td>Email</td>
                                                        <td>SĐT</td>
                                                        <td>Địa chỉ</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $val['ten_khach_hang'] ?></td>
                                                        <td><?= $val['email_khach_hang'] ?></td>
                                                        <td><?= $val['sdt'] ?></td>
                                                        <td>
                                                            <?php 
                                                                echo (new M_dia_chi())->getAllAdress($val['tinh'], $val['huyen'], $val['xa']);
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            Thông tin sản phẩm
                                            <table class='table table-striped align-middle'>
                                                <thead>
                                                    <tr>
                                                        <td>STT</td>
                                                        <td>Tên hàng hóa</td>
                                                        <td>Giá tiền</td>
                                                        <td>Số lượng</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
                                                    include_once 'model/m_ct_don_hang.php';
                                                    $ct_dh = (new M_ct_don_hang())->get_all_by_id($val['id_don_hang']);
                                                    $sum = (new M_ct_don_hang())->getSum($val['id_don_hang']);
                                                    foreach($ct_dh as $key => $vall){ ?>
                                                    <tr>
                                                        <td><?=$key+1?></td>
                                                        <td><?=$vall['ten_hang_hoa']?></td>
                                                        <td><?=$vall['gia_tien']?></td>
                                                        <td><?=$vall['so_luong']?></td>
                                                    </tr>
                                                    
                                                    <?php }
                                                    ?>
                                                    <tr class="border border-danger">
                                                        <td>Tổng tiền</td>
                                                        <td></td>
                                                        <td><?=$sum[0]['sum']?></td>
                                                        <td></td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                            Tình trạng đơn hàng :
                                            
                                            <?php
                                            switch ($val['trang_thai']) {
                                                case 1:
                                                    echo '<span class="alert alert-danger my-2">Đang xử lý</span>';
                                                    break;
                                                case 2:
                                                    echo '<span class="alert alert-info my-2">Đang giao hàng</span>';
                                                    break;
                                                case 3:
                                                    echo '<span class="alert alert-success my-2">Giao hàng thành công</span>';
                                                    break;
                                            } ?>
                                            Thay đổi tình trạng đơn hàng
                                            <form action="" method="POST" class="form mt-1">
                                                <select name="status<?= $val['id_don_hang'] ?>" class="form-select form-select-lg mb-3 form-control" aria-label="Large select example">
                                                    <option selected value="1">Đang xử lý</option>
                                                    <option value="2">Đang giao hàng</option>
                                                    <option value="3">Giao hàng thành công</option>
                                                </select>
                                                <input value="Xác nhận thay đổi ?" type="submit" class="btn btn-primary" name="btn<?= $val['id_don_hang'] ?>">
                                                <input value="Xóa đơn hàng ?" type="submit" class="btn btn-danger" name="del<?= $val['id_don_hang'] ?>">
                                            </form>
                                            <?php
                                            include_once 'model/database.php';
                                            if (isset($_POST['btn' . $val['id_don_hang']]) && $_POST['btn' . $val['id_don_hang']]) {

                                                $sql = 'UPDATE `don_hang` SET `trang_thai`= ' . $_POST['status' . $val['id_don_hang']] . ' WHERE `id_don_hang` = ' . $val['id_don_hang'];
                                                if ((new database())->pdo_execute_run($sql)) {
                                                    echo '<script>location.href="admin.php?act=don_hang"</script>';
                                                }
                                            }

                                            if (isset($_POST['del' . $val['id_don_hang']]) && $_POST['del' . $val['id_don_hang']]) {
                                                $sql = "DELETE FROM `don_hang` WHERE id_don_hang = " . $val['id_don_hang'];
                                                if ((new database())->pdo_execute_run($sql)) {
                                                    echo '<script>location.href="admin.php?act=don_hang";
                                                                    alert("Xóa đơn hàng thành công")</script>';
                                                }
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <script>
        // $(document).ready(function(){
        //     $("#btn").click(function(){
        //         $.ajax({
        //             url: "excute_don_hang.php",
        //             type : "POST",
        //             data : {
        //                 id_don_hang :,
        //                 trang_thai : 2
        //             },
        //             action: "update",
        //             success: function(result){
        //                 console.log(result);
        //             }
        //         })
        //     }); 
        // });
    </script>