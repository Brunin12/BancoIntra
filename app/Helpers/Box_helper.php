<?php
if (!function_exists('box')) {
    function box($box_title = '', $box_text = '', $box_icon = 'bag', $box_link = '')
    {
        return view('default/components/widgets/card', [
            'box_title' => $box_title,
            'box_text' => $box_text,
            'box_icon' => $box_icon,
            'box_link' => $box_link
        ]);
    }
}
