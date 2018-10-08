<?php

namespace HTML;

class TextNode implements Node
{
	private $text;

	function __construct(string $text)
	{
		$this->text = $text;
	}

	public function toHTML(HtmlConfig $config)
	{
		return htmlspecialchars($this->text);
	}
}
