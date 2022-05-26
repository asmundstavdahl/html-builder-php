<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HtmlConfig(false);
$prettyConfig = new HtmlConfig(true, $indent);

#

$el = new Element("div", [], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<div></div>");
$html = $el->toHTML($prettyConfig);
assert($html == "<div></div>");

#

$el = new Element(
	"a",
	["href" => "http://example.com"],
	[
		new TextNode("example"), new Element("b", [], ["link"])
	]
);

$html = $el->toHTML($uglyConfig);
assert($html == "<a href=\"http://example.com\">example<b>link</b></a>");
$html = $el->toHTML($prettyConfig);
assert($html == "<a href=\"http://example.com\">example<b>link</b></a>");

#

$el = new Element("my-custom-element", [], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<my-custom-element></my-custom-element>");
$html = $el->toHTML($prettyConfig);
assert($html == "<my-custom-element></my-custom-element>");
