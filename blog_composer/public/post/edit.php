<?php
    require_once('../../vendor/autoload.php');    
    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\Category;

    $post = Post::edit($_REQUEST);

    $datas = Category::all();
?>
<?php include('../template/header.php');?>
<?php include('../template/nav.php');?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>編輯文章</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="title">文章標題</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章分類</label>
                    <select name="category_id" id="" class="form-select">
                        <option>--請選擇--</option>
                        <?php foreach($datas as $data){ ?>
                        <option 
                            value="<?php echo $data['id'];?>"
                            <?php echo $post['category_id'] ==  $data['id']? 'selected':'';?>>
                            <?php echo $data['title'];?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">文章內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $post['content'];?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                <input type="submit" class="btn btn-primary" value="修改文章">
                <input type="button" class="btn btn-danger" value="返回" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include('../template/tinymce.php');?>

<?php include('../template/footer.php');?>