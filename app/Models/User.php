<?php


class User{
    public function __construct(
        private PDO $conn
    )
    {

        
    }
    public function add(
        string $username,
        string $email,
        string $password
    ):bool{
        return false;
    }
}