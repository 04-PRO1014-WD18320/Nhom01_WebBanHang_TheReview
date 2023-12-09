<table class="table" style="width:80%; margin-left:10%" >
    <thead>
        <tr>
        
            <th scope="col">Mã hàng hoá</th>
            <th scope="col">Tên hàng hoá</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Giảm giá</th>
            <th scope="col">Hình</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Mô tả</th>
           <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($hang_hoa as $hang_hoa) {
        ?>
        <tr>
          
            <td><?php echo $hang_hoa['ma_hang_hoa'] ?></td>
            <td><?php echo $hang_hoa['ten_hang_hoa'] ?></td>
            <td><?php echo $hang_hoa['don_gia'] ?></td>
            <td><?php echo $hang_hoa['giam_gia'] ?></td>
            <td><img src="public/asset/<?php echo  $hang_hoa['hinh'] ?>" height="80px" width="80px"></td>
            <td><?php echo $hang_hoa['ngay_nhap'] ?></td>
            <td><?php echo $hang_hoa['mo_ta'] ?></td>
            



            <td><a href="./hang_hoa.php?ma_hang_hoa=<?php echo $hang_hoa['ma_hang_hoa'] ?>">
                    <button type="button" class="btn btn-warning">Sửa</button></a>

                <form action="hang_hoa.php" method="post">
                    <input type="hidden" name="action2" value="delete">
                    <input type="hidden" name="data2" value="<?php echo $hang_hoa['ma_hang_hoa'] ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php } ?>


    </tbody>
</table>


<a  role="button" class="w-50 btn btn-danger d-block mx-auto my-3" href="hang_hoa.php?store2">Nhập</a>
