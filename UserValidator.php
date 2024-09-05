<?php

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        $pattern = '/^[a-zA-Z]+@[a-z]+\.[a-z]{2}+/';
        return preg_match($pattern, $email);
    }

    public function validatePassword(string $password): bool
    {
        $lowercasePregMatch = preg_match('/[a-z]/', $password);
        $uppercasePregMatch2 = preg_match('/[A-Z]/', $password);
        $digitsPregMatch = preg_match('/[0-9]/', $password);
        $specialCharsPregMatch = preg_match('/\W/', $password);

        if (strlen($password) > 7 && $lowercasePregMatch && $digitsPregMatch && $specialCharsPregMatch && $uppercasePregMatch2) {
            return true;
        }

        return false;
    }
}