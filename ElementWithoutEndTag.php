<?php

require_once __DIR__."/Element.php";
require_once __DIR__."/HtmlConfig.php";

class ElementWithoutEndTag extends Element
{
	function __construct(string $tagName, array $attributes)
	{
		$this->tagName = $tagName;
		$this->attributes = $attributes;
		$this->children = [];
	}

	public function toHTML(HtmlConfig $config) : string
	{
		$attributeString = $this->attributeString($config);
		$openingTag = "<{$this->tagName}{$attributeString}>";

		$outerHTML = $openingTag;
		return $outerHTML;
	}

	protected function innerHTML(HtmlConfig $config) : string
	{
		return "";
	}
}
