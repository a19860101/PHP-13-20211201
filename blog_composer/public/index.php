<?php
    require_once('../vendor/autoload.php');
    $posts = Gjun\Blog\Controller\Post::all();
?>
<?php include('template/header.php');?>
<?php include('template/nav.php');?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($posts as $post){ ?>
        <div class="col-lg-8">
            <div class="border rounded-3 p-3 mb-3">
                <h2><?php echo $post['title'];?></h2>
                <div class="mb-3">分類:<?php echo $post['c_title'];?></div>
                <div class="mb-3">作者:<?php echo $post['user'];?></div>
                <div class="mb-3">
                    <?php 
                        echo mb_substr(strip_tags($post['content']),0,100); 
                    ?>...
                </div>
                <a href="Post/show.php?id=<?php echo $post['id'];?>" class="btn btn-primary btn-sm">繼續閱讀</a>
                <span class="float-end mt-3">最後更新時間：<?php echo $post['updated_at'];?></span>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php');?>