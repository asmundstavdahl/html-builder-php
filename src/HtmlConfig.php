<?php

namespace HTML;

/**
 * Configuration for when making HTML.
 */
class HtmlConfig
{
	public $pretty = false;
	public $indentationString = "  ";
	public $indentationLevel = 0;

	function __construct(
		bool $pretty = true,
		string $indentationString = "  ",
		int $initialIndentationLevel = 0)
	{
		$this->pretty = $pretty;
		$this->indentationString = $indentationString;
		$this->indentationLevel = $initialIndentationLevel;
	}

	function indent(int $deltaIntentationLevel)
	{
		$this->indentationLevel += $deltaIntentationLevel;
		return $this;
	}

	function indentation(int $relativeIndentationLevel = 0)
	{
	}

	function glue(int $relativeIndentationLevel = 0)
	{
		if ($this->pretty)
		{
			return "\n" . str_repeat(
				$this->indentationString,
				$this->indentationLevel + $relativeIndentationLevel
			);
		}
		return "";
	}
}
