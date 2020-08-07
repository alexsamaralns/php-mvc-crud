<?php

    class Post {

        public static function getAllPost() {

            $conn = Connection::getConn();
            $sql = "SELECT * FROM posts ORDER BY id DESC";
            $sql = $conn->prepare($sql);
            $sql->execute();
            $result = [];

            while($row = $sql->fetchObject('Post')) {
                $result[] = $row;
            }

            if(empty($result)) {
                throw new Exception("There's nothing here!");
            }

            return $result;

        }

        public static function getPostById($id) {

            $conn = Connection::getConn();
            $sql = "SELECT id, title, subtitle, content FROM posts WHERE id = :id";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':id', $id, PDO::PARAM_INT);
            $sql->execute();
            $result = $sql->fetchObject('Post'); 

            if(empty($result)) {
                throw new Exception("There's nothing here!");
            }else {
                $result->comments = Comments::selectComments($result->id);                
            }

            return $result;

        }

        public static function insert($params) {

            if(empty($params['title']) || empty($params['subtitle']) || empty($params['content'])) {
                throw new Exception("There are sapaces to write!");
                return false;
            }                

            $conn = Connection::getConn();
            $sql = "INSERT INTO posts (title, subtitle, content) VALUES(:title, :subtitle, :content)";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':title', $params['title']);
            $sql->bindValue(':subtitle', $params['subtitle']);
            $sql->bindValue(':content', $params['content']);
            $result = $sql->execute();

            if($result == 0) {
                throw new Exception("Fail to save post!");
                return false;
            }

            return true;

        }

        public static function update($params) {

            if(empty($params['title']) || empty($params['subtitle']) || empty($params['content'])) {
                throw new Exception("There are sapaces to write!");
                return false;
            }

            $conn = Connection::getConn();
            $sql = "UPDATE posts SET title = :title, subtitle = :subtitle, content = :content WHERE id = :id";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':id', $params['id']);
            $sql->bindValue(':title', $params['title']);
            $sql->bindValue(':subtitle', $params['subtitle']);
            $sql->bindValue(':content', $params['content']);
            $result = $sql->execute();

            if($result == 0) {
                throw new Exception("Fail to edit post!");
                return false;
            }

            return true;

        }

        public static function delete($id) {

            if($id == '' || $id == null) {
                throw new Exception("Error while deleting!");
                return false;
            }

            $conn = Connection::getConn();
            $sql = "DELETE FROM posts WHERE id = :id";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            return true;

        }

    }

?>