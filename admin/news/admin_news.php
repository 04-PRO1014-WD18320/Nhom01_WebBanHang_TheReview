<div class="container">
    <div class="row overflow-scroll">
    <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    Tiêu đề
                    <input type="text" name="news_title" id="" class="form-control" required>
                     Ngày đăng
                    <input type="date" name="news_date" id="" class="form-control" required>
                    Ảnh
                    <input type="file" name="news_image" id="" class="form-control">
                    Nội Dung
                    <textarea name="editor" id="editor" col="30" row="10" >

                    </textarea>
                </div>
                <br>
                <input type="submit" name="addNews" class="btn btn-danger" value="Thêm">

            </form>
            <?php 
                if(isset($_POST['addNews'])){
                    $news_date = $_POST['news_date'];
                    $news_title = $_POST['news_title'];
                    $news_content = $_POST['editor'];
                    $news_img = $_FILES['news_image']['name'];
                    $new_img_tmp = $_FILES['news_image']['tmp_name'];
                    move_uploaded_file($new_img_tmp, "../asset/" .  $new_img_tmp);
                    $news_q = "insert into news value(null, 300, 1, '$news_date', '$news_title', '$news_content', '$news_img');";
                    pdo_excute($news_q);
                }
            ?>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="row"></th>
                    <th scope="row">Người đăng</th>
                    <th scope="row">News ID</th>
                    <th scope="row">Tiêu đề</th>
                    <th scope="row">Ngày đăng</th>
                    <th scope="row">Nội dung</th>
                    <th scope="row">Hình ảnh</th>
                    <th scope="row"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $a_query_news = "SELECT name, news_id, news_title, news_date,news_content, news_image FROM `news` a inner join `user` b on a.user_id = b.user_id;";
                foreach (pdo_query($a_query_news) as $rows) { ?>
                    <tr>
                        <td>
                            <input type="checkbox" value="<?=$rows['news_id']?>" name="check[]"/>
                        </td>
                        <td>
                            <?php echo $rows['name'] ?>
                        </td>
                        <td>
                            <?php echo $rows['news_id'] ?>
                        </td>
                        <td>
                            <?php echo $rows['news_title'] ?>
                        </td>
                        <td>
                            <?php echo $rows['news_date'] ?>
                        </td>
                        <td class="text-truncate" style="max-width: 30px; height:10px; overflow:scroll">
                            <?php echo $rows['news_content'] ?>
                        </td>
                        <td><img style="width: 30px;" src="../asset/<?php echo $rows['news_image'] ?>"></td>
                        <td>
                        <div class="btn btn-group">
                                    <a class="btn btn-primary" role="button" href="index.php?act=news&change=<?php echo $rows['news_id']?>">Sửa</a>
                                    <a class="btn btn-danger"  role="button" href="./news/delete.php?delete=<?php echo $rows['news_id']?>" onclick='return confirm("Bạn có chắc muốn xoá")'>Xoá</a>
                                </div>
                        </td>

                    </tr>
                <?php }

                ?>
                 <?php 
            if(isset($_GET['changeN'])){ ?> 
                <?php $change_q_n = "select * from news where cate_id  = ".$_GET['changeN'];
                foreach(pdo_query($change_q_n) as $rows){ ?>
                    <form action="" method="post">
                    <p>Ngày đăng</p><input type='text' name='news_date_n' class='form-control' value="<?php echo $rows['news_date']?>">
                    <p>Tiêu đề</p><input type='text' name='news_title_n' class='form-control' value="<?php echo $rows['news_title']?>">
                    <p>Nội dung</p><textarea name="editorr" id="editor" col="30" row="10" >
                    <p>Image</p><input type='text' name='news_image_n' class='form-control' value="">
                    
                    <input name="updateN" class="btn btn-info" type="submit" value="Cập nhật">
                    </form>

            <?php } ?>
               <?php 
                    if(isset($_POST['updateN'])){
                        $update_news =  "UPDATE `news` SET `news_date`='{$_POST['news_date_n']}',`news_title`='{$_POST['news_title_n']}',`news_content`='{$_POST['editorr']}',`news_image`='{$_POST['news_image_n']}' where news_id = ".$_GET['changeN'];
                        pdo_excute($update_news);
                        header("Location:index.php?act=news&user_name={$_GET['user_name']}&&id={$_COOKIE['session_id']}"); ;
                    }
                    
               ?>
                
                <?php }?>
                

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