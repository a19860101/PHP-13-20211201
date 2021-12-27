<?php
    include('Controller/Post.php');
    $posts = Controller\Post\Post::all();
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<div class="container">
    <div class="row">
        <?php foreach($posts as $post){ ?>
        <div class="col-lg-8">
            <h2><?php echo $post['title'];?></h2>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>