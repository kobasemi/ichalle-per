<?php

session_start();

if(empty($_SESSION['username'])||empty($_SESSION['lastdate'])){
    header("Location: ./login.php");
}

if($_SESSION['username']==NULL||$_SESSION['lastdate']==NULL){

  header("Location: ./login.php");

}


echo $_SESSION['username'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
  if($_FILES["userfile"]["error"] == UPLOAD_ERR_OK){

    var_dump($_FILES["userfile"]);
    $tempfile = $_FILES["userfile"]["tmp_name"];
    $filename = $_FILES["userfile"]["name"];
    //   $filename = mb_convert_encoding($filename, "cp932", "utf8"); //文字コード変換
    $result = move_uploaded_file($tempfile, "/var/www/html/user/".$_SESSION['username']."/algo/".$filename); //ファ\\
イル保存
    if($result == TRUE){
      $message ="ファイルのアップロードに成功しました";
    }
    else{
      $message ="ファイルの移動に失敗しました";
    }
  }
  elseif($_FILES["userfile"]["error"] == UPLOAD_ERR_NO_FILE) {
    $message ="ファイルがアップロードされませんでした";
  }
  else {
    $message ="ファイルのアップロードに失敗しました";


  }
  echo $message;
}


?>
