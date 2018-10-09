<?php

namespace HTML;

require_once __DIR__."/Element.php";
require_once __DIR__."/HtmlConfig.php";

class HtmlRootElement extends Element
{
	function __construct($attributes, $childNodes)
	{
		parent::__construct("html", $attributes, $childNodes);
	}

	public function toHTML($config)
	{
		return "<!DOCTYPE html>\n" . parent::toHTML($config);
	}
}
