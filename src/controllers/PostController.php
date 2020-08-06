<?php

    class PostController {

        public function index($params) {
            
            try{
                
                $post = Post::getPostById($params);

                $loader = new \Twig\Loader\FilesystemLoader('../src/views');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('single.php');
                $params = [];
                $params['title'] = $post->title;
                $params['subtitle'] = $post->subtitle;
                $params['content'] = $post->content;
                $content = $template->render($params);

                echo $content;
                
            }catch(Exception $e) {
                echo $e->getMessage();
            }
                        
        }        

    }

?>