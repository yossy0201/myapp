<!DOCTYPE html>
<head>
  <title>My Book App</title>
  <link rel="stylesheet" href = "style.css">
</head>
<body>
<h1>あなたの読んだ本</h1>

こんにちは、<?php echo $_POST['name'] ?>さん
<br>
あなたが本を読み終えた日付は、<?php echo $_POST['date'] ?>です。
<br>
あなたの読んだ本は、<?php echo $_POST['book-name'] ?>です。
<br>
あなたの本の感想は、<?php echo $_POST['book-comment'] ?>です。
<br>

</body>
</html>
