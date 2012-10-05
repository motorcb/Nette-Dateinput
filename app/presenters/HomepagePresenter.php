<?php

use Vodacek\Forms\Controls\DateInput;

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
        $form->addDate('date', 'Date', DateInput::TYPE_DATE);
        $form->addDate('datetime', 'Datetime', DateInput::TYPE_DATETIME);
        $form->addDate('datetimeLocal', 'Local datetime', DateInput::TYPE_DATETIME_LOCAL);
        $form->addDate('month', 'Month', DateInput::TYPE_MONTH);
        $form->addDate('week', 'Week', DateInput::TYPE_WEEK);
        $form->addDate('time', 'Time', DateInput::TYPE_TIME);
        $form->addSubmit('save', 'Save');
        
        return $form;
    }

}
