<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>漫画記録</title>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="book.css">
</head>

<body>
  <div class "book">
   <form class = "form" action = "book_confirm.php" method = "POST">
    <div class = "head">
     <h1>漫画記録</h1>
    </div>
    
    <div class = "book">
    <div class = "form-group"> 
     <label for="inputtitle">タイトル</label>
     <input type="text" id="inputtitle" name="inputtitle" class = "form-control">
    </div>
    <div class = "form-group">
     <label for="inputtext">感想</label> 
     <textarea class = "form-control" id="inputtitle" name="inputtitle"></textarea>
    </div>
    
    <input type="submit" value="記録する">
    </div>
   </form>
  
  
  </div>
</body>