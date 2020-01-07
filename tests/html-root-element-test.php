<?php

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, $indent);

#

$el = new HTML\HtmlRootElement(
	[],
	[
		new HTML\TextNode("foo")
	]
);

$html = $el->toHTML($uglyConfig);
assert($html == "<!DOCTYPE html>\n<html>foo</html>");

$html = $el->toHTML($prettyConfig);
assert($html == "<!DOCTYPE html>
<html>
{$indent}foo
</html>");
