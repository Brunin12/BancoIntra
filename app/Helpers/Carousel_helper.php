<?php
if (!function_exists('carousel')) {
    function carousel($slides = [])
    {
        return view('default/components/widgets/carousel', ['slides' => $slides]);
    }
}
