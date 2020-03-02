<?php include "functions.php"; ?>
<?php createUser(); ?>

<?php include "includes/header.php"; ?>

<div class="container mt-5">
    <div class="col-6 mx-auto">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <input type="submit" name="submit" value="Create" class="btn btn-success btn-block">
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>