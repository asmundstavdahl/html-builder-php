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

$textChild = new TextNode("foo");
$elementChild = new Element("h1", [], ["a child"]);

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
