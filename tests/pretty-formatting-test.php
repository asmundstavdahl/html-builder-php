<?php

require_once __DIR__."/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, $indent);

#

$el = new HTML\Element("div", [],
	[ new HTML\TextNode("foo")
	, new HTML\Element("span", [],
		[ new HTML\TextNode("bar")
		, new HTML\TextNode("baz")
		])
	]);

$html = $el->toHTML($uglyConfig);
assert($html == "<div>foo<span>barbaz</span></div>");
$html = $el->toHTML($prettyConfig);
assert($html == "<div>
{$indent}foo
{$indent}<span>
{$indent}{$indent}bar
{$indent}{$indent}baz
{$indent}</span>
</div>");
