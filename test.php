<?php

require_once __DIR__."/elements.php";
require_once __DIR__."/HtmlConfig.php";

$nodeTree = HTML(["lang" => "en"],
	[ HEAD([],
		[ SCRIPT(["type" => "text/javascript"], [""])
		, STYLE([], ["h1 { color: lightblue; }"])
		])
	, BODY(["onload" => "alert('body.onload with a <test> \\'of \"escapement\"')"],
		[ H1([], ["This is a test"])
		, P([],
			[ TEXT("Irure velit in velit proident qui ullamco aliquip ex sint irure sint excepteur nulla amet veniam do.")
			, BR()
			, BR()
			, TEXT("Esse elit ad culpa non enim amet nisi magna quis ad pariatur et id sed elit minim sed.")
			])
		, LABEL(["for" => "test_input"], ["Test input"])
		, INPUT(["id" => "test_input", "type" => "text"], [])
		, DIV([], [])
		])
	]);

$htmlConfig = new HtmlConfig();

echo $nodeTree->toHTML($htmlConfig);
