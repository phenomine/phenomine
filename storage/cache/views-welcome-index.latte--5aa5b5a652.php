<?php

use Latte\Runtime as LR;

/** source: /Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../..//res/views/welcome/index.latte */
final class Template5aa5b5a652 extends Latte\Runtime\Template
{
	public const Source = '/Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../..//res/views/welcome/index.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->createTemplate('layout.app', $this->params, "import")->render() /* line 1 */;
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <h1>';
		echo LR\Filters::escapeHtmlText($text) /* line 4 */;
		echo '</h1>
';
	}
}
