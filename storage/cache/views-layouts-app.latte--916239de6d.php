<?php

use Latte\Runtime as LR;

/** source: /Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../../res/views/layouts/app.latte */
final class Template916239de6d extends Latte\Runtime\Template
{
	public const Source = '/Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../../res/views/layouts/app.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


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
';
		$this->renderBlock('content', get_defined_vars()) /* line 11 */;
		echo '</body>

</html>';
	}


	/** {block content } on line 11 */
	public function blockContent(array $ʟ_args): void
	{
	}
}
