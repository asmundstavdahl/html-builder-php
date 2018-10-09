<?php

namespace HTML;

class TextNode implements Node
{
	private $text;

	function __construct($text)
	{
		$this->text = $text;
	}

	public function toHTML($config)
	{
		return htmlspecialchars($this->text);
	}
}
