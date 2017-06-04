<form method="POST">
<input name="asd" value="zxcs">
<input type="submit">
</form>
<pre>
<?php

var_dump([
  'post' => $_POST, 
  'get'  => $_GET, 
  'uri'  => $_SERVER['REQUEST_URI'], 
  'scriptFileName' => $_SERVER['SCRIPT_FILENAME']
]);
