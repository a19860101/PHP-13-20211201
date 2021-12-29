<?php
    namespace Controller;

    include(__DIR__.'/../pdo.php');

    use DB;

    class Category extends DB{
        static function all(){
            $sql = 'SELECT * FROM categories';
            $datas = DB::connect()->query($sql)->fetchAll();
            return $datas;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM categories WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
            
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO categories(title,slug,created_at)VALUES(?,?,?)';
            $stmt = DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$slug,$now]);
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM categories WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function update($request){
            extract($request);
            $sql = 'UPDATE categories SET title=?,content=?,updated_at=? WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$title,$content,DB::now(),$id]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }