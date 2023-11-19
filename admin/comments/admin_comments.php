<div class="container">
                        <div class="row overflow-scroll">
                            
                            <table class="table table-striped table-bordered mt-3">
                                    <thead>
                                    <tr>
                                        <th scope="row"></th> 
                                        <th scope="row">Comment ID</th>
                                        <th scope="row">Product ID</th>
                                        <th scope="row">Subcomments</th>
                                        <th scope="row">Người đăng</th>
                                        <th scope="row">Nội dung</th>
                                        <th scope="row"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php 
                                            $a_query_user = "select * from comment";
                                            foreach(pdo_query($a_query_user) as $rows){?>
                                                <tr>
                                                    <td><input type="checkbox" value="<?= $rows['comment_id']?>" name="check[]"/></td>
                                                    <td><?= $rows['comment_id']?></td>
                                                    <td><?= $rows['product_id']?></td>
                                                    <td><?= $rows['sub_comments']?></td>
                                                    <td><?= $rows['user_post']?></td>
                                                    <td><?= $rows['content']?></td>                                                
                                                    <td><a class="btn btn-danger"  role="button" href="./comments/delete.php?delete=<?= $rows['comment_id']?>" onclick='return confirm("Bạn có chắc muốn xoá")'>Xoá</a></td>
                                                    
                                                </tr>
                                            <?php } 
                                        ?>
                                    
                                    
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