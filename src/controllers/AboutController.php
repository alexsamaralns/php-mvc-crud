<?php

    class AboutController {

        public function index() {
            
            $loader = new \Twig\Loader\FilesystemLoader('../src/views');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('about.php');
            $params = [];
            $content = $template->render($params);

            echo $content;                
                        
        }        

    }

?>