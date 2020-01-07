<?php

namespace HTML;

require_once __DIR__ . "/Node.php";
require_once __DIR__ . "/HtmlConfig.php";

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

	public function toHTML(HtmlConfig $config): string
	{
		$attributeString = $this->attributeString($config);
		$openingTag = "<{$this->tagName}{$attributeString}>";

		$config->indent(+1);
		$glueBeforeInnerHTML = $config->glue();
		$innerHTML = $this->innerHTML($config);
		$config->indent(-1);

		$glueAfterInnerHTML = $config->glue();
		$closingTag = "</{$this->tagName}>";

		if (self::isInline($this) && $this->tagName !== "script") {
			$glueBeforeInnerHTML = $glueAfterInnerHTML = "";
		}

		$outerHTML =
			$openingTag
			. ($innerHTML ? $glueBeforeInnerHTML : "")
			. $innerHTML
			. ($innerHTML ? $glueAfterInnerHTML : "")
			. $closingTag;
		return $outerHTML;
	}

	protected function attributeString(HtmlConfig $config): string
	{
		$attributeStrings = [];
		foreach ($this->attributes as $key => $value) {
			$attributeStrings[] = sprintf(' %s="%s"', $key, htmlspecialchars($value));
		}
		return join("", $attributeStrings);
	}

	protected function innerHTML(HtmlConfig $config): string
	{
		$parentIsInline = self::isInline($this);
		$prevSiblingIsInline = false;

		$html = "";

		for ($i = 0; $i < count($this->childNodes); $i++) {
			$child = $this->childNodes[$i];

			$childIsInline = self::isInline($child);

			if ($child instanceof Node) {
				$childHtml = $child->toHTML($config);
			} else {
				$childHtml = $child;
			}

			if (empty($html)) {
				$html .= "" . $childHtml;
			} else if ($this->tagName === "script") {
				if (empty($config->glue())) {
					$html .= " " . $childHtml;
				} else {
					$html .= $config->glue() . $childHtml;
				}
			} else if ($this->tagName === "pre") {
				$html .= "" . $childHtml;
			} else if ($childIsInline && $parentIsInline) {
				$html .= "" . $childHtml;
			} else if ($childIsInline && $prevSiblingIsInline) {
				$html .= "" . $childHtml;
			} else {
				$html .= $config->glue() . $childHtml;
			}

			$prevSiblingIsInline = $childIsInline;
		}

		return $html;
	}

	public function addChild(Node $node)
	{
		$this->childNodes[] = $node;
	}

	private static function isInline($node): bool
	{
		if (is_string($node) || is_a($node, TextNode::class)) {
			return true;
		}

		return false !== array_search(
			$node->tagName,
			[
				"a", "abbr", "acronym", "audio", "b", "bdi", "bdo", "big"
				#, "br"
				, "button", "canvas", "cite", "code", "data", "datalist", "del", "dfn", "em", "embed", "i", "iframe", "img", "input", "ins", "kbd", "label", "map", "mark", "meter", "noscript", "object", "output", "picture", "progress", "q", "ruby", "s", "samp", "script", "select", "small", "span", "strong", "sub", "sup", "textarea", "time", "tt", "var"
			],
			true
		);
	}
}
