<?php
require_once('./db/connect.php');
$sql = "select * from order_product";
$result = mysqli_query($connect, $sql);
?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>order_id</th>
                <th>product_id </th>
                <th>quantity</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>>
                    <td>
                        <p><?php echo $value['order_id'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['product_id'] ?></p>
                    </td>
                    <td><?php echo $value['quantity'] ?></td>
                    <td>
                        <a href="./orderDetail/delete_order_detail.php?id=<?php echo $value['order_id'] ?>"><span class="fa fa-trash" style="color: #000 !important;"></span></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>