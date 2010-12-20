<?php
class MenuHelper extends AppHelper
{
    public $helpers = array('Html');
    /**
     *
     * @param string $title Titulek k linku
     * @param array() $url Pole, stejné jako se používá u normálního Html::link z CakePHP
     * @param boolean $is_toplink Je link "hlavní"?
     * @param boolean $have_submenu Má link nějaké sublinky?
     *
     */
    function link($title = '', $url = array(), $options = array())
    {
        $classes = array();
        $escape = true;

        if(isset($options['toplink']) && $options['toplink'] == true)
        {
            array_push($classes,'nav-top-item');
            if(isset($options['singlelink']) && $options['singlelink'] == true)
            {
                array_push($classes, 'no-submenu');
            }
        }
        
        if($this->url() == $this->url($url) || (!isset($url['action']) && $this->params['controller'] == $url['controller']))
        {
            array_push($classes, 'current');
        }
        
            
        if(isset($options['toplink']) && $options['toplink'] == true && $this->__is_child($url))
        {
            array_push($classes, 'current');
        }

        if(isset($options['escape']) && $options['escape'] == false)
        {
            $escape = $options['escape'];
        }

        if(isset($options['class']))
        {
            array_push($classes, $options['class']);
        }

        $classes = implode(' ', $classes);

        return $this->Html->link($title, $url, array('class' => $classes, 'escape' => $escape));
    }

    function image_link($image = '', $title = '', $url = array())
    {
        return $this->link($this->Html->tag('span',$this->Html->image($image).'<br />'.$title), $url, array('have_submenus' => false, 'class' => 'shortcut-button', 'escape' => false));
    }

    //************* privátní funkce ******************//

    private function __is_child($url = array())
    {
        //TODO: nějaký sofistikovanější způsob určování podmenu, až bude menu generované z DB

        //pokud je aktuální URL dítětem předávaného URL (v menu) tak vrátím true, jinak false

        $parents = array(
            '/admin/web_settings' => array('/admin/acos'),
            '/transportations' => array('/orders', '/trains', '/routes'),
            '/routes' => array('/stations', '/paths'),
            '/employees' => array('/employees', '/employees/engine-drivers-index', '/roles'),
            '/railcars' => array('/locomotives', 'cargo_wagons'),
            '/settings' => array('/users/change_password'),
            '/web_settings' => array('acos')
        );
        $tmp = $this->url();
        $tmp = explode('/', $tmp);
        if(count($tmp) > 3)
        {
            $cur_url = '/'.$tmp[1].'/'.$tmp[2];
        }
        else
        {
            $cur_url = $this->url();
        }
        //debug($cur_url);
        if(isset($parents[$this->url($url)]) && in_array($this->url($cur_url),$parents[$this->url($url)]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>