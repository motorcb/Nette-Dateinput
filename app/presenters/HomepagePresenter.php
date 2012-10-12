<?php

use Vodacek\Forms\Controls\DateInput;
use Nette\Application\UI\Form;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
        $this->template->anyVariable = 'any value';
    }

    protected function createComponentTaskForm()
    {
        $form = new Nette\Application\UI\Form();
               
        $form->addDate('date', 'Date', DateInput::TYPE_DATE)
                ->addRule(Form::FILLED, 'Je nutné zadat datum');
        $form->addDate('datetime', 'Datetime', DateInput::TYPE_DATETIME)
                ->addRule(Form::FILLED, 'Je nutné zadat datum');
        $form->addDate('datetimeLocal', 'Local datetime', DateInput::TYPE_DATETIME_LOCAL)
                ->addRule(Form::FILLED, 'Je nutné zadat datum');
        $form->addDate('month', 'Month', DateInput::TYPE_MONTH)
                ->addRule(Form::FILLED, 'Je nutné zadat datum');
        $form->addDate('week', 'Week', DateInput::TYPE_WEEK)
                ->addRule(Form::FILLED, 'Je nutné zadat datum');
        $form->addDate('time', 'Time', DateInput::TYPE_TIME)
                ->addRule(Form::FILLED, 'Je nutné zadat datum');
        $form->addSubmit('save', 'Save');
        
        return $form;
    }

}
