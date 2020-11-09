<?php

//BEGIN minify
$preminify = str_replace("  ","",str_replace("\r\n","",str_replace("\n","",$unminify)));
$minify = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!',' ', $preminify);
//END minify

?>