<div class="container">
    <div class="row overflow-scroll">
        <div class="col-lg">
            <form action="" method="POST">
                <div class="form-group">
                    Tài khoản
                    <input type="text" name="username2" id="" class="form-control" required>
                    Mật khẩu
                    <input type="text" name="password2" id="" class="form-control" required>
                    Họ Tên
                    <input type="text" name="name2" id="" class="form-control" required>
                    Email
                    <input type="text" name="email2" id="" class="form-control" required>
                    Phone
                    <input type="number" name="phone2" id="" class="form-control" required>

                </div>
                <br>
                <input type="submit" name="adddd" class="btn btn-danger" value="Thêm">

            </form>
            <?php
                if(isset($_POST['adddd'])){
                    $a_username = $_POST['username2'];
                    $a_password = $_POST['password2'];
                    $a_name = $_POST['name2'];
                    $a_email = $_POST['email2'];
                    $phone = $_POST['phone2'];

                    $admin_add = "INSERT INTO user VALUE(null,'$a_username','$a_password','$a_name','$a_email','$phone','cat.jpeg',0);";
                   
                    pdo_excute($admin_add);
            
                }
            ?>
        </div>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="row"></th>
                    <th scope="row">ID</th>
                    <th scope="row">Tài khoản</th>
                    <th scope="row">Mật khẩu</th>
                    <th scope="row">Họ Tên</th>
                    <th scope="row">Email</th>
                    <th scope="row">Phone</th>
                    <th scope="row"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $a_query_user = "select * from user";
                foreach (pdo_query($a_query_user) as $rows) { ?>
                    <tr>
                        <td>
                            <?php 
                    
                                if($rows['user_id'] != 1){
                                    echo "<input type='checkbox' name='check[]' value='{$rows['user_id']}'/>";
                                }
                            ?>
                            
                        </td>
                        <td>
                            <?php echo $rows['user_id'] ?>
                        </td>
                        <td>
                            <?php echo $rows['username'] ?>
                        </td>
                        <td>
                            <?php echo $rows['password'] ?>
                        </td>
                        <td>
                            <?php echo $rows['name'] ?>
                        </td>
                        <td>
                            <?php echo $rows['email'] ?>
                        </td>
                        <td>
                            <?php echo $rows['phone'] ?>
                        </td>
                        <td>
                            <?php
                            if ($rows['user_id'] != 1) { ?>
                                <form action="" method="post">
                                    <div class="btn btn-group">
                                        <a class="btn btn-primary" role="button" href="index.php?act=user&change=<?php echo $rows['user_id']?>">Sửa</a>
                                        <a class="btn btn-danger"  role="button" href="./users/delete.php?delete=<?php echo $rows['user_id']?>" onclick='return confirm("Bạn có chắc muốn xoá")'>Xoá</a>
                                    </div>
                                </form>

                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                if (isset($_GET['change'])) { 
                $a_query_user = "select * from user where user_id = ".$_GET['change'];
                foreach (pdo_query($a_query_user) as $rows) { ?>
                <form action="" method="post" class="my-2">
                <p>Tài khoản</p> <input type="text" class="form-control" name="username1" value="<?php echo $rows['username']?>">
                <p>Mật khẩu</p> <input type="text" class="form-control" name="password1" value="">
                <p>Họ Tên</p> <input type="text" class="form-control" name="name1" value="<?php echo $rows['name']?>">
                <p>Email</p> <input type="text" class="form-control" name="email1" value="<?php echo $rows['email']?>">
                <p>Số điện thoại</p>  <input type="number" class="form-control" name="phone1" value="<?php echo $rows['phone']?>">
                <input type="submit" name="update" class="btn btn-info" value="Cập nhật">
            </form>
                   <?php 
                   if(isset($_POST['update'])){
                    $change_query = "UPDATE `user` SET `username`='{$_POST['username1']}',`password`='{$_POST['password1']}',`name`='{$_POST['name1']}',`email`='{$_POST['email1']}',`phone`='{$_POST['phone1']}' WHERE `user_id` = {$_GET['change']}";
                    
                    if(pdo_excute($change_query)){
                        
                    }
                    echo "<script>
                            window.location.href = 'index.php?act=user'
                        </script>";
                    
                   }
                    ?>
                   
                    <?php } ?>
                <?php }else{
                    echo "";
                } ?>
                <?php 
                
                ?>


            </tbody>
        </table>
        <div class="btn-group">
            <button class="btn btn-secondary selectAll">Chọn tất cả</button>
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