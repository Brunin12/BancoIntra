<?php
if (!function_exists('tableCard')) {
    function tableCard($cardTitle = '', $tableContent = '', $paginationLinks = '')
    {
        return view('default/components/cards/table_card', [
            'cardTitle' => $cardTitle,
            'tableContent' => $tableContent,
            'paginationLinks' => $paginationLinks
        ]);
    }
}
