<?php declare(strict_types = 1);

namespace App\Presenters;

use Nette\Application\UI\Presenter;

abstract class BasePresenter extends Presenter
{

	/** @return array<string> */
	public function formatLayoutTemplateFiles(): array
	{
		$files = parent::formatLayoutTemplateFiles();
		$files[] = __DIR__ . '/templates/@layout.latte';

		return $files;
	}

}
