<?php

echo "<br><br><b>Crow.PHP is nearly coming stable! Just wait a bit more!</b><br><br>";

//The Auto-Updater
function update(){
  $write = fopen("crow.php","w");
  $data = file_get_contents("https://raw.githubusercontent.com/chattybot0/crow.php/main/crow.php");
  fwrite($write,$data);
  fclose($write);
}
update();

//Log a value to console
function console_log($text = "No input specified, This means this must be a Crow.PHP FATAL error."){
  echo "<script>console.log('" . $text . "');</script>";
}

function loadpkgs()
{
  $read = fopen("ai.pkg","r");
  $urls = explode("\n",explode("packs@",fread($read,filesize("ai.pkg")))[1]);
  foreach($urls as $url){
	  $pkg = file_get_contents($url);
		$packs = explode("main@",$main)[1];
    $main = explode("sep;\ndeps@\n",$packs)[0];
    $deps = explode("\n",explode("sep;\ndeps@\n",$packs)[1]);
    include($main);
    foreach($deps as $dep){
      include($dep);
    }
  }
}

//Check for `ai.pkg`
if(file_exists("ai.pkg")){
  loadpkgs();
}
else {
  console_log("Crow.PHP Load error: No ai.pkg file found, Or the permissions to read it is denied.");
}

?>
