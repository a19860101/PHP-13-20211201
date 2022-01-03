<?php
    namespace Controller;
    
    require_once(__DIR__.'/../pdo.php');
    use DB;
    
    class Post extends DB{
        static function all(){
            // $sql = 'SELECT * FROM posts';
            $sql = 'SELECT posts.*,users.user,categories.slug,categories.title AS c_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id LEFT JOIN users ON posts.user_id = users.id ORDER BY updated_at DESC';
            $datas = DB::connect()->query($sql)->fetchAll();
            return $datas;
        }
        static function show($request){
            extract($request);
            // $sql = 'SELECT * FROM posts WHERE id = ?';
            $sql = 'SELECT posts.*,users.user,categories.slug,categories.title AS c_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id LEFT JOIN users ON posts.user_id = users.id WHERE posts.id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
            
        }
        static function store($request){
            extract($request);
            session_start();
            $sql = 'INSERT INTO posts(title,category_id,user_id,content,created_at,updated_at)VALUES(?,?,?,?,?,?)';
            $stmt = DB::connect()->prepare($sql);
            $now = DB::now();
            $id = $_SESSION['AUTH']['id'];
            $stmt->execute([$title,$category_id,$id,$content,$now,$now]);
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function update($request){
            extract($request);
            $sql = 'UPDATE posts SET title=?,category_id=?,content=?,updated_at=? WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$title,$category_id,$content,DB::now(),$id]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }