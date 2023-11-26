<body>
    <div id="" class="container-fluid " style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
 height:auto">
        <div class="d-grid align-items-center justify-content-center">
            <div class="row align-items-center" style="background-color: white; width:80%; margin-left:10%; margin-top: 15vh;margin-bottom: 20vh;height:auto; border-radius: 20px;">
                <img class="col-lg-6 col-md-6 col-sm-10" src="public/asset/iPhone14-Purple-1.jpeg" alt="" srcset="">
                <form class="col-lg-5 col-md-5 col-sm-10 p-5 needs-validation" action="dang_ky_dang_nhap.php" class="was-validated" method="POST">
                    <h1>Đổi mật khẩu</h1>
                    <div class="form-group">
                        <input type="hidden" value="<?=$email ?>" name="email">
                        <label style="color: red;" for=""><?php if(isset($listError['email'])){
                                        echo $listError['email'];
                                    } ?></label>

                        <h5>Mật khẩu</h5>
                        <input type="password" id="mat_khau" name="mat_khau" class="form-control my-2" placeholder="Vui lòng nhập mật khẩu" minlength="4" maxlength="20" >
                        <label style="color: red;" for=""><?php if(isset($listError['mat_khau'])){
                                        echo $listError['mat_khau'];
                                    } ?></label>

                        <h5>Nhập lại mật khẩu</h5>
                        <input type="password" name="re-password" id="" class="form-control my-2" placeholder="Vui lòng nhập lại mật khẩu" minlength="4" maxlength="20" >
                        <label style="color: red;" for=""><?php if(isset($listError['re-password'])){
                                        echo $listError['re-password'];
                                    } ?></label>

                    </div>
                    <button type="submit" class="btn btn-danger my-3" name="action2" value="change_pass">Đổi mật khẩu</button>

                    <p>Bạn chưa có tài khoản ? <button type="submit" class="btn btn-primary" name="action" value="dang_ky">Đăng ký ngay</button></p>
                </form>

            </div>
        </div>
    </div>

</body>


</html>