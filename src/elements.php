<?php

/**
 * Functions for each HTML element.
 *
 * Note: some element names collide with PHP built-ins; such tags are suffixed with "_tag", e.g. DIR_tag
 */

require_once __DIR__."/HtmlRootElement.php";
require_once __DIR__."/TextNode.php";
require_once __DIR__."/Element.php";
require_once __DIR__."/ElementWithoutEndTag.php";

function HTML($attributes = [], $childNodes = []) { return new HTML\HtmlRootElement($attributes, $childNodes); }

/**
 * Just a plain text node; not an HTML element.
 */
function TEXT($text) { return new HTML\TextNode($text); }

/**
 * Elements with no end tags, found by `wget -qO- https://html.spec.whatwg.org | grep -B2 "No <[^>]*>end tag" | grep -o "<code>[^<]*</code>"`.
 *
 * @see https://html.spec.whatwg.org/ search for "No end tag"
 */
//
function BASE_tag($attributes = []) { return new HTML\ElementWithoutEndTag("base", $attributes); }
function LINK_tag($attributes = []) { return new HTML\ElementWithoutEndTag("link", $attributes); }
function MASK($attributes = []) { return new HTML\ElementWithoutEndTag("mask", $attributes); }
function META($attributes = []) { return new HTML\ElementWithoutEndTag("meta", $attributes); }
function HR($attributes = []) { return new HTML\ElementWithoutEndTag("hr", $attributes); }
function BR($attributes = []) { return new HTML\ElementWithoutEndTag("br", $attributes); }
function WBR($attributes = []) { return new HTML\ElementWithoutEndTag("wbr", $attributes); }
function IMG($attributes = []) { return new HTML\ElementWithoutEndTag("img", $attributes); }
function PARAM($attributes = []) { return new HTML\ElementWithoutEndTag("param", $attributes); }
function TRACK($attributes = []) { return new HTML\ElementWithoutEndTag("track", $attributes); }
function AREA_tag($attributes = []) { return new HTML\ElementWithoutEndTag("area", $attributes); }
function INPUT($attributes = []) { return new HTML\ElementWithoutEndTag("input", $attributes); }

/**
 * Normal elements follow.
 */
//
function A($attributes = [], $childNodes = []) { return new HTML\Element("a", $attributes, $childNodes); }
function ABBR($attributes = [], $childNodes = []) { return new HTML\Element("abbr", $attributes, $childNodes); }
function ACRONYM($attributes = [], $childNodes = []) { return new HTML\Element("acronym", $attributes, $childNodes); }
function ADDRESS($attributes = [], $childNodes = []) { return new HTML\Element("address", $attributes, $childNodes); }
function APPLET($attributes = [], $childNodes = []) { return new HTML\Element("applet", $attributes, $childNodes); }
function AREA($attributes = [], $childNodes = []) { return new HTML\Element("area", $attributes, $childNodes); }
function ARTICLE($attributes = [], $childNodes = []) { return new HTML\Element("article", $attributes, $childNodes); }
function ASIDE($attributes = [], $childNodes = []) { return new HTML\Element("aside", $attributes, $childNodes); }
function AUDIO($attributes = [], $childNodes = []) { return new HTML\Element("audio", $attributes, $childNodes); }
function B($attributes = [], $childNodes = []) { return new HTML\Element("b", $attributes, $childNodes); }
function BASE($attributes = [], $childNodes = []) { return new HTML\Element("base", $attributes, $childNodes); }
function BASEFONT($attributes = [], $childNodes = []) { return new HTML\Element("basefont", $attributes, $childNodes); }
function BDI($attributes = [], $childNodes = []) { return new HTML\Element("bdi", $attributes, $childNodes); }
function BDO($attributes = [], $childNodes = []) { return new HTML\Element("bdo", $attributes, $childNodes); }
function BIG($attributes = [], $childNodes = []) { return new HTML\Element("big", $attributes, $childNodes); }
function BLOCKQUOTE($attributes = [], $childNodes = []) { return new HTML\Element("blockquote", $attributes, $childNodes); }
function BODY($attributes = [], $childNodes = []) { return new HTML\Element("body", $attributes, $childNodes); }
#function BR($attributes = [], $childNodes = []) { return new HTML\Element("br", $attributes, $childNodes); }
function BUTTON($attributes = [], $childNodes = []) { return new HTML\Element("button", $attributes, $childNodes); }
function CANVAS($attributes = [], $childNodes = []) { return new HTML\Element("canvas", $attributes, $childNodes); }
function CAPTION($attributes = [], $childNodes = []) { return new HTML\Element("caption", $attributes, $childNodes); }
function CENTER($attributes = [], $childNodes = []) { return new HTML\Element("center", $attributes, $childNodes); }
function CITE($attributes = [], $childNodes = []) { return new HTML\Element("cite", $attributes, $childNodes); }
function CODE($attributes = [], $childNodes = []) { return new HTML\Element("code", $attributes, $childNodes); }
function COL($attributes = [], $childNodes = []) { return new HTML\Element("col", $attributes, $childNodes); }
function COLGROUP($attributes = [], $childNodes = []) { return new HTML\Element("colgroup", $attributes, $childNodes); }
function DATA($attributes = [], $childNodes = []) { return new HTML\Element("data", $attributes, $childNodes); }
function DATALIST($attributes = [], $childNodes = []) { return new HTML\Element("datalist", $attributes, $childNodes); }
function DD($attributes = [], $childNodes = []) { return new HTML\Element("dd", $attributes, $childNodes); }
function DEL($attributes = [], $childNodes = []) { return new HTML\Element("del", $attributes, $childNodes); }
function DETAILS($attributes = [], $childNodes = []) { return new HTML\Element("details", $attributes, $childNodes); }
function DFN($attributes = [], $childNodes = []) { return new HTML\Element("dfn", $attributes, $childNodes); }
function DIALOG($attributes = [], $childNodes = []) { return new HTML\Element("dialog", $attributes, $childNodes); }
function DIR_tag($attributes = [], $childNodes = []) { return new HTML\Element("dir", $attributes, $childNodes); }
function DIV($attributes = [], $childNodes = []) { return new HTML\Element("div", $attributes, $childNodes); }
function DL_tag($attributes = [], $childNodes = []) { return new HTML\Element("dl", $attributes, $childNodes); }
function DT($attributes = [], $childNodes = []) { return new HTML\Element("dt", $attributes, $childNodes); }
function EM($attributes = [], $childNodes = []) { return new HTML\Element("em", $attributes, $childNodes); }
function EMBED($attributes = [], $childNodes = []) { return new HTML\Element("embed", $attributes, $childNodes); }
function FIELDSET($attributes = [], $childNodes = []) { return new HTML\Element("fieldset", $attributes, $childNodes); }
function FIGCAPTION($attributes = [], $childNodes = []) { return new HTML\Element("figcaption", $attributes, $childNodes); }
function FIGURE($attributes = [], $childNodes = []) { return new HTML\Element("figure", $attributes, $childNodes); }
function FONT($attributes = [], $childNodes = []) { return new HTML\Element("font", $attributes, $childNodes); }
function FOOTER($attributes = [], $childNodes = []) { return new HTML\Element("footer", $attributes, $childNodes); }
function FORM($attributes = [], $childNodes = []) { return new HTML\Element("form", $attributes, $childNodes); }
function FRAME($attributes = [], $childNodes = []) { return new HTML\Element("frame", $attributes, $childNodes); }
function FRAMESET($attributes = [], $childNodes = []) { return new HTML\Element("frameset", $attributes, $childNodes); }
function H1($attributes = [], $childNodes = []) { return new HTML\Element("h1", $attributes, $childNodes); }
function H2($attributes = [], $childNodes = []) { return new HTML\Element("h2", $attributes, $childNodes); }
function H3($attributes = [], $childNodes = []) { return new HTML\Element("h3", $attributes, $childNodes); }
function H4($attributes = [], $childNodes = []) { return new HTML\Element("h4", $attributes, $childNodes); }
function H5($attributes = [], $childNodes = []) { return new HTML\Element("h5", $attributes, $childNodes); }
function H6($attributes = [], $childNodes = []) { return new HTML\Element("h6", $attributes, $childNodes); }
function HEAD($attributes = [], $childNodes = []) { return new HTML\Element("head", $attributes, $childNodes); }
#function HEADER($attributes = [], $childNodes = []) { return new HTML\Element("header", $attributes, $childNodes); }
#function HR($attributes = [], $childNodes = []) { return new HTML\Element("hr", $attributes, $childNodes); }
function I($attributes = [], $childNodes = []) { return new HTML\Element("i", $attributes, $childNodes); }
function IFRAME($attributes = [], $childNodes = []) { return new HTML\Element("iframe", $attributes, $childNodes); }
#function IMG($attributes = [], $childNodes = []) { return new HTML\Element("img", $attributes, $childNodes); }
#function INPUT($attributes = [], $childNodes = []) { return new HTML\Element("input", $attributes, $childNodes); }
function INS($attributes = [], $childNodes = []) { return new HTML\Element("ins", $attributes, $childNodes); }
function KBD($attributes = [], $childNodes = []) { return new HTML\Element("kbd", $attributes, $childNodes); }
function LABEL($attributes = [], $childNodes = []) { return new HTML\Element("label", $attributes, $childNodes); }
function LEGEND($attributes = [], $childNodes = []) { return new HTML\Element("legend", $attributes, $childNodes); }
function LI($attributes = [], $childNodes = []) { return new HTML\Element("li", $attributes, $childNodes); }
#function LINK($attributes = [], $childNodes = []) { return new HTML\Element("link", $attributes, $childNodes); }
function MAIN($attributes = [], $childNodes = []) { return new HTML\Element("main", $attributes, $childNodes); }
function MAP($attributes = [], $childNodes = []) { return new HTML\Element("map", $attributes, $childNodes); }
function MARK($attributes = [], $childNodes = []) { return new HTML\Element("mark", $attributes, $childNodes); }
#function META($attributes = [], $childNodes = []) { return new HTML\Element("meta", $attributes, $childNodes); }
function METER($attributes = [], $childNodes = []) { return new HTML\Element("meter", $attributes, $childNodes); }
function NAV($attributes = [], $childNodes = []) { return new HTML\Element("nav", $attributes, $childNodes); }
function NOFRAMES($attributes = [], $childNodes = []) { return new HTML\Element("noframes", $attributes, $childNodes); }
function NOSCRIPT($attributes = [], $childNodes = []) { return new HTML\Element("noscript", $attributes, $childNodes); }
function OBJECT($attributes = [], $childNodes = []) { return new HTML\Element("object", $attributes, $childNodes); }
function OL($attributes = [], $childNodes = []) { return new HTML\Element("ol", $attributes, $childNodes); }
function OPTGROUP($attributes = [], $childNodes = []) { return new HTML\Element("optgroup", $attributes, $childNodes); }
function OPTION($attributes = [], $childNodes = []) { return new HTML\Element("option", $attributes, $childNodes); }
function OUTPUT($attributes = [], $childNodes = []) { return new HTML\Element("output", $attributes, $childNodes); }
function P($attributes = [], $childNodes = []) { return new HTML\Element("p", $attributes, $childNodes); }
#function PARAM($attributes = [], $childNodes = []) { return new HTML\Element("param", $attributes, $childNodes); }
function PICTURE($attributes = [], $childNodes = []) { return new HTML\Element("picture", $attributes, $childNodes); }
function PRE($attributes = [], $childNodes = []) { return new HTML\Element("pre", $attributes, $childNodes); }
function PROGRESS($attributes = [], $childNodes = []) { return new HTML\Element("progress", $attributes, $childNodes); }
function Q($attributes = [], $childNodes = []) { return new HTML\Element("q", $attributes, $childNodes); }
function RP($attributes = [], $childNodes = []) { return new HTML\Element("rp", $attributes, $childNodes); }
function RT($attributes = [], $childNodes = []) { return new HTML\Element("rt", $attributes, $childNodes); }
function RUBY($attributes = [], $childNodes = []) { return new HTML\Element("ruby", $attributes, $childNodes); }
function S($attributes = [], $childNodes = []) { return new HTML\Element("s", $attributes, $childNodes); }
function SAMP($attributes = [], $childNodes = []) { return new HTML\Element("samp", $attributes, $childNodes); }
function SCRIPT($attributes = [], $childNodes = []) { return new HTML\Element("script", $attributes, $childNodes); }
function SECTION($attributes = [], $childNodes = []) { return new HTML\Element("section", $attributes, $childNodes); }
function SELECT($attributes = [], $childNodes = []) { return new HTML\Element("select", $attributes, $childNodes); }
function SMALL($attributes = [], $childNodes = []) { return new HTML\Element("small", $attributes, $childNodes); }
function SOURCE($attributes = [], $childNodes = []) { return new HTML\Element("source", $attributes, $childNodes); }
function SPAN($attributes = [], $childNodes = []) { return new HTML\Element("span", $attributes, $childNodes); }
function STRIKE($attributes = [], $childNodes = []) { return new HTML\Element("strike", $attributes, $childNodes); }
function STRONG($attributes = [], $childNodes = []) { return new HTML\Element("strong", $attributes, $childNodes); }
function STYLE($attributes = [], $childNodes = []) { return new HTML\Element("style", $attributes, $childNodes); }
function SUB($attributes = [], $childNodes = []) { return new HTML\Element("sub", $attributes, $childNodes); }
function SUMMARY($attributes = [], $childNodes = []) { return new HTML\Element("summary", $attributes, $childNodes); }
function SUP($attributes = [], $childNodes = []) { return new HTML\Element("sup", $attributes, $childNodes); }
function SVG($attributes = [], $childNodes = []) { return new HTML\Element("svg", $attributes, $childNodes); }
function TABLE($attributes = [], $childNodes = []) { return new HTML\Element("table", $attributes, $childNodes); }
function TBODY($attributes = [], $childNodes = []) { return new HTML\Element("tbody", $attributes, $childNodes); }
function TD($attributes = [], $childNodes = []) { return new HTML\Element("td", $attributes, $childNodes); }
function TEMPLATE($attributes = [], $childNodes = []) { return new HTML\Element("template", $attributes, $childNodes); }
function TEXTAREA($attributes = [], $childNodes = []) { return new HTML\Element("textarea", $attributes, $childNodes); }
function TFOOT($attributes = [], $childNodes = []) { return new HTML\Element("tfoot", $attributes, $childNodes); }
function TH($attributes = [], $childNodes = []) { return new HTML\Element("th", $attributes, $childNodes); }
function THEAD($attributes = [], $childNodes = []) { return new HTML\Element("thead", $attributes, $childNodes); }
#function TIME($attributes = [], $childNodes = []) { return new HTML\Element("time", $attributes, $childNodes); }
function TITLE($attributes = [], $childNodes = []) { return new HTML\Element("title", $attributes, $childNodes); }
function TR($attributes = [], $childNodes = []) { return new HTML\Element("tr", $attributes, $childNodes); }
#function TRACK($attributes = [], $childNodes = []) { return new HTML\Element("track", $attributes, $childNodes); }
function TT($attributes = [], $childNodes = []) { return new HTML\Element("tt", $attributes, $childNodes); }
function U($attributes = [], $childNodes = []) { return new HTML\Element("u", $attributes, $childNodes); }
function UL($attributes = [], $childNodes = []) { return new HTML\Element("ul", $attributes, $childNodes); }
#function VAR($attributes = [], $childNodes = []) { return new HTML\Element("var", $attributes, $childNodes); }
function VIDEO($attributes = [], $childNodes = []) { return new HTML\Element("video", $attributes, $childNodes); }
#function WBR($attributes = [], $childNodes = []) { return new HTML\Element("wbr", $attributes, $childNodes); }
