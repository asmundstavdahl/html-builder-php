<?php

namespace HTML;

class RawNode implements Node
{
	private $html;

	function __construct(string $html)
	{
		$this->html = $html;
	}

	public function toHTML(HtmlConfig $config) : string
	{
		return $this->html;
	}
}
