<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HtmlConfig(false);
$prettyConfig = new HtmlConfig(true, $indent);

#

$el = new HtmlRootElement(
	[],
	[
		new TextNode("foo")
	]
);

$html = $el->toHTML($uglyConfig);
assert($html == "<!DOCTYPE html>\n<html>foo</html>");

$html = $el->toHTML($prettyConfig);
assert($html == "<!DOCTYPE html>
<html>
{$indent}foo
</html>");
