<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên khách</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Trạng thái</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
  
        foreach ($don_hang_user as  $loai) {
        ?>
            <tr>
                <td><?php echo $loai['id_don_hang'] ?></td>
                <td><?php echo $loai['ten_khach_hang'] ?></td>
                <td><?php echo $loai['email_khach_hang'] ?></td>
                <td><?php echo $loai['sdt'] ?></td>
                <td><?php echo $loai['ten_phuong_xa'].','.$loai['ten_quan_huyen'].','.$loai['ten_tinh']; ?></td>
                <td><?php 
                    switch($loai['trang_thai']){
                        case 1:
                            echo "<p class='alert alert-danger'>Đang xử lý</p>";
                            break;
                        case 2:
                            echo "<p class='alert alert-warning'>Đang giao hàng</p>";
                            break;
                        case 3:
                            echo "<p class='alert alert-success'>Giao hàng thành công</p>";
                            break;
                        default:
                            break;
                    }
                ?></td>
                <td><a href="don_hang.php?ma_don=<?php echo $loai['id_don_hang'] ?>">
                        <button type="button" class="btn btn-warning">Xem chi tiết</button></a>

                    <form action="don_hang.php" method="post">
                    <input type="text" name="id" value="<?php echo $loai['id_don_hang'] ?>" hidden>
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

