<?php
    require_once('../../vendor/autoload.php');    
    use Gjun\Blog\Controller\Post;   
    $post = Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2><?php echo $post['title']?></h2>
            <div class="mb-3">分類:<?php echo $post['c_title'];?></div>
            <div class="mb-3">作者:<?php echo $post['user'];?></div>

            <hr>
            <div>
                <?php echo $post['content'];?>
            </div>
            <a href="../index.php" class="btn btn-primary">文章列表</a>
            <?php if(isset($_SESSION['AUTH'])){ ?>
            <?php if($_SESSION['AUTH']['id'] == $post['user_id']){ ?>
            <form action="delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
            </form>
            <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-success">編輯文章</a>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>

