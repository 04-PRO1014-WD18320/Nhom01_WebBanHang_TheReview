
    <div id="sec-2" class="container-fluid mt-5">
        <h1 class="mb-5">.</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo $url_index?>">Trang chủ</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
          </nav>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">
                
            <?php 
                    $a_query_news= "SELECT name, news_id, news_title, news_date,news_content, news_image FROM `news` a inner join `user` b on a.user_id = b.user_id where news_id = ".$_GET['news_id'];
                foreach(pdo_query($a_query_news) as $rows){?> 
                <div class="jumbotron m-5">
                    <h3 class="mt-5 mb-4">Mô tả sản phẩm</h3>
                    <h4><?php echo $rows['news_title']?></h4>
                    <h5>Người đăng: <?php echo $rows['name']?></h5>
                    <img style="width: 70%;" src="../asset/<?php echo $rows['news_image']?>" alt="">
                    <?php print("{$rows['news_content']}") ?>
                    
                </div>
                <?php }?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                
                
                    <div class="card">
                        <div class="card-header">
                            <h5>Tin nhanh</h5>
                        </div>
                        <div class="card-body">
                        <?php 
                    $b_query_news = "SELECT name, news_id, news_title, news_date,news_content, news_image FROM `news` a inner join `user` b on a.user_id = b.user_id limit 2;";
                foreach(pdo_query($b_query_news) as $rows){?> 
                            <a href="index.php?act=news_details&news_id=<?php echo $rows['news_id']?>" class="card-title link-underline-opacity-0 link-underline pt-1">
                                <div class="card d-flex flex-row mt-3">
                                    <div class="card-header">
                                        <img style="width:4rem;" src="../asset/<?php echo $rows['news_image']?>">
                                    </div>
                                    <div class="card-body">
                                        <h5><?php echo $rows['news_title']?></h5>
                                        <p><i class="fa-regular fa-alarm-clock"></i> <?php echo $rows['news_date']?></p>
                                    </div>
                                </div>
                            
                            <?php }?>
                        </div>
                    </div>
                    
                </a>
            </div>
        </div>
    </div>
