<?php
class SimplaBoxesHelper extends HtmlHelper
{
    function clear()
    {
        return '<div class="clear"></div>'.NL;
    }

    function start_content_box($name = '', $closed = false, $column = 'none', $disable_closing = false)
    {
        $classes = array();
        array_push($classes, 'content-box');
        if($closed == true)
        {
            array_push($classes, 'closed-box');
        }
        switch($column)
        {
            case 'left':
                array_push($classes, 'column-left');
                break;
            case 'right':
                array_push($classes, 'column-right');
                break;
            case 'center':
                array_push($classes, 'column-center');
                break;
            default:
            case 'none':
                //nothing
                break;
        }
        if($disable_closing == true)
        {
            array_push($classes, 'disable-closing');
        }

        $classes = implode(' ', $classes);
        $out = '<div class="'.$classes.'">'.NL;
        $out .= '<div class="content-box-header">'.NL;
        $out .= '    <h3>'.$name.'</h3>'.NL;
        $out .= '</div>'.NL;
        return $out;
    }

    function start_content_box_center($name ='', $closed = false, $disable_closing = false)
    {
        return $this->start_content_box($name, $closed, 'center', $disable_closing);
    }

    function start_content_box_left($name = '', $closed = false, $disable_closing = false)
    {
        return $this->start_content_box($name, $closed, 'left', $disable_closing);
    }

    function start_content_box_right($name = '', $closed = false, $disable_closing = false)
    {
        return $this->start_content_box($name, $closed, 'right', $disable_closing);
    }

    function start_content_tab( $default = false)
    {
        $out = '<div class="content-box-content">'.NL;
        if($default == true)
        {
            $out .= '   <div class="tab-content default-tab">'.NL;
        }
        else
        {
            $out .= '   <div class="tab-content">'.NL;
        }
        return $out;
    }

    function end_content_tab()
    {
       $out = ' </div>'.NL;
       $out .= '</div>'.NL;
       return $out;
    }

    function end_content_box()
    {
        return '</div>'.NL;
    }

    function message($text = null, $type = 'information')
    {
        $types = array('attention', 'information', 'success', 'error');
        if(!in_array($type, $types))
        {
            $type = 'information';
        }

        $out = '<div class="notification '.$type.' png_bg">';
        $out .= '<a href="#" class="close">';
        $out .= $this->image('admin/icons/cross_grey_small.png', array('title' => __('Zavři toto upozornění', true), 'alt' => __('Zavři', true)));
        $out .= '</a>';
        $out .= '<div>';
        $out .= $text;
        $out .= '</div>';
        $out .= '</div>';
        return $out;
    }

    function sAttention($text)
    {
        return $this->message($text, 'attention');
    }

    function sInformation($text)
    {
        return $this->message($text, 'information');
    }

    function sSuccess($text)
    {
        return $this->message($text, 'success');
    }

    function sError($text)
    {
        return $this->message($text, 'error');
    }
}
?>