<?php
class SimplaFormHelper extends FormHelper
{
    private $__default_simpla = array('div' => array('tag' => 'p'));

    function input_small($fieldName, $options = array())
    {
        $simpla = array('class' => 'text-input small-input');
        $opt = array_merge($this->__default_simpla, $simpla, $options);
        return parent::input($fieldName, $opt);
    }

    function input_medium($fieldName, $options = array())
    {
        $simpla = array('class' => 'text-input medium-input');
        $opt = array_merge($this->__default_simpla, $simpla, $options);
        return parent::input($fieldName, $opt);
    }

    function input_large($filedName, $options = array())
    {
        $simpla = array('class' => 'text-input large-input');
        $opt = array_merge($this->__default_simpla, $simpla, $options);
        return parent::input($filedName, $opt);
    }

    function checkbox($fieldName, $options = array())
    {
        $opt = array_merge($this->__default_simpla, $options);
        return parent::checkbox($fieldName, $opt);
    }

    function radio($fieldName, $options = array(), $attributes = array())
    {
        $opt = array_merge($this->__default_simpla, $options);
        return parent::radio($fieldName, $opt, $attributes);
    }

    function select($fieldName, $options = array(), $selected = null, $attributes = array())
    {
        $simpla = array('class' => 'large-input');
        $opt = array_merge($this->__default_simpla, $simpla, $attributes);
        return parent::select($fieldName, $options, $selected, $opt);
    }

    function wysiwyg($fieldName, $options = array())
    {
        $simpla = array('class' => 'text-input textarea wysiwyg');
        $opt = array_merge($this->__default_simpla, $simpla, $options);
        return parent::textarea($fieldName, $opt);
    }

    function error($field, $text = null, $options = array())
    {
        $simpla = array('wrap' => 'span', 'class' => 'input-notification error png_bg');
        $opt = array_merge($simpla, $options);
        return parent::error($field, $text, $opt);
    }

    function end($options = null)
    {
        $simpla = array('class' => 'button');
        if($options != null)
        {
            $opt = array_merge($this->__default_simpla, $simpla, $options);
        }
        else
        {
            $opt = array_merge($this->__default_simpla, $simpla);
        }
        return parent::end($opt);
    }
}
?>