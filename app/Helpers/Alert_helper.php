<?php
if (!function_exists('alert')) {
    function alert($alert_title = '', $alert_text = '', $alert_class = 'primary')
    {
        return view('default/components/widgets/card', [
            'alert_title' => $alert_title,
            'alert_text' => $alert_text,
            'alert_class' => $alert_class
        ]);
    }
}
