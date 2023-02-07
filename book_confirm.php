<?php
 $inputTitle = $_POST["inputtitle"];
 $inputText = $_POST["inputtext"];


#入力データチェック
if(empty($inputTitle)){
 echo "タイトルを入力してください";
 exit;
}

#データ登録
$db['host'] =
$db['user'] =
$db['pass'] =
$db['dbname'] =
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',$db['host'],$db['dbname']);
 try{
  $hdb = new POD($dsn,$db['user'],$db['pass'],array(POD::ATTR_ERRMODE=>POD::ERROMODE_EXCEPTION));
 }catch(PDOException $e){
  exit("Database Connection Error." .$e->getMessage());
 }
 $sql = "insert into blog(title,
                          text,
                          updatetime
                         )values(
                         :v_title,
                         :v_text,
                         now()
                          )";
 $stmt = $hdb -> prepare($sql);
 $stmt -> bindparam("v_title",$inputTitle);
 $stmt -> bindparam("v_text",$inputText);
 $stmt -> execute();
 if (!$stmt){
  $info = $stmt -> errorInfo();
  exit($info[2]);
 }
 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>漫画完了</title>
<link rel="stylesheet" href="book.css">
</head>

<body>
 <p>記録できました！</p>
</body>