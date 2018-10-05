<?php

require_once __DIR__."/Element.php";
require_once __DIR__."/HtmlConfig.php";

class HtmlRootElement extends Element
{
	function __construct(array $attributes, array $childNodes)
	{
		parent::__construct("html", $attributes, $childNodes);
	}

	public function toHTML(HtmlConfig $config) : string
	{
		return "<!DOCTYPE html>\n" . parent::toHTML($config);
	}
}
