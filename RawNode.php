<?php

require_once __DIR__."/Node.php";
require_once __DIR__."/HtmlConfig.php";

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
