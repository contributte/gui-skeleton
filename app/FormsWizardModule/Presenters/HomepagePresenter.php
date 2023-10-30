<?php declare(strict_types = 1);

namespace App\FormsWizardModule\Presenters;

use App\Presenters\BasePresenter;
use Contributte\FormWizard\Wizard;
use Nette\DI\Attributes\Inject;

final class HomepagePresenter extends BasePresenter
{

	#[Inject]
	public Wizard $wizard;

	public function handleChangeStep(int $step): void
	{
		$this['wizard']->setStep($step);

		$this->redirect('wizard'); // Optional, hides parameter from URL
	}

	protected function createComponentWizard(): Wizard
	{
		return $this->wizard;
	}

}
