<?php declare(strict_types = 1);

namespace App\LiveFormValidationModule\Presenters;

use App\Presenters\BasePresenter;
use Contributte\Forms\IApplicationFormFactory;
use Contributte\Forms\Rendering\Bootstrap4VerticalRenderer;
use Nette\Application\UI\Form;

final class HomepagePresenter extends BasePresenter
{

	private IApplicationFormFactory $formFactory;

	public function __construct(IApplicationFormFactory $formFactory)
	{
		parent::__construct();

		$this->formFactory = $formFactory;
	}

	protected function createComponentLiveValidateExampleForm(): Form
	{
		$form = $this->formFactory->create();
		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addText('name', 'Name:')
			->setRequired();

		$form->addPassword('password', 'Password:')
			->setRequired()
			->addRule(Form::MIN_LENGTH, 'Password must bea at least %d characters long', 6);

		$form->addPassword('passwordVerify', 'Password again:')
			->setRequired('Please set the password again for check')
			->addRule(Form::EQUAL, 'Passwords are not equal', $form['password']);

		$form->addSubmit('signup', 'Sign up');

		$form->onSuccess[] = function (Form $form): void {
			dump($form->getValues());
			bdump($form->getValues());
		};

		return $form;
	}

}
