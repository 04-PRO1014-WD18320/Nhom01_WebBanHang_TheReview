<div class="container">
    <div class="row overflow-scroll">
        <div class="col-lg">
            <form action="" method="post">
                <div class="form-group">
                    Tên loại hàng
                    <input type="text" name="catename" id="" class="form-control">
                </div>
                <br>
                <input type="submit" name="addcate" class="btn btn-danger" value="Thêm">
            </form>
            <?php 
                if(isset($_POST['addcate'])){
                    $catename = $_POST['catename'];
                    $cate_q = "insert into category value(null, '$catename');";
                    pdo_excute($cate_q);
                }
            ?>
        </div>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr><th scope="row"></th>
                    <th scope="row">Category ID</th>
                    <th scope="row">Tên loại hàng</th>
                    <th scope="row"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $a_query_user = "select * from category";
                foreach (pdo_query($a_query_user) as $rows) { ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="check[]" value="<?=$rows['cate_id']?>"/>
                        </td>
                        <td>
                            <?= $rows['cate_id'] ?>
                        </td>
                        <td>
                            <?= $rows['cate_name'] ?>
                        </td>
                        <td>
                            <div class="btn btn-group">
                            <a class="btn btn-primary" role="button" href="index.php?act=cate&change=<?php echo $rows['cate_id']?>">Sửa</a>
                            <a class="btn btn-danger"  role="button" href="./category/delete.php?delete=<?php echo $rows['cate_id']?>" onclick='return confirm("Bạn có chắc muốn xoá")'>Xoá</a>

                            </div>
                        </td>
                    </tr>
                <?php }
                ?>


            </tbody>
            <?php 
            if(isset($_GET['changeC'])){ ?> 
                <?php $change_q = "select * from category where cate_id  = ".$_GET['changeC'];
                foreach(pdo_query($change_q) as $rows){ ?>
                    <form action="" method="post">
                    <p>Tên loại</p><input type='text' name='catename' class='form-control' value="<?php echo $rows['cate_name']?>">
                    <input name="updateC" class="btn btn-info" type="submit" value="Cập nhật">
                    </form>

            <?php } ?>
               <?php 
                    if(isset($_POST['updateC'])){
                        $update_cate =  "update category set `cate_name` = '{$_POST['catename']}' where cate_id = ".$_GET['changeC'];
                        pdo_excute($update_cate);
                        header("Location:admin.php?user_name={$_GET['user_name']}&&id={$_COOKIE['session_id']}"); ;
                    }
               ?>
                
                <?php }?>
            
        </table>
        <div class="btn-group">
            <button class="btn btn-secondary selectAll">Chọn/Bỏ chọn tất cả</button>
            <button class="btn btn-info disSelectAll">Bỏ chọn tất cả</button>
            <button class="btn btn-dark ">Xoá các mục đã chọn</button>
        </div>   
    </div>


</div>
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