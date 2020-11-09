<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="ico.svg" rel="favicon"/>
  <link href="ico.svg" rel="shortcut icon"/>
  <link href="ico.svg" rel="apple-touch-icon"/>
  <!--<link href="style.css" rel="stylesheet" />-->
  <link href="github.css" rel="stylesheet" /> 
    <title>CrowDotPHP</title>
  </head>
  <body id="body">
  <div class="container-lg px-3 my-5 markdown-body">
  <pre>

░█████╗░██████╗░░█████╗░░██╗░░░░░░░██╗░░░██████╗░██╗░░██╗██████╗░
██╔══██╗██╔══██╗██╔══██╗░██║░░██╗░░██║░░░██╔══██╗██║░░██║██╔══██╗
██║░░╚═╝██████╔╝██║░░██║░╚██╗████╗██╔╝░░░██████╔╝███████║██████╔╝
██║░░██╗██╔══██╗██║░░██║░░████╔═████║░░░░██╔═══╝░██╔══██║██╔═══╝░
╚█████╔╝██║░░██║╚█████╔╝░░╚██╔╝░╚██╔╝░██╗██║░░░░░██║░░██║██║░░░░░
░╚════╝░╚═╝░░╚═╝░╚════╝░░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░░░░╚═╝░░╚═╝╚═╝░░░░░
	<hr>

  Why waste time install and update packages? Auto-Install them, Don’t waste your time.
  <article class="markdown-body">
  <p>
About this project:
This code is a Pre-Compiled package manager which includes
auto-install, auto-update and auto-load by default.
It is easy to use, and it also supports composer.
Method 1:

Run this code in your console:
<input id="">curl -sS https://crowdotphp.martiaforoud.repl.co/crow.min | php</input>

Method 2:

Press the copy button and paste it in a file named `crow.php`.
Then, add this code to your project's files: `include("./crow.php");`

  </p>
  </article>
  <article class="markdown-body">

  <button onclick='document.getElementById("raw").select();copyText.setSelectionRange(0, 99999);document.execCommand("copy");'>Copy Code</button>
<br>
<?php
$file = fopen("./crow.php","r");
$unminify = fread($file,filesize("./crow.php"));
fclose($file);
include('./minify.php');


$write = fopen("./crow.min", "w");
fwrite($write, $minify);
fclose($write);
$data = file_get_contents("./crow.min");
include('./crow.php');


echo "<br><textarea id='raw' style='width: 100%;height: 30%;'>";
echo $data;
echo "</textarea>
  <!--<h1>Syntax-Highlighted Code:</h1>";
echo highlight_string(file_get_contents("./crow.php"));
?>
-->
	  </pre>
	  </article>
	  <script>
	  setTimeout(function(){
		  document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace("1	  "," ");
	  },2000);
	  /*

		setInterval(function(){httpGet("https://crowphp.martiaforoud.repl.co");},20000);
	  function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
	//document.getElementById("body").innerHTML = xmlHttp.responseText;
}

	  */
	  </script>
  </body>
</html>