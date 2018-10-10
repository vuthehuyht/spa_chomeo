   
<div class="modal-dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="location_delete_confirm_title">Xóa sản phẩm</h4>
        </div>
        <div class="modal-body">    
            Bạn có muốn xóa sản phẩm ?>?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
            <a href="index.php?page=delete_product&&id_product=<?php echo $_GET['id_product'] ?>" type="button" class="btn btn-danger">Đồng ý</a>  
        </div>
</div>