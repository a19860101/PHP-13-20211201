<?php include('../template/header.php');?>
<?php include('../template/nav.php');?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>新增文章</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="title">文章標題</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">文章內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="新增文章">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content'
    });
</script>
<?php include('../template/footer.php');?>
