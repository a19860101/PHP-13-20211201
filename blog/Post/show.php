<?php
    include('../Controller/Post.php');
    $post = Controller\Post\Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<?php include('../template/nav.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2><?php echo $post['title']?></h2>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>

