<?php

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        $pattern = '/^[a-z]+@[a-z]+.[a-z]{2}+/';
        return preg_match($pattern, $email);
    }

    public function validatePassword(string $password): bool
    {

    }
}