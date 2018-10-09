<?php

require_once __DIR__."/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, $indent);

#

$el = new HTML\Element("div",
	[ "class" => "first div"
	, "style" => "color: crimson;"
	], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<div class=\"first div\" style=\"color: crimson;\"></div>");
$html = $el->toHTML($prettyConfig);
assert($html == "<div class=\"first div\" style=\"color: crimson;\"></div>");
