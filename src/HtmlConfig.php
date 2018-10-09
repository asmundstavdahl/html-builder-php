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
		$pretty = true,
		$indentationString = "  ",
		$initialIndentationLevel = 0)
	{
		$this->pretty = $pretty;
		$this->indentationString = $indentationString;
		$this->indentationLevel = $initialIndentationLevel;
	}

	function indent($deltaIntentationLevel)
	{
		$this->indentationLevel += $deltaIntentationLevel;
		return $this;
	}

	function indentation($relativeIndentationLevel = 0)
	{
	}

	function glue($relativeIndentationLevel = 0)
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
