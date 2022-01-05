<?php
    namespace Gjun\Blog\Controller;

    use Gjun\Blog\Config\DB;

    class File extends DB {
        static function upload($img){
            extract($img);

        
            if(!is_dir('images')){
                mkdir('images');
            }
        
        //     //副檔名
            $ext = pathinfo($name,PATHINFO_EXTENSION);
            // echo $ext;
        
        //     //檔名
            $imgName =md5(time());
        
        //     //完整檔名
            $fullname = $imgName.'.'.$ext;
        
            if($ext != 'jpg' && $ext!= 'gif' && $ext !='png' && $ext!='jpeg'){
                echo '<script>alert("請上傳正確的圖檔格式!")</script>';
                header('refresh:0;url=form.php');
                return;
            }
        
        //     //新增資料
        
            $target = 'images/'.$fullname;
            if($error == 0){
                if(move_uploaded_file($tmp_name,$target)){
                    $status = [
                        'status' => 0,
                        'statusText' => '上傳成功'
                    ];
                    return $status;
                    // echo '<script>alert("上傳成功!")</script>';
                    // header('refresh:0;url=form.php');
                }else{
                    $status = [
                        'status' => 1,
                        'statusText' => '上傳失敗'
                    ];
                    // echo '<script>alert("上傳失敗!，請重新上傳")</script>';
                    // header('refresh:0;url=form.php');
                }
            }
        }
    }