<?php
    namespace Controller;
    
    include(__DIR__.'/../pdo.php');
    use DB;
    
    class Post extends DB{
        static function all(){
            $sql = 'SELECT * FROM posts';
            $datas = DB::connect()->query($sql)->fetchAll();
            return $datas;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
            
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)';
            $stmt = DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$content,$now,$now]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }