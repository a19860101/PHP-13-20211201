<?php include('../template/header.php');?>
<?php include('../template/nav.php');?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h3>會員登入</h3>
            <form action="auth.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" name="pw" class="form-control">
                </div>
                <input type="submit" value="登入" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php');?>