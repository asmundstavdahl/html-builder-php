<?php

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, $indent);

#

$el = new HTML\Element("div", [], []);

$html = $el->toHTML($uglyConfig);
assert($html == "<div></div>");

$textChild = new HTML\TextNode("foo");
$elementChild = new HTML\Element("h1", [], ["a child"]);

$el->addChild($textChild);
$el->addChild($elementChild);

$html = $el->toHTML($uglyConfig);
assert($html == "<div>foo<h1>a child</h1></div>");

$html = $el->toHTML($prettyConfig);
assert($html == "<div>
{$indent}foo
{$indent}<h1>
{$indent}{$indent}a child
{$indent}</h1>
</div>");
