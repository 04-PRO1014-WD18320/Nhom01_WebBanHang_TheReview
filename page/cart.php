<div id="sec-2" class="container-fluid mt-5">
        <h1 class="mb-5">.</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ol>
        </nav>
        
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">

                <a  href="" class="card-title link-underline-opacity-0 link-underline">
                    <div class="card d-flex flex-row mt-3">
                        <div class="card-header">
                            <img style="width:10rem;" src="../asset/applewatchultra.png">
                        </div>
                        <div class="card-body">
                            <h4><?php echo $rows['title']?></h4>
                            <p class="text-danger fw-bold">1000 $</p>
                            <p class="fw-bold">Số lượng : 100</p>
                        </div>
                    </div>                
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                
                    <div class="card">
                        <div class="card-header">
                            <h5>Thông tin giao hàng</h5>
                        </div>
                        <div class="card-body">

                                <div class="card d-flex flex-row mt-3">
                                    <div class="card-body">
                                        <h5>Tên khách hàng : Hoang</h5>
                                        <p>Email :gmail </p>
                                        <p>Số điện thoại : 113</p>
                                        <h5 class="fw-bold text-danger">Thành tiền : 1000$</h5>
                                    </div>
                                    
                                </div>
                            <a href="index.php" class="btn btn-danger mt-3" onclick="alert('Đặt hàng thành công!')" role="button">Đặt hàng</a>
                        </div>
                    </div>
                    
             
            </div>

        </div>
    </div>
