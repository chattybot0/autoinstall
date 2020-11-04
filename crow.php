<?php

function log($text = "No input specified, This means this must be a Crow.PHP error."){
  echo "<!--Added by Crow.php--><script>console.log(" . $text . ");</script>";
}

if(file_exists("ai.pkg")){
  
}
else {
  log("Crow.PHP Fatal error: No ai.pkg file found, Or the permissions to read it is denied.");
}

?>
