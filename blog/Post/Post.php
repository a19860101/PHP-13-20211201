<?php
    namespace Post\Post;
    
    include(__DIR__.'/../pdo.php');
    
    class Post extends DB{
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)';
            $stmt = DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$content,$now,$now]);
        }
    }