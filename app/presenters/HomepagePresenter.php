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
        $form->onSuccess[] = $this->formSubmitted;
        $form->addSubmit('save', 'Save');
        
        return $form;
    }
    
    public function formSubmitted(Form $form)
    {
        $values = $form->getValues(TRUE); // same as: (array) $form->values;
        foreach( $values as $value )
        {
            //echo date("j.n.Y H:i:s",$value)."<br/>\n";
            echo $value->format("j.n.Y H:i:s")."<br/>\n";
        }
    }

}
