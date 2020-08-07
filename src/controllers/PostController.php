<?php

    class PostController {

        public function index($params) {
            
            try{
                
                $post = Post::getPostById($params);

                $loader = new \Twig\Loader\FilesystemLoader('../src/views');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('single.php');
                $params = [];
                $params['id'] = $post->id;
                $params['title'] = $post->title;
                $params['subtitle'] = $post->subtitle;
                $params['content'] = $post->content;
                $params['comments'] = $post->comments;
                $content = $template->render($params);

                echo $content;
                
            }catch(Exception $e) {
                echo $e->getMessage();
            }
                        
        } 
        
        public function sendComment() {

            try {
                var_dump($_POST);
                Comments::insertComment($_POST);
                header('Location: index.php?page=post&id=' . $_POST['id']);
            }catch (Exception $e) {
                echo '<script>alert("' . $e->getMessage() . '");</script>';
                echo '<script>location.href="index.php?page=post&id=' . $_POST['id'] . '";</script>';
            }

        }

    }

?>