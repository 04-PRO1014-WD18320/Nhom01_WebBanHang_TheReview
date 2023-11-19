<?php
session_start();
if (isset($_GET['user_name']) && $_GET['user_name'] != "") {

    $url_index   = "index.php";
    $url_macbook = $url_index . "?act=allProduct&cateId=macbook";
    $url_iphone  = $url_index . "?act=allProduct&cateId=iphone";
    $url_watch   = $url_index . "?act=allProduct&cateId=watch";
}

?>
<nav id="nav" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white fs-4" href="index.php"><img id="logo" style="width: 4rem; height:4rem;" src="../asset/logo.png" alt=""></a>
        <button class="navbar-toggler navbar-dark-i" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white fs-6" aria-current="page" href="<?= $url_index ?>">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Macbook
                    </a>
                    <ul class="dropdown-menu">
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Iphone
                    </a>
                    <ul class="dropdown-menu">

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Apple Watch
                    </a>
                    <ul class="dropdown-menu">

                    </ul>
                </li>
                <li class="nav-item">

                    <a href="<?= $url_other ?>" class="nav-link text-white fs-6">Phụ kiện</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $url_news ?>" class="nav-link text-white fs-6">Tin tức</a>
                </li>
            </ul>
            <form class="d-flex " role="search">
                <input class="form-control me-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search">
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="login.php" class="link-underline-opacity-0 link-underline">
                <div type="button" class="btn btn-light d-flex flex-column nav-btn mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    <p>Tài khoản</p>
                </div>
            </a>

            <a href="#"
            class="link-underline-opacity-0 link-underline">
                <div class="btn btn-light nav-btn d-flex flex-column">
                    <span class="material-symbols-outlined ">
                        add_shopping_cart
                    </span>
                    <p>Giỏ hàng</p>
                    <span class="span-bad position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </div>
            </a>
        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>