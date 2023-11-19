<?php include_once "../model/pdo.php";
      include_once "admin_nav.php"?>

<body>
    <div class="container-fluid" id="form">
        <div class="d-flex justify-content-between">
        <h1 class="p-2">Trang quản trị</h1>
        <a  href="../page/index.php?<?php echo "user_name={$_GET['user_name']}&&id={$_COOKIE['session_id']}" ?>" class="p-4" ><button class="btn btn-danger">Về Trang Chủ</button></a>
        </div>
        <h4 class="mx-2">Xin chào admin</h4>
        <div class="d-flex flex-row align-items-start " style="height: auto;">
        
            <div class="nav-side overflow-y-auto">
                <ul class="btn-group d-flex flex-column " role="group"> 
                    <li class="my-2"><a href="<?=$url_index?>?act=common" class="nav-side-btn btn btn-primary" role="button">Thống kê</a></li>
                    <li class="my-2"><a href="<?=$url_index?>?act=user" class="nav-side-btn btn btn-primary" role="button">Người dùng</a></li>
                    <li class="my-2"><a href="<?=$url_index?>?act=cate" class="nav-side-btn btn btn-primary" role="button">Loại hàng</a></li>
                    <li class="my-2"><a href="<?=$url_index?>?act=product" class="nav-side-btn btn btn-primary" role="button">Sản phẩm</a></li>
                    <li class="my-2"><a href="<?=$url_index?>?act=comments" class="nav-side-btn btn btn-primary" role="button">Bình luận</a></li>
                    <li class="my-2"><a href="<?=$url_index?>?act=news" class="nav-side-btn btn btn-primary" role="button">Tin tức</a></li>
                    <li class="my-2"><a href="<?=$url_index?>?act=order" class="nav-side-btn btn btn-primary" role="button">Đơn hàng</a></li>
                </ul>
            </div>
            <div class="content p-5">
                <?php
                if(isset($_GET['act']) && $_GET['act'] !== ""){
                    switch ($_GET['act']) {
                        case 'user':
                            include_once('./users/admin_user.php');
                            break;
                        case 'cate':
                            include_once('./category/admin_cate.php');
                            break;
                        case 'product':
                            include_once('./products/admin_product.php');
                            break;
                        case 'comments':
                            include_once('./comments/admin_comments.php');
                            break;
                        case 'news':
                            include_once('./news/admin_news.php');
                            break;
                        case 'order':
                            include_once('./orders/admin_order.php');
                            break;
                        
                        default:
                            include_once('./common/admin_common.php');
                            break;
                    }
                }else{
                    include_once('./common/admin_common.php');
                }
                    
                ?>
            </div>
        </div>  
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script>
        CKEDITOR.replace('editor');
</script>

</html>