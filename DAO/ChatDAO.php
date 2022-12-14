<?php

    namespace DAO;

    use Models\Chat;

    class ChatDAO {

        private $connection;

        public function add(Chat $chat) {
            $query = "CALL chats_add(?, ?, ?)";

            $parameters['idUserOwner_']= $chat->getIdUserOwner();
            $parameters['idUserKeeper_']= $chat->getIdUserKeeper();
            $parameters['status_'] = $chat->getStatus();

            try {
                $this->connection = Connection::getInstance();
                $this->connection->ExecuteNonQuery($query, $parameters, QueryType::StoredProcedure);
            } catch(\PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function getAll() {
            $chatList = array();
            $query = "CALL chats_getAll()";

            try {
                $this->connection = Connection::GetInstance();
                $result = $this->connection->Execute($query, array(), QueryType::StoredProcedure);

                foreach($result as $row) {
                    $chat = new Chat();
                    $chat->setId($row["id"]);
                    $chat->setIdUserKeeper($row["idUserKeeper"]);
                    $chat->setIdUserOwner($row["idUserOwner"]);
                    $chat->setStatus($row["status"]);

                    array_push($chatList, $chat);
                }

                return $chatList;
            }
            catch(\PDOException $ex) {
                echo $ex->getMessage();
            }
            return null;
        }

        public function getByIds($idUserOwner, $idUserKeeper) {
            $query = "CALL chats_getByIds(?, ?)";

            $parameters["idUserOwner_"]= $idUserOwner;
            $parameters["idUserKeeper_"]= $idUserKeeper;

            try {
                $this->connection = Connection::GetInstance();
                return $this->connection->Execute($query, $parameters, QueryType::StoredProcedure);
            }
            catch(\PDOException $ex) {
                echo $ex->getMessage();
            }

            return null;
        }

        public function getById($id) {
            $chatList=$this->getAll();
            foreach($chatList as $chat) {
                if($chat->getId() == $id)
                    return $chat;
            }

            return null;
        }

        public function getChatsForOwner($idUserOwner) {
            $query = "CALL chats_getForOwner(?)";

            $parameters["idUserOwner_"] = $idUserOwner;

            try {
                $this->Connection = Connection::GetInstance();
                return $this->Connection->Execute($query, $parameters, QueryType::StoredProcedure);
            }
            catch(\PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function getChatsForKeeper($idUserKeeper) {
            $query = "CALL chats_getForKeeper(?)";

            $parameters["idUserKeeper_"] = $idUserKeeper;

            try {
                $this->connection = Connection::GetInstance();
                return $this->connection->Execute($query, $parameters, QueryType::StoredProcedure);
            }
            catch(\PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function modifyStatus($idChat, $status)
        {
            $query = "CALL chats_modify_status(?, ?)";

            $parameters["idChat"] = $idChat;
            $parameters["status_"] = $status;

            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters, QueryType::StoredProcedure);
            }
            catch(\PDOException $ex){
                echo $ex->getMessage();
            }

        }
    }