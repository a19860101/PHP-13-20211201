<?php
    include('../Controller/Post.php');
    $post = Controller\Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2><?php echo $post['title']?></h2>
            <div>
                <?php echo $post['content'];?>
            </div>
            <a href="../index.php" class="btn btn-primary">文章列表</a>
            <form action="delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
            </form>
            <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-success">編輯文章</a>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>

