<html><body><tt><?php

include("inc/cms.php");

echo "platzhalter-test<br>****************";

echo "<br><br>cms->website->title()<br>&nbsp;";
$cms->website->title();

echo "<br><br>cms->website->domain()<br>&nbsp;";
$cms->website->domain();

echo "<br><br>cms->website->webmaster()<br>&nbsp;";
$cms->website->webmaster();

echo "<br><br>cms->page->title()<br>&nbsp;";
$cms->page->title();

echo "<br><br>cms->page->id()<br>&nbsp;";
$cms->page->id();

echo "<br><br>cms->page->body()<br>&nbsp;";
$cms->page->body();

?></tt></body></html>