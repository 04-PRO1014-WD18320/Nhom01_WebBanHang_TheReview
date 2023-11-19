<div class="container overflow-scroll">
    <div class="row">
        <div class="col-lg">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">

                    Tên sản phẩm
                    <input type="text" name="pro_name" id="" class="form-control" required>
                    Tiêu đề
                    <input type="text" name="pro_title" id="" class="form-control" required>
                    Giới thiệu
                    <input type="text" name="pro_intro" id="" class="form-control" required>
                    Giá hiện tại
                    <input type="number" name="pro_price" id="" class="form-control" required>
                    Giá khuyến mại
                    <input type="number" name="pro_price_sale" id="" class="form-control" required>
                    Chi tiết sản phẩm
                    <input type="text" name="pro_detail" id="" class="form-control" required>
                    Ảnh
                    <input class="form-control" name="pro_image" type="file" id="" required>
                    Ram
                    <input type="text" name="pro_ram" class="form-control" required>
                    Cpu
                    <input type="text" name="pro_cpu" class="form-control" required>
                    Rom
                    <input type="text" name="pro_rom" class="form-control" required>
                    Màn hình
                    <input type="text" name="pro_display" class="form-control" required>
                    Độ phân giải
                    <input type="text" name="pro_display_card" class="form-control" required>
                    Camera
                    <input type="text" name="pro_camera" class="form-control" required>
                    Trọng lượng
                    <input type="number" name="pro_weight" id="" class="form-control" required>
                    Loại sản phẩm
                    <select name="pro_cate" id="" class='form-control'>
                        <?php
                        $a_cate = "select * from category where cate_id not like '%00'";
                        foreach (pdo_query($a_cate) as $rows) {
                            print_r("<option value='{$rows['cate_id']}'>{$rows['cate_name']}</option>");
                        }
                        ?>
                    </select>
                </div>
                <br>
                <input type="submit" name="addproduct" class="btn btn-danger" value="Thêm sản phẩm">

            </form>

            <?php
            if (isset($_POST['addproduct'])) {
                $pro_cate = $_POST['pro_cate'];
                $pro_title = $_POST['pro_title'];
                $pro_intro = $_POST['pro_intro'];
                $pro_price = $_POST['pro_price'];
                $pro_price_sale = $_POST['pro_price_sale'];
                $pro_detail = $_POST['pro_detail'];
                $pro_ram = $_POST['pro_ram'];
                $pro_cpu = $_POST['pro_cpu'];
                $pro_rom = $_POST['pro_rom'];
                $pro_camera = $_POST['pro_camera'];
                $pro_weight = $_POST['pro_weight'];
                $pro_display_card = $_POST['pro_display_card'];
                $pro_display = $_POST['pro_display'];
                $pro_img_name = $_FILES['pro_image']['name'];
                $pro_img_tmp = $_FILES['pro_image']['tmp_name'];
                move_uploaded_file($pro_img_tmp, "../asset/" . $pro_img_name);
                $pro_add_q = "INSERT INTO `product`(`product_id`, `cate_id`, `title`, `intro`, `price`, `price_sale`, `detail`, `image`, `ram`, `cpu`, `rom`, `display_card`, `display`, `camera`, `weight`, `purchase`)
                     VALUES (null,'$pro_cate','$pro_title','$pro_intro','$pro_price','$pro_price_sale','$pro_detail}','$pro_img_name',
                     '$pro_ram','$pro_cpu','$pro_rom','$pro_display_card','$pro_display','$pro_camera','$pro_weight',0)";
                pdo_excute($pro_add_q);
            }
            ?>
        </div>
        <table class="table table-striped table-bordered mt-3">
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <th scope="row">ID</th>
                    <th scope="row">Tên sản phẩm</th>
                    <th scope="row">Giới thiệu</th>
                    <th scope="row">Giá hiện tại</th>
                    <th scope="row">Giá khuyến mại</th>
                    <th scope="row">Chi tiết sản phẩm</th>
                    <th scope="row">Ảnh</th>
                    <th scope="row">Ram</th>
                    <th scope="row">CPU</th>
                    <th scope="row">Rom</th>
                    <th scope="row">Màn Hình</th>
                    <th scope="row">Độ phân giải</th>
                    <th scope="row">Camera</th>
                    <th scope="row">Trọng lượng</th>
                    <th scope="row">Doanh số</th>
                    <th></th>
                </tr>
                <?php
                $a_pro = "select * from product";
                foreach (pdo_query($a_pro) as $rows) {?>
                    <tr>
                        <td>
                            <input type="checkbox" name="check[]" value="<?= $rows['product_id']?>"/>
                        </td>
                        <td>
                            <?php echo $rows['product_id']?>
                        </td>
                        <td>
                            <?php echo $rows['title']?>
                        </td>
                        <td>
                            <?php echo $rows['intro']?>
                        </td>
                        <td>
                            <?php echo $rows['price']?>
                        </td>
                        <td>
                            <?php echo $rows['price_sale']?>
                        </td>
                        <td class="text-truncate" style="max-width: 30px;">
                            <?php echo $rows['detail']?>
                        </td>
                        <td><img style="width: 30px;" src="../asset/<?php echo $rows['image'] ?>"></td>
                        <td>
                            <?php echo $rows['ram']?>
                        </td>
                        <td>
                            <?php echo $rows['cpu']?>
                        </td>
                        <td>
                            <?php echo $rows['rom']?>
                        </td>
                        <td>
                            <?php echo $rows['display']?>
                        </td>
                        <td>
                            <?php echo $rows['display_card']?>
                        </td>
                        <td>
                            <?php echo $rows['camera']?>
                        </td>
                        <td>
                            <?php echo $rows['weight']?>
                        </td>
                        <td>
                            <?php echo $rows['purchase'] ?>
                        </td>
                        <td>
                            
                                <div class="btn btn-group">
                                    <a class="btn btn-primary" role="button" href="index.php?act=product&change=<?php echo $rows['user_id']?>">Sửa</a>
                                    <a class="btn btn-danger"  role="button" href="./products/delete.php?delete=<?php echo $rows['user_id']?>" onclick='return confirm("Bạn có chắc muốn xoá")'>Xoá</a>
                                </div>
                           
                        </td>
                        <?php } ?>
                            <?php
                            if (isset($_GET['changeP'])) {
                                $a_query_product = "select * from product where product_id = " . $_GET['changeP'];
                                foreach (pdo_query($a_query_product) as $rows) { ?>

                            <form action="" method="post" class="my-2" enctype="multipart/form-data">
                                    <p>Tên sản phẩm</p> <input type="text" class="form-control" name="pro_name"
                                        value="<?php echo $rows['title'] ?>">
                                    <p>Giới thiệu</p> <input type="text" class="form-control" name="pro_intro"
                                        value="<?php echo $rows['intro'] ?>">
                                    <p>Giá hiện tại</p> <input type="number" class="form-control" name="pro_price"
                                        value="<?php echo $rows['price'] ?>">
                                    <p>Giá khuyến mại</p> <input type="number" class="form-control" name="pro_price_sale"
                                        value="<?php echo $rows['price_sale'] ?>">
                                    <p>Chi tiết sản phẩm</p> <input type="text" class="form-control" name="pro_detail"
                                        value="<?php echo $rows['phone'] ?>">
                                    <p>Ảnh</p> <input type="file" class="form-control" name="pro_image"
                                        value="<?php echo $rows[''] ?>">
                                    <p>Ram</p> <input type="text" class="form-control" name="pro_ram"
                                        value="<?php echo $rows['ram'] ?>">
                                    <p>CPU</p> <input type="text" class="form-control" name="pro_cpu"
                                        value="<?php echo $rows['cpu'] ?>">
                                    <p>Rom</p> <input type="text" class="form-control" name="pro_rom"
                                        value="<?php echo $rows['rom'] ?>">
                                    <p>Màn Hình</p> <input type="text" class="form-control" name="pro_display"
                                        value="<?php echo $rows['display'] ?>">
                                    <p>Độ phân giải</p> <input type="text" class="form-control" name="pro_display_card"
                                        value="<?php echo $rows['display_card'] ?>">
                                    <p>Camera</p> <input type="text" class="form-control" name="pro_camera"
                                        value="<?php echo $rows['camera'] ?>">
                                    <p>Trọng lượng</p> <input type="text" class="form-control" name="pro_weight"
                                        value="<?php echo $rows['weight'] ?>">
                                    <p>Doanh số</p> <input type="number" class="form-control" name="pro_purchase"
                                        value="<?php echo $rows['purchase'] ?>">
                                    <input type="submit" name="updateP" class="btn btn-info" value="Cập nhật">


                                    </form>
                                <?php } ?>
                            <?php } ?>

                            ?>
                        
                    </tr>
                
            </tbody>
        </table>
        <div class="btn-group">
            <button class="btn btn-secondary selectAll">Chọn tất cả</button>
            <button class="btn btn-info disSelectAll">Bỏ chọn tất cả</button>
            <button class="btn btn-dark ">Xoá các mục đã chọn</button>
        </div> 
    </div>

</div>
<?php
if (isset($_POST['updateP'])) {
    $changePro = "UPDATE product SET `cate_id`='{$_POST['pro_cate']}',`title`='{$_POST['pro_title']}',`intro`='{$_POST['pro_intro']}',`price`='{$_POST['pro_price']}',`price_sale`='{$_POST['pro_price_sale']}',`detail`='{$_POST['pro_detail']}',`image`='{$_POST['pro_image']}',`ram`='{$_POST['pro_ram']}',`cpu`='{$_POST['pro_cpu']}',`rom`='{$_POST['pro_rom']}',`display_card`='{$_POST['pro_display_card']}',`display`='{$_POST['pro_display']}',`camera`='{$_POST['pro_camera']}',`weight`='{$_POST['pro_weight']}',`purchase`='{$_POST['pro_purchase']}' where `product_id`= {$rows['product_id']}";
    pdo_excute($changePro);
    header("Location:index.php?act=product"); 
}
?>

<script>
    let selectAll = document.querySelector(".selectAll");
    let disSelectAll = document.querySelector(".disSelectAll");

    selectAll.addEventListener('click', function(){
        let checkbox = document.getElementsByName('check[]');
        for (let i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }
    });
    disSelectAll.addEventListener('click', function(){
        let checkbox = document.getElementsByName('check[]');
        for (let i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }
    });

</script>

