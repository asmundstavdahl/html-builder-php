<?php

/**
 * Functions for each HTML element.
 *
 * Note: some element names collide with PHP built-ins; such tags are suffixed with "_tag", e.g. DIR_tag
 */

require_once __DIR__ . "/HtmlRootElement.php";
require_once __DIR__ . "/TextNode.php";
require_once __DIR__ . "/Element.php";
require_once __DIR__ . "/ElementWithoutEndTag.php";

function HTML(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\HtmlRootElement($attributes, $childNodes);
}

/**
 * Just a plain text node; not an HTML element.
 */
function TEXT(string $text): HTML\Node
{
    return new HTML\TextNode($text);
}

/**
 * Elements with no end tags, found by `wget -qO- https://html.spec.whatwg.org | grep -B2 "No <[^>]*>end tag" | grep -o "<code>[^<]*</code>"`.
 *
 * @see https://html.spec.whatwg.org/ search for "No end tag"
 */
//
function BASE_tag(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("base", $attributes);
}
function LINK_tag(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("link", $attributes);
}
function MASK(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("mask", $attributes);
}
function META(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("meta", $attributes);
}
function HR(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("hr", $attributes);
}
function BR(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("br", $attributes);
}
function WBR(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("wbr", $attributes);
}
function IMG(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("img", $attributes);
}
function PARAM(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("param", $attributes);
}
function TRACK(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("track", $attributes);
}
function AREA_tag(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("area", $attributes);
}
function INPUT(array $attributes = []): HTML\Node
{
    return new HTML\ElementWithoutEndTag("input", $attributes);
}

/**
 * Normal elements follow.
 */
//
function A(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("a", $attributes, $childNodes);
}
function ABBR(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("abbr", $attributes, $childNodes);
}
function ACRONYM(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("acronym", $attributes, $childNodes);
}
function ADDRESS(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("address", $attributes, $childNodes);
}
function APPLET(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("applet", $attributes, $childNodes);
}
function AREA(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("area", $attributes, $childNodes);
}
function ARTICLE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("article", $attributes, $childNodes);
}
function ASIDE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("aside", $attributes, $childNodes);
}
function AUDIO(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("audio", $attributes, $childNodes);
}
function B(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("b", $attributes, $childNodes);
}
function BASE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("base", $attributes, $childNodes);
}
function BASEFONT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("basefont", $attributes, $childNodes);
}
function BDI(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("bdi", $attributes, $childNodes);
}
function BDO(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("bdo", $attributes, $childNodes);
}
function BIG(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("big", $attributes, $childNodes);
}
function BLOCKQUOTE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("blockquote", $attributes, $childNodes);
}
function BODY(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("body", $attributes, $childNodes);
}
#function BR(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("br", $attributes, $childNodes); }
function BUTTON(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("button", $attributes, $childNodes);
}
function CANVAS(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("canvas", $attributes, $childNodes);
}
function CAPTION(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("caption", $attributes, $childNodes);
}
function CENTER(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("center", $attributes, $childNodes);
}
function CITE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("cite", $attributes, $childNodes);
}
function CODE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("code", $attributes, $childNodes);
}
function COL(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("col", $attributes, $childNodes);
}
function COLGROUP(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("colgroup", $attributes, $childNodes);
}
function DATA(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("data", $attributes, $childNodes);
}
function DATALIST(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("datalist", $attributes, $childNodes);
}
function DD(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("dd", $attributes, $childNodes);
}
function DEL(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("del", $attributes, $childNodes);
}
function DETAILS(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("details", $attributes, $childNodes);
}
function DFN(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("dfn", $attributes, $childNodes);
}
function DIALOG(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("dialog", $attributes, $childNodes);
}
function DIR_tag(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("dir", $attributes, $childNodes);
}
function DIV(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("div", $attributes, $childNodes);
}
function DL_tag(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("dl", $attributes, $childNodes);
}
function DT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("dt", $attributes, $childNodes);
}
function EM(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("em", $attributes, $childNodes);
}
function EMBED(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("embed", $attributes, $childNodes);
}
function FIELDSET(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("fieldset", $attributes, $childNodes);
}
function FIGCAPTION(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("figcaption", $attributes, $childNodes);
}
function FIGURE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("figure", $attributes, $childNodes);
}
function FONT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("font", $attributes, $childNodes);
}
function FOOTER(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("footer", $attributes, $childNodes);
}
function FORM(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("form", $attributes, $childNodes);
}
function FRAME(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("frame", $attributes, $childNodes);
}
function FRAMESET(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("frameset", $attributes, $childNodes);
}
function H1(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("h1", $attributes, $childNodes);
}
function H2(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("h2", $attributes, $childNodes);
}
function H3(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("h3", $attributes, $childNodes);
}
function H4(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("h4", $attributes, $childNodes);
}
function H5(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("h5", $attributes, $childNodes);
}
function H6(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("h6", $attributes, $childNodes);
}
function HEAD(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("head", $attributes, $childNodes);
}
#function HEADER(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("header", $attributes, $childNodes); }
#function HR(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("hr", $attributes, $childNodes); }
function I(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("i", $attributes, $childNodes);
}
function IFRAME(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("iframe", $attributes, $childNodes);
}
#function IMG(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("img", $attributes, $childNodes); }
#function INPUT(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("input", $attributes, $childNodes); }
function INS(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("ins", $attributes, $childNodes);
}
function KBD(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("kbd", $attributes, $childNodes);
}
function LABEL(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("label", $attributes, $childNodes);
}
function LEGEND(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("legend", $attributes, $childNodes);
}
function LI(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("li", $attributes, $childNodes);
}
#function LINK(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("link", $attributes, $childNodes); }
function MAIN(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("main", $attributes, $childNodes);
}
function MAP(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("map", $attributes, $childNodes);
}
function MARK(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("mark", $attributes, $childNodes);
}
#function META(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("meta", $attributes, $childNodes); }
function METER(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("meter", $attributes, $childNodes);
}
function NAV(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("nav", $attributes, $childNodes);
}
function NOFRAMES(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("noframes", $attributes, $childNodes);
}
function NOSCRIPT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("noscript", $attributes, $childNodes);
}
function OBJECT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("object", $attributes, $childNodes);
}
function OL(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("ol", $attributes, $childNodes);
}
function OPTGROUP(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("optgroup", $attributes, $childNodes);
}
function OPTION(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("option", $attributes, $childNodes);
}
function OUTPUT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("output", $attributes, $childNodes);
}
function P(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("p", $attributes, $childNodes);
}
#function PARAM(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("param", $attributes, $childNodes); }
function PICTURE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("picture", $attributes, $childNodes);
}
function PRE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("pre", $attributes, $childNodes);
}
function PROGRESS(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("progress", $attributes, $childNodes);
}
function Q(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("q", $attributes, $childNodes);
}
function RP(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("rp", $attributes, $childNodes);
}
function RT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("rt", $attributes, $childNodes);
}
function RUBY(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("ruby", $attributes, $childNodes);
}
function S(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("s", $attributes, $childNodes);
}
function SAMP(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("samp", $attributes, $childNodes);
}
function SCRIPT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("script", $attributes, $childNodes);
}
function SECTION(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("section", $attributes, $childNodes);
}
function SELECT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("select", $attributes, $childNodes);
}
function SMALL(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("small", $attributes, $childNodes);
}
function SOURCE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("source", $attributes, $childNodes);
}
function SPAN(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("span", $attributes, $childNodes);
}
function STRIKE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("strike", $attributes, $childNodes);
}
function STRONG(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("strong", $attributes, $childNodes);
}
function STYLE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("style", $attributes, $childNodes);
}
function SUB(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("sub", $attributes, $childNodes);
}
function SUMMARY(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("summary", $attributes, $childNodes);
}
function SUP(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("sup", $attributes, $childNodes);
}
function SVG(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("svg", $attributes, $childNodes);
}
function TABLE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("table", $attributes, $childNodes);
}
function TBODY(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("tbody", $attributes, $childNodes);
}
function TD(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("td", $attributes, $childNodes);
}
function TEMPLATE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("template", $attributes, $childNodes);
}
function TEXTAREA(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("textarea", $attributes, $childNodes);
}
function TFOOT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("tfoot", $attributes, $childNodes);
}
function TH(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("th", $attributes, $childNodes);
}
function THEAD(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("thead", $attributes, $childNodes);
}
#function TIME(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("time", $attributes, $childNodes); }
function TITLE(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("title", $attributes, $childNodes);
}
function TR(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("tr", $attributes, $childNodes);
}
#function TRACK(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("track", $attributes, $childNodes); }
function TT(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("tt", $attributes, $childNodes);
}
function U(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("u", $attributes, $childNodes);
}
function UL(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("ul", $attributes, $childNodes);
}
#function VAR(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("var", $attributes, $childNodes); }
function VIDEO(array $attributes = [], array $childNodes = []): HTML\Node
{
    return new HTML\Element("video", $attributes, $childNodes);
}
#function WBR(array $attributes = [], array $childNodes = []) : HTML\Node { return new HTML\Element("wbr", $attributes, $childNodes); }
