<?php

    ini_set('display_errors', 1);

    require_once('vendor/autoload.php');
    require_once(dirname(__DIR__) . '/src/config/config.php');
    $template = file_get_contents(TEMPLATE_PATH . '/structure.php');

    ob_start();
        $core = new Core;
        $core->start($_GET);
        $out = ob_get_contents();
    ob_end_clean(); 
    
    $tplReady = str_replace('{{dynamic_area}}', $out, $template);

    echo $tplReady;

?>