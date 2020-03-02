<?php include "functions.php";?>
<?php updateUser(); ?>


<?php include "includes/header.php"; ?>

<div class="container mt-5">
    <div class="col-6 mx-auto">
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="id">ID</label>
                <select name="id" class="custom-select">
                    <?php
                                renderIdOptions();
                            ?>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" value="Update" class="btn btn-warning btn-block">
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>