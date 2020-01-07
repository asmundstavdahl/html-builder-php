<?php

namespace HTML;

class TextNode implements Node
{
	private $text;

	function __construct(string $text)
	{
		$this->text = $text;
	}

	function __toString(): string
	{
		return $this->toHTML(new HtmlConfig());
	}

	public function toHTML(HtmlConfig $config): string
	{
		return htmlentities($this->text, ENT_QUOTES | ENT_HTML5);
	}
}
