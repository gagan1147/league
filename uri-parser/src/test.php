<?php

$test = "https://api.offer18.com/api/af/offers?mid=1538&aid=296176&         key=0cfc81c7e812bb71f936611a808a8ecf&authorized=1";
echo $test."\n";
//$test = str_replace("	","%20",$test);
$test = preg_replace('/\s+/', '%20', $test);
echo $test;

?>