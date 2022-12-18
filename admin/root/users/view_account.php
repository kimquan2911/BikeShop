<?php
require_once('./db/connect.php');
$sql = "select * from users";
$result = mysqli_query($connect, $sql);
?>
<a href="./users/create.php" style="float: right; background-color: #191C24;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>email </th>
                <th>phone_number</th>
                <th>address</th>
                <th>password</th>
                <th>token</th>
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
                        <p><?php echo $value['name'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['email'] ?></p>
                    </td>
                    <td>
                        <?php echo $value['phone_number'] ?>
                    </td>
                    <td>
                        <p><?php echo $value['address'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['password'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['token'] ?></p>
                    </td>
                    <td>
                        <a href="./users/view.php?id=<?php echo $value['id'] ?>"><span class="fa fa-eye"></span></a>
                    </td>
                    <td>
                        <a href="./users/edit.php?id=<?php echo $value['id'] ?>"><span class="fa fa-pencil" style="color: #191C24;"></a>
                    </td>
                    <td>
                        <!-- <a href="./admin/root/users/delete_register.php?id=<?php echo $value['id'] ?>"><span class="fa fa-trash" style="color: #191C24;"></span></a> -->
                        <form action="./users/code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>