<?php

require_once __DIR__."/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, $indent);

#

$el = new HTML\Element("div", [], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<div></div>");
$html = $el->toHTML($prettyConfig);
assert($html == "<div></div>");

#

$el = new HTML\Element(
	"a",
	["href" => "http://example.com"],
	[ new HTML\TextNode("example link") ]);

$html = $el->toHTML($uglyConfig);
assert($html == "<a href=\"http://example.com\">example link</a>");
$html = $el->toHTML($prettyConfig);
assert($html == "<a href=\"http://example.com\">\n{$indent}example link\n</a>");

#

$el = new HTML\Element("my-custom-element", [], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<my-custom-element></my-custom-element>");
$html = $el->toHTML($prettyConfig);
assert($html == "<my-custom-element></my-custom-element>");
