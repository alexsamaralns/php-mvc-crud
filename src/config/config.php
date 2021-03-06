<?php

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

    // Pastas
    define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
    define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
    define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
    define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
    define('CORE_PATH', realpath(dirname(__FILE__) . '/../core'));

    // Arquivos
    require_once('../public/vendor/autoload.php');
    require_once(realpath(dirname(__FILE__) . '/database.php'));
    //require_once(realpath(dirname(__FILE__) . '/loader.php'));
    //require_once(realpath(dirname(__FILE__) . '/session.php'));
    //require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
    //require_once(realpath(dirname(__FILE__) . '/utils.php'));
    require_once(realpath(CORE_PATH . '/Core.php'));
    require_once(realpath(CONTROLLER_PATH . '/HomeController.php'));
    require_once(realpath(CONTROLLER_PATH . '/PostController.php'));
    require_once(realpath(CONTROLLER_PATH . '/AboutController.php'));
    require_once(realpath(CONTROLLER_PATH . '/AdminController.php'));
    require_once(realpath(CONTROLLER_PATH . '/ErrorController.php'));
    require_once(realpath(MODEL_PATH . '/Post.php'));
    require_once(realpath(MODEL_PATH . '/Comments.php'));
    //require_once(realpath(MODEL_PATH . '/Model.php'));
    //require_once(realpath(MODEL_PATH . '/User.php'));
    //require_once(realpath(MODEL_PATH . '/WorkingHours.php'));
    //require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
    //require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));

?>