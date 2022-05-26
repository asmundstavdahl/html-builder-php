<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

$indent = "  ";

$uglyConfig = new HtmlConfig(false);
$prettyConfig = new HtmlConfig(true, $indent);

#

$el = new Element(
    "script",
    [],
    [
        "let v = '" . 3.1415926 . " <- ~pi'", "alert(v)"
    ]
);

$html = $el->toHTML($uglyConfig);

$expectedHtml = "<script>let v = '3.1415926 <- ~pi' alert(v)</script>";

$ok = assert($html == $expectedHtml);
if (!$ok) {
    echo "html:\n{$html}\n:html\n";
}

#

$html = $el->toHTML($prettyConfig);

$expectedHtml = "<script>
{$indent}let v = '3.1415926 <- ~pi'
{$indent}alert(v)
</script>";

$ok = assert($html == $expectedHtml);
if (!$ok) {
    echo "html:\n{$html}\n:html\n";
}
