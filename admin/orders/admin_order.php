<div class="container">
                        <div class="row overflow-scroll">
                            
                            <table class="table table-striped table-bordered mt-3">
                                    <thead>
                                    <tr>
                                        <th scope="row">Order ID</th>
                                        <th scope="row">Tên khách hàng</th>
                                        <th scope="row">Email</th>
                                        <th scope="row">Số điện thọai</th>
                                        <th scope="row">Tên sản phẩm</th>
                                        <th scope="row">Ngày đặt hàng</th>
                                        <th scope="row">Giá</th>
                                        <th scope="row">Phí ship</th>
                                        <th scope="row">Số lượng</th>
                                        <th scope="row">Tình trạng thanh toán</th>
                                        <th scope="row">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php 
                                            $a_query_user = "select order_id,name, email, phone, title, order_date, price_sale, ship_price, amount , paid,(price_sale+ship_price)*amount as 'sum' from `orders` a inner join `product` b on a.product_id = b.product_id inner join `user` c on a.user_id = c.user_id;";
                                            foreach(pdo_query($a_query_user) as $rows){?>
                                                <tr>
                                                    <td><?php echo $rows['order_id']?></td>
                                                    <td><?php echo $rows['name']?></td>
                                                    <td><?php echo $rows['email']?></td>
                                                    <td><?php echo $rows['phone']?></td>
                                                    <td><?php echo $rows['title']?></td>
                                                    <td><?php echo $rows['order_date']?></td>
                                                    <td><?php echo $rows['price_sale']?></td>
                                                    <td><?php echo $rows['ship_price']?></td>
                                                    <td><?php echo $rows['amount']?></td>
                                                    <td><?php echo (($rows['paid']) ? "Đã thanh toán" : "Chưa thanh toán")?></td>
                                                    <td><?php echo $rows['sum']?></td>
                                                </tr>
                                            <?php } 
                                        ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        
                    </div>