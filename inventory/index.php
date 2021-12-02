<!doctype html>
<html lang="en">
<style>
    .button a{
    display: inline-block;
    background: crimson;
    color: black;
    font-size: 18px;
    padding: 12px 36px;
    margin-top: 20 px;
    border-radius: 6px;
    border: 2px solid crimson;
    transition: all 0.5s ease;   
}
</style>

<?php session_start(); ?>
<?php include('controller/middleware.php'); ?>

<head>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('navbar.php') ?>

    <main role="main " class="container">
        
        <?php include('welcome_message.php') ?>
        
        <?php 
            include('database/inventory.php');

            $data = new Inventory();
        ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="mb-4">Halo, <?= $_SESSION['name']  ?></h5>

                    <h5 class="mb-4">List of Product</h5>

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col ">Product Name</th>
                                <th scope="col ">Stock</th>
                                <th scope="col ">Expired At</th>
                                <th scope="col ">Created At</th>
                                <th scope="col ">Updated At</th>
                                <th scope="col ">User ID</th>
                                <th scope="col ">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $id=$_SESSION['id'];
                            foreach($data->getAll($id) as $item) { ?>
                            <tr>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['stock'] ?></td>
                                <td><?= $item['expired_at'] ?></td>
                                <td><?= $item['created_at'] ?></td>
                                <td><?= $item['updated_at'] ?></td>
                                <td><?= $item['user_id'] ?></td>
                                <td>
                                <div class="btn-group " role="group " aria-label="Basic example ">
                                <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-info text-white ">
                                    <i class="bx bx-pencil"></i>
                                </a>
                                <form onsubmit="return confirm('Do you really want to delete item?')" 
                                                    action="controller/inventory.php?id=<?= $item['id'] ?>&action=delete" 
                                                    method="POST">
                                    <button type="submit" class="btn btn-danger text-white">
                                    <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    <div class="button">
                        <a href="create.php">Insert Product</a>
                    </div>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include('footer.php') ?>

    <?php include('scripts.php') ?>
</body>

