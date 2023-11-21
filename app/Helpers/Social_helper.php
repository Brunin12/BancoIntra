<?php
if (!function_exists('social')) {
    function social($name = '', $slogan = '', $image = '', $class = 'info', $info = array('label' => '', 'value' => '', 'label2' => '', 'value2' => '', 'label3' => '', 'value3' => ''))
    {
        return view('default/components/widgets/social', [
            'name' => $name,
            'slogan' => $slogan,
            'image' => $image,
            'class' => $class,
            'info' => $info,

        ]);
    }
}
