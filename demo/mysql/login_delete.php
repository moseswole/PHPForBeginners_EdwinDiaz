<?php include "functions.php";?>
<?php deleteUser(); ?>

<?php include "includes/header.php"; ?>

<div class="container mt-5">
    <div class="col-6 mx-auto">
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="id">ID</label>
                <select name="id" class="custom-select">
                    <?php
                                renderIdOptions();
                            ?>
                </select>
            </div>
            <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-block">
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>