<?php

use Latte\Runtime as LR;

/** source: D:\OpenSource\Phenomine\Repo\phenomine\vendor\phenomine\framework\src\Phenomine\Support/../views/errors/404.latte.php */
final class Templatea208d66bd9 extends Latte\Runtime\Template
{
	public const Source = 'D:\\OpenSource\\Phenomine\\Repo\\phenomine\\vendor\\phenomine\\framework\\src\\Phenomine\\Support/../views/errors/404.latte.php';

	public const Blocks = [
		['code' => 'blockCode', 'text' => 'blockText'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('code', get_defined_vars()) /* line 3 */;
		echo "\n";
		$this->renderBlock('text', get_defined_vars()) /* line 4 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = 'errors.layouts.error';
		return get_defined_vars();
	}


	/** {block code} on line 3 */
	public function blockCode(array $ʟ_args): void
	{
		echo ' 404 ';
	}


	/** {block text} on line 4 */
	public function blockText(array $ʟ_args): void
	{
		echo ' Not Found ';
	}
}
