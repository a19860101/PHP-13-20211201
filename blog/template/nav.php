<?php
    if(!session_id()){
        session_start();
    }
    $webroot = 'http://localhost/PHP-13-20211201/blog/';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot; ?>index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>Post/create.php" class="nav-link">新增文章</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['AUTH']) && $_SESSION['AUTH']['role'] == 0){ ?>
                    <li class="nav-item">
                        <a href="<?php echo $webroot; ?>Category/index.php" class="nav-link">分類管理</a>
                    </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if(!isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>Auth/create.php">申請會員</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>Auth/login.php">登入</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['AUTH'])){ ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo $_SESSION['AUTH']['user']?>你好</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $webroot; ?>Auth/logout.php">登出</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>