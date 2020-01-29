<?php

    class Database {
        
        //DB Params
        private $host = 'mysql:host=localhost;dbname=userRegistration;port=8889';
        private $username = 'root';
        private $password = 'root';

        //DB Connect
        public function connect(){

            try {

                $db = new PDO($this->host, $this->username, $this->password);

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {
                echo "Connection Error: " . $e->getMessage();
            }

            return $db;
        }
    }