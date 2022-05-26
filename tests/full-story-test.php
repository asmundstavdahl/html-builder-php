<?php

namespace AsmundStavdahl\HTML;

require_once __DIR__ . "/../vendor/autoload.php";

// Autoload functions
new Elements;

$nodeTree = HTML(
	["lang" => "en"],
	[
		HEAD(
			[],
			[
				TITLE([], ["Test of html-builder"]), SCRIPT(["type" => "text/javascript"], [
					"function jsTest() {
				return 'Hello from script tag.'
			}"
				]), STYLE([], ["h1 { color: lightblue; }"])
			]
		), BODY(
			["onload" => "alert('body.onload with a <test> \\'of \"escapement\". ' + jsTest())"],
			[
				H1([], ["This is a test"]), P(
					[],
					[
						TEXT("Irure velit in velit proident qui ullamco aliquip ex sint irure sint excepteur nulla amet veniam do."), BR(), BR(), "Esse elit ad culpa non enim amet nisi magna quis ad pariatur et id sed elit minim sed."
					]
				), H1(
					[],
					[
						CODE(
							[],
							[
								"kode", B([], ["klubben"])
							]
						)
					]
				), TABLE(
					[],
					[
						TR(
							[],
							[
								TH(
									[],
									[
										TEXT("Author's name")
									]
								)
							]
						), TR(
							[],
							[
								TD(
									[],
									[
										TEXT("Åsmund,"), "Åsmund,"
									]
								)
							]
						)
					]
				), LABEL(["for" => "test_input"], ["Test input"]), INPUT(["id" => "test_input", "type" => "text"], []), DIV([], [])
			]
		)
	]
);

$htmlConfig = new HtmlConfig(true, "\t");
$html = $nodeTree->toHTML($htmlConfig);
$expectedHtml = <<<EOF
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Test of html-builder
		</title>
		<script type="text/javascript">
			function jsTest() {
				return 'Hello from script tag.'
			}
		</script>
		<style>
			h1 { color: lightblue; }
		</style>
	</head>
	<body onload="alert('body.onload with a &lt;test&gt; \'of &quot;escapement&quot;. ' + jsTest())">
		<h1>
			This is a test
		</h1>
		<p>
			Irure velit in velit proident qui ullamco aliquip ex sint irure sint excepteur nulla amet veniam do&period;
			<br>
			<br>
			Esse elit ad culpa non enim amet nisi magna quis ad pariatur et id sed elit minim sed.
		</p>
		<h1>
			<code>kode<b>klubben</b></code>
		</h1>
		<table>
			<tr>
				<th>
					Author&apos;s name
				</th>
			</tr>
			<tr>
				<td>
					&Aring;smund&comma;Åsmund,
				</td>
			</tr>
		</table>
		<label for="test_input">Test input</label><input id="test_input" type="text">
		<div></div>
	</body>
</html>
EOF;

$ok = assert($html == $expectedHtml);

if (!$ok) {
	$htmlLines = explode("\n", $html);
	$expectedLines = explode("\n", $expectedHtml);

	foreach ($expectedLines as $lineNumber => $line) {
		if ($htmlLines[$lineNumber] != $expectedLines[$lineNumber]) {
			echo "On line " . ($lineNumber + 1) . ":\n"
				. "  expected:\n"
				. @$expectedLines[$lineNumber] . "\n"
				. "  but got:\n"
				. @$htmlLines[$lineNumber] . "\n";
		}
	}

	echo "Full HTML:\n{$html}\n";
}
