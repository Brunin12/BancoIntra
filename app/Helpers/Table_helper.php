<?php
if (!function_exists('table')) {
    function table($cardTitle = '', $tableContent = '', $paginationLinks = '')
    {
        return view('default/components/widgets/table', [
            'cardTitle' => $cardTitle,
            'tableContent' => $tableContent,
            'paginationLinks' => $paginationLinks
        ]);
    }
}
