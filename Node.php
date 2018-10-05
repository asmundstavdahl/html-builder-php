<?php

require_once __DIR__."/HtmlConfig.php";

/**
 * An HTML node; text or element.
 */
interface Node
{
	public function toHTML(HtmlConfig $config) : string;
}
