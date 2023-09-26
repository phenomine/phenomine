<?php

use Latte\Runtime as LR;

/** source: D:\OpenSource\Phenomine\Repo\phenomine\vendor\phenomine\framework\src\Phenomine\Support/../views/errors/layouts/error.latte.php */
final class Template091cd5ea83 extends Latte\Runtime\Template
{
	public const Source = 'D:\\OpenSource\\Phenomine\\Repo\\phenomine\\vendor\\phenomine\\framework\\src\\Phenomine\\Support/../views/errors/layouts/error.latte.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>';
		$this->renderBlock('text', [], 'html') /* line 7 */;
		echo '</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            min-height: 100vh;
        }
        .text-large {
            font-size: 1.25rem;
        }
        .d-flex {
            display: flex;
        }
        .justify-content-center {
            justify-content: center;
        }
        .me-1 {
            margin-right: 0.25rem;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 1rem;
        }
        .text-muted {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <p class="text-muted text-large">
            <span class="me-1"><b>';
		$this->renderBlock('code', [], 'html') /* line 43 */;
		echo '</b></span>
            <span>';
		$this->renderBlock('text', [], 'html') /* line 44 */;
		echo '</span>
        </p>
    </div>
</body>

</html>';
	}
}
