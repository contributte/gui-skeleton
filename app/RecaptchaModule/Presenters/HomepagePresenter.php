<?php declare(strict_types = 1);

namespace App\RecaptchaModule\Presenters;

use App\Presenters\BasePresenter;
use Contributte\Forms\IApplicationFormFactory;
use Contributte\Forms\Rendering\Bootstrap4VerticalRenderer;
use Nette\Application\UI\Form;

final class HomepagePresenter extends BasePresenter
{

	/** @var IApplicationFormFactory */
	private $formFactory;

	public function __construct(IApplicationFormFactory $formFactory)
	{
		parent::__construct();
		$this->formFactory = $formFactory;
	}

	protected function createComponentRecaptchaForm(): Form
	{
		$form = $this->formFactory->create();
		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addText('test', 'Test');

		//$form->addReCaptcha('recaptcha', $label = 'Captcha', $required = TRUE, $message = 'Are you bot?');
		$form->addReCaptcha('recaptcha', 'Captcha', true, 'Are you bot?');

		$form->addSubmit('send', 'Send');

		$form->onSuccess[] = function (Form $form) {
			dump($form->getValues());
			bdump($form->getValues());
		};

		return $form;
	}

	protected function createComponentHiddenElementRecaptchaForm(): Form
	{
		$form = $this->formFactory->create();
		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addText('test', 'Test');

		$form->addCheckbox('registered', 'I already have an account.')
			->addCondition(Form::EQUAL, false)
			->toggle('recaptcha');
		//$form->addReCaptcha('recaptcha', $label = 'Captcha', $required = TRUE, $message = 'Are you bot?');
		$form->addReCaptcha('recaptcha', 'Captcha', false)
			->setOption('id', 'recaptcha')
			->addConditionOn($form['registered'], Form::EQUAL, false)
			->setRequired();

		$form->addSubmit('send', 'Send');

		$form->onSuccess[] = function (Form $form) {
			dump($form->getValues());
			bdump($form->getValues());
		};

		return $form;
	}

	protected function createComponentInvisibleRecaptchaForm(): Form
	{
		$form = $this->formFactory->create();
		$form->setRenderer(new Bootstrap4VerticalRenderer());

		$form->addText('test', 'Test');

		//$form->addInvisibleReCaptcha('recaptcha', $required = TRUE, $message = 'Are you bot?');
		$form->addInvisibleReCaptcha('recaptcha', $required = false)
			->setMessage('Are you bot?');

		$form->addSubmit('send', 'Send');

		$form->onSuccess[] = function (Form $form) {
			dump($form->getValues());
			bdump($form->getValues());
		};

		return $form;
	}

}
