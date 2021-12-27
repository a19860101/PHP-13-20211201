<?php
    namespace Controller\Post;
    
    include(__DIR__.'/../pdo.php');
    use DB;
    
    class Post extends DB{
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)';
            $stmt = DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$content,$now,$now]);
        }
    }