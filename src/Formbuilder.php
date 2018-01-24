<?php

namespace BlackBits\Formbuilder;

use Illuminate\Support\HtmlString;


class Formbuilder
{
    protected function toHtmlString($html)
    {
        return new HtmlString($html);
    }


    public function title($title, $heading = 'h2')
    {
        return $this->toHtmlString(view('formbuilder::form-title', compact([ 'title', 'heading' ])));
    }

    public function open($action, $method = 'post')
    {
        return $this->toHtmlString(view('formbuilder::form-open', compact([ 'action', 'method' ])));
    }

    public function close()
    {
        return $this->toHtmlString(view('formbuilder::form-close'));
    }

    public function text($name, $value, $label, $placeholder = "", $readonly = false, $disabled = false)
    {
        return $this->toHtmlString(view('formbuilder::form-text', compact([ 'name', 'value', 'label', 'placeholder', 'readonly', 'disabled' ])));
    }

    public function email($name, $value, $label, $placeholder = "", $readonly = false, $disabled = false)
    {
        return $this->toHtmlString(view('formbuilder::form-email', compact([ 'name', 'value', 'label', 'placeholder', 'readonly', 'disabled' ])));
    }

    public function password($name, $value, $label, $placeholder = "", $readonly = false, $disabled = false)
    {
        return $this->toHtmlString(view('formbuilder::form-password', compact([ 'name', 'value', 'label', 'placeholder', 'readonly', 'disabled' ])));
    }
    
    public function buttons($cancelAction = null, $cancelLabel = 'Cancel', $submitLabel = 'Save')
    {
        return $this->toHtmlString(view('formbuilder::form-buttons', compact([ 'cancelAction', 'cancelLabel', 'submitLabel' ])));
    }
}