<?php

require_once 'vendor/autoload.php';

use AsmundStavdahl\HTML;

# Include element function definitions
new HTML\Elements;

$nodeTree = HTML\HTML(["lang" => "en"],
  [ HTML\HEAD([],
    [ HTML\TITLE([], ["Test of html-builder"])
    , HTML\STYLE([], [
      "h1 { color: red; }
      .im-blue { color: lightblue; }"
      ])
    ])
  , HTML\BODY([],
    [ HTML\H1([], ["This is a test"])
    , HTML\P([],
      [ "Strings become text nodes."
      , HTML\BR()
      , HTML\TEXT("You can also be more explicit and make a text node using the TEXT function.")
      ])
    , HTML\LABEL(["for" => "test_input"], ["Test input"])
    , HTML\INPUT(["id" => "test_input", "type" => "text"])
    ])
  ]);

$htmlConfig = new HTML\HtmlConfig(
	true, # pretty formating with indentation
	"  "  # indent with two spaces
);
$html = $nodeTree->toHTML($htmlConfig);

/**
 * Insert updated example PHP code from the README file above this comment
 */

/**
 * Retrieve the output HTML from the README file
 */
$readme = file_get_contents(__DIR__ . "/../README.md");
$wantedHtmlLines = [];
$inHtmlBlock = false;
foreach (explode("\n", $readme) as $lineNr => $line) {
    if ($inHtmlBlock) {
        if($line === "```") {
            $inHtmlBlock = false;
        }
        else {
            $wantedHtmlLines[] = $line;
        }
    }

    if ($line === "```html") {
        $inHtmlBlock = true;
    }
}
$wantedHtml = implode("\n", $wantedHtmlLines);

$ok = assert($html === $wantedHtml);

if (!$ok) {
	echo "html:\n{$html}\n:html\n";
}
