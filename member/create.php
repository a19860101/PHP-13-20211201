<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h3>申請會員</h3>
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" name="user" class="form-control">
                </div>
                <input type="submit" value="申請會員" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include('template/footer.php'); ?>