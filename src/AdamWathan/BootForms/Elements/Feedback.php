<?php namespace AdamWathan\BootForms\Elements;

use AdamWathan\Form\Elements\Element;

class Feedback extends Element
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
        $this->addClass('form-control-feedback');
    }

    public function render()
    {
        $html = '<div';
        $html .= $this->renderAttributes();
        $html .= '>';
        $html .= $this->message;
        $html .= '</div>';

        return $html;
    }
}
