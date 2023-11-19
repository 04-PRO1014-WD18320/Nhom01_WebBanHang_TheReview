<?php include_once "header.php" ?>

<body>
    <div id="" class="container-fluid " style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
 height:auto" >
        <div class="d-grid align-items-center justify-content-center" >
            <div class="row align-items-center" style="background-color: white; width:80%; margin-left:10%; margin-top: 15vh;margin-bottom: 20vh;height:auto; border-radius: 20px;">
            <img class="col-lg-6 col-md-6 col-sm-10" src="../asset/iPhone14-Purple-1.jpeg" alt="" srcset="">
            <form class="col-lg-5 col-md-5 col-sm-10 p-5 needs-validation" action="" method="post">
                <h1>Đăng nhập</h1>
                <div class="form-group">
                    <h5>Tài khoản</h5>
                    <input type="text" name="username" id="validationCustom01" class="form-control my-2" placeholder="Vui lòng nhập tài khoản" required>
                    
                    <h5>Mật khẩu</h5>
                    
                    <input type="password" name="password" id="" class="form-control my-2" placeholder="Vui lòng nhập mật khẩu" required>
                    <a href="./index.php" class="my-2">Quên mật khẩu ?</a>
                </div>
                <?php 
            if(isset($_POST['login'])){
                $user_name = $_POST['username'];
                $pw = sha1($_POST['password']);
                
                $res = pdo_query("select user_id from user where username ='$user_name' and password = '$pw'");
                if(isset($res[0]['user_id']) && $res[0]['user_id'] > 1){
                    session_start();
                    $_SESSION['user_name'] = $user_name;
                    $session_id = session_id(); 
                    setcookie('session_id', $session_id, time() + 3600, '/');
                    header('Location:index.php?id='.$session_id.'&user_name='.$_SESSION['user_name']);
                    
                }else if(isset($res[0]['user_id']) && $res[0]['user_id'] == 1){
                    header('Location:../admin/index.php');
                }else{
                  
                    print_r("<p class='text-danger'>Sai tài khoản hoặc mật khẩu</p>");
                }
            }
            ?>
       
                <input type="submit" name="login" class="btn btn-danger mb-3" value="Đăng nhập"/>
                
                <p>Bạn chưa có tài khoản ? <a href="register.php">Đăng ký ngay</a></p>
            </form>
           
            </div>
        </div>
    </div>

    <!-- <script src="../action/bootstrap.bundle.min.js"></script> -->
</body>


</html>