<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
  // 아이디, 비밀번호 처리
  $id = $_POST["id"];
  $pass = $_POST["pass"];
?>
    <ul>
      <li>아 &nbsp;이 &nbsp;디 : <?=$id?></li>
      <li>비밀번호 : <?=$pass?> </li>
    </ul>

  </body>
</html>


