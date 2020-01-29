<?php

    include_once "Database.php";

    class User extends Database {

        //Register new user
        public function register($email, $password){

            $db = parent::connect();

            //Create query
            $query = $db->prepare('INSERT INTO users (email, password) 
                VALUES (:email, :password)');

            $query->bindValue(":email", $email);
            $query->bindValue(":password", $password);

            //Execute query
            if($query->execute()){
                return true;
            } else {

                printf("Error %s.\n", $stmt->error);

                return false;
            }
        }

        public function login($email, $password){

            $db = parent::connect();

            //Create query
            $query = $db->prepare('SELECT * FROM users WHERE email = :email, AND password = :password');

            $query->bindValue(":email", $email);
            $query->bindValue(":password", $password);


            //Execute query
            if($query->execute()){

                $data = $query->fetch();
                session_start();
                $_SESSION['email'] = $data['email'];
                return true;
            } else {

                printf("Error %s.\n", $stmt->error);
                return false;
            }



        }




    }