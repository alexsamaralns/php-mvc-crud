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

    }

?>