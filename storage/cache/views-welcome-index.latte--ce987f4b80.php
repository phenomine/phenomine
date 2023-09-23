<?php

use Latte\Runtime as LR;

/** source: /Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../../res/views/welcome/index.latte */
final class Templatece987f4b80 extends Latte\Runtime\Template
{
	public const Source = '/Users/fahli/Documents/Projects/phenomine/vendor/phenomine/framework/src/Phenomine/../../../../../res/views/welcome/index.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 4 */;
		echo "\n";
		$this->renderBlock('item', [], 'html') /* line 8 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->createTemplate('layouts.app', $this->params, "import")->render() /* line 1 */;
		$this->createTemplate('block', $this->params, "import")->render() /* line 2 */;
		return get_defined_vars();
	}


	/** {block content} on line 4 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <h1>';
		echo LR\Filters::escapeHtmlText($text) /* line 5 */;
		echo '</h1>
';
	}
}
