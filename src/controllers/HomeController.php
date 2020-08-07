<?php

    class HomeController {

        public function index() {
            
            try{
                $postsCollections = Post::getAllPost();

                $loader = new \Twig\Loader\FilesystemLoader('../src/views');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('home.php');
                $params = [];
                $params['posts'] = $postsCollections;
                $content = $template->render($params);

                echo $content;
                
            }catch(Exception $e) {
                echo $e->getMessage();
            }
                        
        }        

    }

?>