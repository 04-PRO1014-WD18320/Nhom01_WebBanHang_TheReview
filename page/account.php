<div id="sec-2" class="container-fluid mt-5">
        <h1 class="mb-5">.</h1>
        <div id="sec-2-content" class="container-fluid mt-1">
            
                <h4>Xin Chào Admin </h4>
            
                   
                        <a class="btn btn-danger" role="button" href="../admin/admin.php?">Trang quản trị</a>
                   
               
                
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                    <img name="user_img" src="../asset/user.png" alt="" class="col-lg-5 col-md-5 col-sm-10" >
                    <div class="col-lg-5 col-md-5 col-sm-10 p-5">
                        
                        <h5>Ảnh đại diện : </h5><input type="file" name="img" value="">
                        <h5>Họ tên : </h5><input class="form-control" name="name" type="text" value="">
                        
                        <h5>Số điện thoại : </h5><input class="form-control" name="phone" type="text" value="">
                        <h5>Email : <h5><input class="form-control" name="email" type="text" value="">
                        <h5>Mật khẩu : <h5><input class="form-control" name="password" type="password" value="" required>
                        <h5>Nhập lại mật khẩu : <h5><input class="form-control" name="re-password" type="password" value="" required>
                        <br>
                        <input type="submit" name="change" class="btn btn-info mt-3" value="Lưu thay đổi">
                        
         

                </div>
                </div>
                
                
            <a href="index.php?logout=1" class="form-control btn btn-danger" role="button">Đăng xuất</a>
            
            </form>
        </div>
    </div>
