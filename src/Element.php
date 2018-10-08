<?php

namespace HTML;

require_once __DIR__."/Node.php";
require_once __DIR__."/HtmlConfig.php";

class Element implements Node
{
	protected $tagName;
	protected $attributes;
	protected $childNodes;

	function __construct(string $tagName, array $attributes, array $childNodes)
	{
		$this->tagName = $tagName;
		$this->attributes = $attributes;
		$this->childNodes = $childNodes;
	}

	public function toHTML(HtmlConfig $config)
	{
		$attributeString = $this->attributeString($config);
		$openingTag = "<{$this->tagName}{$attributeString}>";

		$config->indent(+1);
		$glueBeforeInnerHTML = $config->glue();
		$innerHTML = $this->innerHTML($config);
		$config->indent(-1);

		$glueAfterInnerHTML = $config->glue();
		$closingTag = "</{$this->tagName}>";

		$outerHTML = 
			$openingTag
			. ($innerHTML ?$glueBeforeInnerHTML :"")
			. $innerHTML
			. ($innerHTML ?$glueAfterInnerHTML :"")
			. $closingTag;
		return $outerHTML;
	}

	protected function attributeString(HtmlConfig $config)
	{
		$attributeStrings = [];
		foreach ($this->attributes as $key => $value) {
			return sprintf(' %s="%s"', $key, htmlspecialchars($value));
		}
		return join("", $attributeStrings);
	}

	protected function innerHTML(HtmlConfig $config)
	{
		$childHTMLStrings = array_map(
			function($child) use ($config){
				if(is_string($child)){
					return $child;
				}
				return $child->toHTML($config);
			}, $this->childNodes
		);

		return join($config->glue(), $childHTMLStrings);
	}

	public function addChild(Node $node) {
		$this->childNodes []= $node;
	}
}