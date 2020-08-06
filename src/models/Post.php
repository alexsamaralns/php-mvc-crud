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
            $sql = "SELECT title, subtitle, content FROM posts WHERE id = :id";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':id', $id, PDO::PARAM_INT);
            $sql->execute();
            $result = $sql->fetchObject('Post');

            if(empty($result)) {
                throw new Exception("There's nothing here!");
            }

            return $result;

        }

    }

?>