<?php declare(strict_types = 1);

namespace App\FormsWizardModule\Forms;

use Contributte\Forms\Rendering\Bootstrap4VerticalRenderer;
use Contributte\FormWizard\Wizard;
use Nette\Application\UI\Form;

class FooWizard extends Wizard
{

	/** @var array|string[] */
	private array $stepNames = [
		1 => 'Skip username',
		2 => 'Username',
		3 => 'Email',
	];

	/**
	 * @return array<string, mixed>
	 */
	public function getStepData(int $step): array
	{
		return [
			'name' => $this->stepNames[$step],
		];
	}

	protected function finish(): void
	{
		$values = $this->getValues();
		bdump($values);
	}

	protected function startup(): void
	{
		$this->skipStepIf(2, fn (array $values): bool => isset($values[1]) && $values[1]['skip'] === true);
		$this->setDefaultValues(2, function (Form $form, array $values): void {
			$data = [
				'username' => 'john_doe',
			];
			$form->setDefaults($data);
		});
	}

	protected function createStep1(): Form
	{
		$form = $this->createForm();

		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addCheckbox('skip', 'Skip username');

		$form->addSubmit(self::NEXT_SUBMIT_NAME, 'Next');

		return $form;
	}

	protected function createStep2(): Form
	{
		$form = $this->createForm();

		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addText('username', 'Username')
			->setRequired();

		$form->addSubmit(self::PREV_SUBMIT_NAME, 'Back');
		$form->addSubmit(self::NEXT_SUBMIT_NAME, 'Next');

		return $form;
	}

	protected function createStep3(): Form
	{
		$form = $this->createForm();

		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addText('email', 'Email')
			->setRequired();

		$form->addSubmit(self::PREV_SUBMIT_NAME, 'Back');
		$form->addSubmit(self::FINISH_SUBMIT_NAME, 'Register');

		return $form;
	}

}
