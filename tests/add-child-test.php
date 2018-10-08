<?php

require_once __DIR__."/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, $indent);

#

$el = new HTML\Element("div", [], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<div></div>");

$textChild = new HTML\TextNode("foo");
$elementChild = new HTML\Element("a",
	["href" => "http://example.com"],
	["example link"]);

$el->addChild($textChild);
$el->addChild($elementChild);

$html = $el->toHTML($uglyConfig);
assert($html == "<div>foo<a href=\"http://example.com\">example link</a></div>");

$html = $el->toHTML($prettyConfig);
assert($html == "<div>
{$indent}foo
{$indent}<a href=\"http://example.com\">
{$indent}{$indent}example link
{$indent}</a>
</div>");
