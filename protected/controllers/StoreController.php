<?php
/**
 * Store controller.
 * upload media content.
 * @author walery
 *
 */


class StoreController extends Controller
{
    
    /**
     * upload media content.
     */
    public function actionUpload() 
    {
//      echo ("hello");   
     
     $uploaddir = '/uploads/';
     $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
     $logfile = $uploaddir."log/logfile.log";
     
     
     
     
//      var_dump($_FILES);
     
     echo '<pre>';
     
     if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
         echo "Файл ". $_FILES['userfile']['name'] ." успешно загружен.\n";
         echo "Отображаем содержимое\n";
         //     readfile($_FILES['userfile']['tmp_name']);
         print "<hr />";
     } else {
         echo "Возможная атака с участием загрузки файла: ";
         echo "файл '". $_FILES['userfile']['tmp_name'] . "'.";
     }
     
     $logstring = "\n";
     $logstring .= date("m.d.y H:i:s", time());
     $logstring .= '  '.'uploaded:';
     $logstring .= ' size:'.$_FILES['userfile']['size'];
     $logstring .= ' name:'.$_FILES['userfile']['name'];
     $logstring .= ' type:'.$_FILES['userfile']['type'];
     $logstring .= ' user_name:'. $_POST["user_name"];
     $logstring .= ';';
     
     // $logstring = "Не удалось удалить: $uploadfile\n";
     $log_fp = fopen($logfile, "a");
     $fwrite = fwrite($log_fp, $logstring);
     if ($fwrite === false) {
         //     return $written;
         echo "writing logfile error"."\n";
     }
     fclose($log_fp);
     
     print '<hr />';
     
     print $uploadfile . "\n";
     
     if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
         echo "Файл корректен и был успешно загружен.\n";
     } else {
         echo "Возможная атака с помощью файловой загрузки!\n";
     }
     
     echo 'Некоторая отладочная информация:';
     print_r($_FILES);
     var_dump($_POST);
     echo "REQUEST:"."\n";
     var_dump($_REQUEST);
     print "</pre>";
     print "<p>";
     switch($_SERVER['REQUEST_METHOD'])
     {
         case 'GET':
             //         $the_request = &$_GET;
             print "GET method."."\n";
             break;
         case 'POST':
             // $the_request = &$_POST;
             print "POST method."."\n";
             
             break;
         default:
     }
     
     print "</p>";
     
     // test Image object
     $image = Yii::app()->image->load('images/notyetexist.png');
     if($image != null){
         print "Image loded.";
//          $image->render();
            
     }else{
         print "Image not loade.";
     }
     
//      $msg = var_export($_POST,true) ;
//      Yii::log($msg, 'warning');
//      Yii::getLogger()->flush(true);
     
     
     
     
     
    }
    
    public function actionImage() {
        $image = Yii::app()->image->load('images/notyetexist.png');
        if($image != null){
//          print "Image loded.";
            $image->resize(200, 200)->rotate(-45)->quality(25)->sharpen(50);
//             $image->render();
            var_dump($_GET);
            
        }else{
            print "Image not loade.";
        }
        
    }
    
}
//-- EOF