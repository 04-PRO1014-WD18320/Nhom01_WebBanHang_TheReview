<div style="width:100%;">
<form style= "margin-left:100%" class="row g-3 d-block mx-auto" action="loai_hang.php" method="POST">
    <div class="col-md-6">
        <input type="hidden" name="action" value="<?php echo $action; ?>">
        <br>
        <label class="form-label">Mã loại</label>
        <input type="text" class="form-control" name="ma_loai" value="<?php echo $loai_hang_by_id['ma_loai'] ?>">
        <br>
        <label class="form-label">Tên loại</label>
        <input type="text" class="form-control" name="ten_loai" value="<?php echo $loai_hang_by_id['ten_loai'] ?>">
        <button type="submit" class="btn btn-primary" style="padding: 5px 10px;  ">Lưu</button>
    </div>
</form>
</div>
