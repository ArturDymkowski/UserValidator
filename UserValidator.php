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
        $pattern = '/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}/';
        return preg_match($pattern, $password);
    }
}