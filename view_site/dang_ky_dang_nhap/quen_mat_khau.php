

<body>
    <div id="" class="container-fluid " style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
 height:auto" >
        <div class="d-grid align-items-center justify-content-center" >
            <div class="row align-items-center" style="background-color: white; width:80%; margin-left:10%; margin-top: 15vh;margin-bottom: 20vh;height:auto; border-radius: 20px;">
            <img class="col-lg-6 col-md-6 col-sm-10" src="public/asset/iPhone14-Purple-1.jpeg" alt="" srcset="">
            <form class="col-lg-5 col-md-5 col-sm-10 p-5 needs-validation" action="dang_ky_dang_nhap.php" class="was-validated" method="POST">
                <h1>Quên mật khẩu</h1>
                <div class="form-group">
                    <h5>Nhập Tài khoản</h5>
                    <input type="text" name="username" id="validationCustom01" class="form-control my-2" placeholder="Vui lòng nhập tài khoản" >
                    <label style="color: red;" for=""><?php if(isset($listError['username'])){
                                        echo $listError['username'];
                                    } ?></label>

                </div>
                <button type="submit" class="btn btn-danger my-3" name="action2" value="submit_forgot">Gửi lại mật khẩu</button>
                
                <p>Bạn chưa có tài khoản ? <button type="submit" class="btn btn-primary" name="action" value="dang_ky">Đăng ký ngay</button></p>
            </form>
           
            </div>
        </div>
    </div>

</body>


</html>