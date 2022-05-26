<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

$uglyConfig = new HtmlConfig(false);
$prettyConfig = new HtmlConfig(true, "  ");

$textNode = new TextNode("Escape <html> & entities please.");

$html = $textNode->toHTML($uglyConfig);
assert($html == "Escape &lt;html&gt; &amp; entities please&period;");

$html = $textNode->toHTML($prettyConfig);
assert($html == "Escape &lt;html&gt; &amp; entities please&period;");
