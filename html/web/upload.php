<?php
session_start();


if(empty($_SESSION['username'])||empty($_SESSION['lastdate'])){
    header("Location: ./login.php");
  }

      if($_SESSION['username']==NULL||$_SESSION['lastdate']==NULL){

    header("Location: ./login.php");

      }

?>


<html>
<head>
<title>AIupload</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="./css/default.css">
</head>
<body class="body2">
<form class="form2" action="./form/upform.php" method="post" enctype="multipart/form-data">
<p>作成したAIをUPLOADしてください。</p>
<input type="file" name="userfile" size="40" /></br></br>
<input class="btn" type="submit" value="送信" />
</form>

</body>
</html>

