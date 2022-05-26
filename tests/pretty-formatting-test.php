<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HtmlConfig(false);
$prettyConfig = new HtmlConfig(true, $indent);

#

$el = new Element(
	"div",
	[],
	[
		new TextNode("foo"), new Element(
			"span",
			[],
			[
				new TextNode("bar"), new TextNode("baz")
			]
		)
	]
);

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
