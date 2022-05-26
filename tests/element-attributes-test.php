<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HtmlConfig(false);
$prettyConfig = new HtmlConfig(true, $indent);

#

$el = new Element(
	"div",
	[
		"class" => "first div", "style" => "color: crimson;"
	],
	[]
);

$html = $el->toHTML($uglyConfig);
assert($html == "<div class=\"first div\" style=\"color: crimson;\"></div>");
$html = $el->toHTML($prettyConfig);
assert($html == "<div class=\"first div\" style=\"color: crimson;\"></div>");
