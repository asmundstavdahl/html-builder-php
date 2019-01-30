# html-builder-php

# Usage

```sh
composer require asmundstavdahl/html
```

```php
<?php

require_once 'vendor/autoload.php';

# Include element function definitions
new HTML\Elements;

$nodeTree = HTML(["lang" => "en"],
  [ HEAD([],
    [ TITLE([], ["Test of html-builder"])
    , STYLE([], [
      "h1 { color: red; }
      .im-blue { color: lightblue; }"
      ])
    ])
  , BODY([],
    [ H1([], ["This is a test"])
    , P([],
      [ "Strings become text nodes."
      , BR()
      , TEXT("You can also be more explicit and make a text node using the TEXT function.")
      ])
    , LABEL(["for" => "test_input"], ["Test input"])
    , INPUT(["id" => "test_input", "type" => "text"])
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
