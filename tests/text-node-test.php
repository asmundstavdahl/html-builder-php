<?php

require_once __DIR__."/../vendor/autoload.php";

$uglyConfig = new HTML\HtmlConfig(false);
$prettyConfig = new HTML\HtmlConfig(true, "  ");

$textNode = new HTML\TextNode("Escape <html> & entities please.");

$html = $textNode->toHTML($uglyConfig);
assert($html == "Escape &lt;html&gt; &amp; entities please.");

$html = $textNode->toHTML($prettyConfig);
assert($html == "Escape &lt;html&gt; &amp; entities please.");
