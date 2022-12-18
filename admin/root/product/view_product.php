<?php
require_once('./db/connect.php');
$sql = "select * from san_pham";
$result = mysqli_query($connect, $sql);
?>
<a href="./product/create.php" style="float: right; background-color: #191C24;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th>Xem</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>
                    <td>
                        <p><?php echo $value['id'] ?></p>
                    </td>
                    <td>
                        <p style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['ten_san'] ?></p>
                    </td>
                    <td>
                        <p style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['mo_ta'] ?></p>
                    </td>
                    <td><img src="<?php echo $value['anh'] ?>" alt="" style="width: 100px;"></td>
                    <td>
                        <p style="color: #820813;"><?php echo $value['gia'] ?>đ</p>
                    </td>
                    <td>
                        <p><?php echo $value['danh_muc'] ?></p>
                    </td>
                    <td>
                        <a href="./product/view.php?id=<?php echo $value['id'] ?>"><span class="fa fa-eye" style="color: #191C24;"></span></a>
                    </td>
                    <td>
                        <a href="./product/edit.php?id=<?php echo $value['id'] ?>"><span class="fa fa-pencil" style="color: #191C24;"></a>
                    </td>
                    <td>
                        <!-- <a href="./product/delete.php?id=<?php echo $value['id'] ?>"><span class="fa fa-trash" style="color: #191C24;"></span></a> -->
                        <form action="./product/code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>