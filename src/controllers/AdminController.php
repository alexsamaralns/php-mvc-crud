<?php

    class AdminController {

        public function index() {
            
            $loader = new \Twig\Loader\FilesystemLoader('../src/views');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('admin.php');
            $objPosts = Post::getAllPost();
            $params = [];
            $params['posts'] = $objPosts;
            $content = $template->render($params);

            echo $content;                
                        
        }   
        
        public function create() {
            
            $loader = new \Twig\Loader\FilesystemLoader('../src/views');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('create.php');
            $params = [];
            $content = $template->render($params);

            echo $content;

        }

        public function insert() {
            
            try {
                Post::insert($_POST);
                echo '<script>alert("Post insert with success!");</script>';
                echo '<script>location.href="index.php?page=admin&method=index";</script>';
            }catch (Exception $e) {
                echo '<script>alert("' . $e->getMessage() . '");</script>';
                echo '<script>location.href="index.php?page=admin&method=create";</script>';
            }            

        }

        public function change($id) {

            $loader = new \Twig\Loader\FilesystemLoader('../src/views');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('update.php');
            $post = Post::getPostById($id);
            $params = [];
            $params['id'] = $post->id;
            $params['title'] = $post->title;
            $params['subtitle'] = $post->subtitle;
            $params['content'] = $post->content;
            $content = $template->render($params);

            echo $content;

        }

        public function update() {

            try {
                Post::update($_POST);
                echo '<script>alert("Post edited with success!");</script>';
                echo '<script>location.href="index.php?page=admin&method=index";</script>';
            }catch (Exception $e) {
                echo '<script>alert("' . $e->getMessage() . '");</script>';
                echo '<script>location.href="index.php?page=admin&method=change&id=' . $_POST['id'] . '";</script>';
            }

        }

        public function delete($id) {

            try {
                Post::delete($id);
                echo '<script>alert("Post deleted with success!");</script>';
                echo '<script>location.href="index.php?page=admin&method=index";</script>';
            }catch (Exception $e) {
                echo '<script>alert("' . $e->getMessage() . '");</script>';
                echo '<script>location.href="index.php?page=admin&method=index";</script>';
            }

        }

    }

?>