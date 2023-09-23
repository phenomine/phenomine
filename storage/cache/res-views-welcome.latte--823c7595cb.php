<?php

use Latte\Runtime as LR;

/** source: /Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../..//res/views/welcome.latte */
final class Template823c7595cb extends Latte\Runtime\Template
{
	public const Source = '/Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../..//res/views/welcome.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Framework</title>
</head>

<body>
    <h1>';
		echo LR\Filters::escapeHtmlText($text) /* line 11 */;
		echo '</h1>
</body>

</html>';
	}
}
