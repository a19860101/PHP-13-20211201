<?php
    namespace Controller;

    require_once(__DIR__.'/../pdo.php');

    use DB;
    class Auth extends DB{
        static function store($request){
            extract($request);

            //檢查有沒有重複的會員名稱
            $sql_check = 'SELECT * FROM users WHERE user = ?';
            $stmt_check = DB::connect()->prepare($sql_check);
            $stmt_check->execute([$user]);
            if($stmt_check->rowCount() > 0){
                echo '<script>alert("此帳號名稱已被使用，請重新設定!")</script>';
                header('refresh:0;url=create.php');
                return; 
            }

            $pw = md5(sha1($pw));
            $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,?)';
            $now = date('Y-m-d H:i:s');

            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$user,$pw,$now]);

        }
        static function login($request){
            session_start();
            
            extract($request);
        
            $sql = 'SELECT * FROM users WHERE user = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt -> execute([$user]);
        
            $data = $stmt->fetch();
        
            if(!$data){
                echo '<script>alert("帳號不存在!")</script>';
                header('refresh:0;url=login.php');
                return;
            }
            if($data['pw'] == md5(sha1($pw))){
                $_SESSION['AUTH'] = $data;
                return 0;
            }else{
                return 1;
            }
        }
        static function access_denied(){
            session_start();
            $webroot = 'http://localhost/PHP-13-20211201/blog/';
            if(!isset($_SESSION['AUTH'])){
                header('location:'.$webroot);
                return;
            }
        }
        static function test(){
            echo 'test';
        }
    }