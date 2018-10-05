<?php

require_once __DIR__."/Node.php";
require_once __DIR__."/HtmlConfig.php";

class TextNode implements Node
{
	private $text;

	function __construct(string $text)
	{
		$this->text = $text;
	}

	public function toHTML(HtmlConfig $config) : string
	{
		return htmlspecialchars($this->text);
	}
}
