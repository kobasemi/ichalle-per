  elseif($_FILES["userfile"]["error"] == UPLOAD_ERR_NO_FILE) {
    $message ="ファイルがアップロードされませんでした";
  }
  else {
    $message ="ファイルのアップロードに失敗しました";


  }
  echo $message;
}


?>
