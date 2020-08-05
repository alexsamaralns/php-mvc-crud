<?php

    class Core {

        public function start($urlGet) {
            
            $action = 'index';
            if(isset($_GET['page'])) {
                $controller = ucfirst($urlGet['page'].'Controller');
            }else {
                $controller = 'HomeController';
            }            

            if(!class_exists($controller)) {
                $controller = 'ErrorController';
            }

            call_user_func_array(array(new $controller, $action), array());

        }

    }

?>