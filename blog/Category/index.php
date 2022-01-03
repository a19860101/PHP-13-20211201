<?php
    include('../Controller/Category.php');

    $categories = Controller\Category::all();
?>
<?php include('../template/header.php');?>
<?php include('../template/nav.php');?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">分類英文標題</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <input type="submit" value="新增分類" class="btn btn-primary">
                
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <?php foreach($categories as $category){ ?>
                <li class="list-group-item"><?php echo $category['title'];?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include('../template/footer.php');?>