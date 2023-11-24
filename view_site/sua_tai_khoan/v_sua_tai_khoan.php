<?php
session_start();
?>
<div class="container my-5 ">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Email: </label>
                    <input type="hidden" name="ma_khach_hang">

                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                        value="<?php echo $_SESSION['email']; ?>" name="email">
                        <label style="color: red;" for=""><?php if(isset($error['email'])){
                                        echo $error['email'];
                                    } ?></label>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Họ tên :</label>
                    <input type="text" class="form-control" id="ho_ten" placeholder="Enter name"
                        value="<?php echo $_SESSION['ho_ten']; ?>" name="ho_ten">
                        <label style="color: red;" for=""><?php if(isset($error['ho_ten'])){
                                        echo $error['ho_ten'];
                                    } ?></label>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Hình ảnh :</label>
                    <input type="file" class="form-control" id="hinh" placeholder="Enter image" name="hinh">
                    <label style="color: red;" for=""><?php if(isset($error['hinh'])){
                                        echo $error['hinh'];
                                    } ?></label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" id="mat_khau" placeholder="Enter password"
                        name="mat_khau" >
                        <label style="color: red;" for=""><?php if(isset($error['mat_khau'])){
                                        echo $error['mat_khau'];
                                    } ?></label>

                </div>
                <button type="submit" class="btn btn-primary" name="action" value="update">Lưu</button>

            </form>
        </div>
        <div class="col-md-4 "></div>
    </div>

</div>