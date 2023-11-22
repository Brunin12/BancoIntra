<?php
if (!function_exists('box')) {
    function box($box_title = '', $box_text = '', $box_icon = 'bag', $box_color = 'info', $box_link = '')
    {
        return view('default/components/widgets/box', [
            'box_title' => $box_title,
            'box_text' => $box_text,
            'box_icon' => $box_icon,
            'box_color' => $box_color,
            'box_link' => $box_link
        ]);
    }
}
?>
