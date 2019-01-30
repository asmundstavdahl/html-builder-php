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
$ok = assert($html == "<div>foo<span>barbaz</span></div>");
if (!$ok) {
    echo "html:\n{$html}\n:html\n";
}
$html = $el->toHTML($prettyConfig);
$ok = assert($html == "<div>
{$indent}foo<span>barbaz</span>
</div>");
if (!$ok) {
    echo "html:\n{$html}\n:html\n";
}
