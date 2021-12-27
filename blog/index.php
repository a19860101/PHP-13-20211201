<?php
    include('Controller/Post.php');
    $posts = Controller\Post\Post::all();
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($posts as $post){ ?>
        <div class="col-lg-8">
            <div class="border rounded-3 p-3 mb-3">
                <h2><?php echo $post['title'];?></h2>
                <div class="mb-3">
                    <?php echo $post['content']; ?>
                </div>
                <a href="#" class="btn btn-primary btn-sm">繼續閱讀</a>
                <span class="float-end mt-3">最後更新時間：<?php echo $post['updated_at'];?></span>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>