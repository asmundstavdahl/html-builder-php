<?php

namespace HTML;

/**
 * An HTML node; text or element.
 */
interface Node
{
	public function toHTML(HtmlConfig $config) : string;
}
