<?php
$head_data = [
    'title' => $title
];
$_head = view('default/components/layout/_head', $head_data);
$_preloader = view('default/components/layout/_preloader');
$_navbar = view('default/components/layout/_navbar');
$_sidebar = view('default/components/layout/_sidebar', ['active_menu' => $active_menu, 'active_page' => $active_page]);
$_footer = view('default/components/layout/_footer');
$_js = view('default/components/layout/_js');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= isset($_head) ? $_head : '' ?>
    <?= isset($css) ? $css : '' ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= isset($_preloader) ? $_preloader : '' ?>
        <?= isset($_navbar) ? $_navbar : '' ?>
        <?= isset($_sidebar) ? $_sidebar : '' ?>

        
        <div class="content-wrapper">
            
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <?= isset($title) ? $title : '' ?>
                                
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a><?= isset($active_menu) ? $active_menu : 'Páginas' ?></a></li>
                                <li class="breadcrumb-item active">
                                    <?= isset($active_page) ? $active_page : '' ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            

            
            <div class="content">
                <div class="container-fluid">
                    <?= isset($content) ? $content : '' ?>
                </div>
            </div>
            
        </div>
        

        
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        

        <?= isset($_footer) ? $_footer : '' ?>
    </div>
    

    
    <?= isset($_js) ? $_js : '' ?>
    <?= isset($js) ? $js : '' ?>
</body>

</html>
