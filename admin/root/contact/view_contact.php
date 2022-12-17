<?php
require_once('./db/connect.php');
$sql = "select * from lien_he";
$result = mysqli_query($connect, $sql);
?>
<!-- <a href="../../../admin/root/orders/create_order.php" style="float: right; background-color: #000 !important;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a> -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>email</th>
                <th>phone</th>
                <th>content</th>
                <th>fix</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>
                    <td>
                        <p><?php echo $value['id'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['name'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['address'] ?></p>
                    </td>
                    <td><?php echo $value['email'] ?></td>
                    <td>
                        <p><?php echo $value['phone'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['content'] ?>đ</p>
                    </td>
                    <!-- <td>
                        <a href="../../../admin/root/orders/read_orders.php?id=<?php echo $value['id'] ?>"><span class="fa fa-eye"></span></a>
                    </td> -->
                    <!-- <td>
                        <a href="../../../admin/root/orders/update_order.php?id=<?php echo $value['id'] ?>"><span class="fa fa-pencil" style="color: #000 !important;"></a>
                    </td>-->
                    <td>
                        <a href="../../../admin/root/contact/delete_contact.php?id=<?php echo $value['id'] ?>"><span class="fa fa-trash" style="color: #000 !important;"></span></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>