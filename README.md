# html-builder-php

# Usage

```sh
composer require asmundstavdahl/html
```

```php
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
```

The resulting `$html` would be this string:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Test of html-builder
    </title>
    <style>
      h1 { color: red; }
      .im-blue { color: lightblue; }
    </style>
  </head>
  <body>
    <h1>
      This is a test
    </h1>
    <p>
      Strings become text nodes.
      <br>
      You can also be more explicit and make a text node using the TEXT function&period;
    </p>
    <label for="test_input">Test input</label><input id="test_input" type="text">
  </body>
</html>
```
