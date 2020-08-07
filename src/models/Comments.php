<?php

    class Comments {

        public static function selectComments($idPost) {

            $conn = Connection::getConn();

            $sql = "SELECT * FROM comments WHERE id_post = :idPost";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':idPost', $idPost, PDO::PARAM_INT);
            $sql->execute();
            $result = [];

            while($row = $sql->fetchObject('Comments')) {
                $result[] = $row;
            }

            return $result;

        }

        public static function insertComment($params) {

            $conn = Connection::getConn();

            $sql = "INSERT INTO comments(name, message, id_post) VALUES(:name, :message, :id_post)";
            $sql = $conn->prepare($sql);
            $sql->bindValue(':name', $params['name']);
            $sql->bindValue(':message', $params['comment']);
            $sql->bindValue(':id_post', $params['id']);
            $sql->execute();

            if($sql->rowCount()) {
                return true;
            }

            throw new Exception("Fail to send comment!");

        }

    }

?>