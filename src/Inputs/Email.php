<?php

namespace Garung\ContactForm\Inputs;

use Garung\ContactForm\Abstracts\Input;
use NightFury\Form\Facades\Form;

class Email extends Input
{
    /**
     * {@inheritDoc}
     */
    public $type = Input::EMAIL;

    /**
     * {@inheritDoc}
     */
    public $label = '';

    /**
     * {@inheritDoc}
     */
    public $name = '';

    /**
     * {@inheritDoc}
     */
    public $description = '';

    /**
     * {@inheritDoc}
     */
    public $required = false;

    /**
     * {@inheritDoc}
     * @var array
     */
    public $attributes = [];

    public function render()
    {
        $value = get_option($this->name, '');
        $html = '';
        if($this->label !== '') {
            $html .= Form::label($this->name, $this->label, ['class' => 'nfmodule-label-' . $this->name]);
        }
        if($this->required) {
            array_add($this->attributes, 'required', $this->required);
        }
        $html .= Form::email($this->name, $value, $this->attributes);
        return $html;
    }

    public function renderMetaField()
    {
        $value = get_option($this->name, '');
        $html = '';
        if($this->label !== '') {
            $html .= Form::label($this->name, $this->label, ['class' => 'nfmodule-label-' . $this->name]);
        }
        if($this->required) {
            array_add($this->attributes, 'required', $this->required);
        }
        $html .= Form::email($this->name, $value, $this->attributes);
        return $html;
    }
}
