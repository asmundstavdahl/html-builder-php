<?php

namespace HTML;

class ElementWithoutEndTag extends Element
{
	function __construct($tagName, $attributes)
	{
		$this->tagName = $tagName;
		$this->attributes = $attributes;
		$this->children = [];
	}

	public function toHTML($config)
	{
		$attributeString = $this->attributeString($config);
		$openingTag = "<{$this->tagName}{$attributeString}>";

		$outerHTML = $openingTag;
		return $outerHTML;
	}

	protected function innerHTML($config)
	{
		return "";
	}
}
