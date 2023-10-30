<?php declare(strict_types = 1);

namespace App\FormsBootstrapModule\Presenters;

use App\Presenters\BasePresenter;
use Contributte\FormsBootstrap\BootstrapForm;
use Contributte\FormsBootstrap\BootstrapRenderer;
use Contributte\FormsBootstrap\Enums\DateTimeFormat;
use Nette\Application\Attributes\Persistent;

final class HomepagePresenter extends BasePresenter
{

	#[Persistent]
	public int $mode = 0;

	protected function createComponentExampleForm(): BootstrapForm
	{
		$form = new BootstrapForm();
		$form->setHtmlAttribute('novalidate');
		$form->setRenderer(new BootstrapRenderer($this->mode));
		$form->addText('name', 'Name')->setRequired();
		$form->addEmail('email', 'Email')->setRequired();
		$form->addDateTime('birthdate', 'Birth date')->setFormat(DateTimeFormat::D_DMY_DOTS);
		$form->addSelect('gender', 'Gender', ['Male', 'Female', 'Other'])->setPrompt('Choose');

		$form->addCheckboxList('hobies', 'Hobies', ['books', 'sport', 'news', 'fun']);
		$form->addMultiSelect('sports', 'Favorite sports', ['Footbal', 'Basketball', 'Handball', 'Volleyball']);
		$form->addRadioList('movies', 'Favorite movies', ['Comedy', 'Action', 'Crime', 'Drama', 'Horor']);

		$form->addCheckbox('confirm', 'Confirm everything correct');

		$parentRow = $form->addRow();
		$parentRow->addCell(6)->addSubmit('cancel', 'Cancel')->setBtnClass('btn-danger');
		$submitCell = $parentRow->addCell(6)->addHtmlClass('inline-buttons');
		$submitCell->addSubmit('submit', 'Submit')->setBtnClass('btn-success');
		$submitCell->addSubmit('random', 'Do random stuff')->setBtnClass('btn-secondary');
		$submitCell->addSubmit('save', 'Save for later')->setBtnClass('btn-info');

		return $form;
	}

}
