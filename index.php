<?php
  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $length = strlen($text);
  $censored = $_GET["text"];
  $textCensored = str_replace($censored, "***", $text)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h3>Testo Originale:</h3>
  <p><?php echo $text; ?></p>

  <h3>Lunghezza Testo Originale:</h3>
  <p><?php echo $length; ?></p>

  <h3>Testo Censurato (in):</h3>
  <p><?php echo $textCensored; ?></p>
</body>
</html>
