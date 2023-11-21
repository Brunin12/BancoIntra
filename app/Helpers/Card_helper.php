<?php
if (!function_exists('card')) {
    function card($card_title = '', $card_text = '', $card_links = '')
    {
        return view('default/components/widgets/card', [
            'card_title' => $card_title,
            'card_text' => $card_text,
            'card_links' => $card_links
        ]);
    }
}
