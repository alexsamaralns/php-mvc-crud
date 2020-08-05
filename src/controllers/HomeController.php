<?php

    class HomeController {

        public function index() {
            
            try{
                $postsCollections = Post::getAllPost();
            }catch(Exception $e) {
                echo $e->getMessage();
            }
                        
        }        

    }

?>