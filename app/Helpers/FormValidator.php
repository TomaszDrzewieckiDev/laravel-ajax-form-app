<?php
namespace App\Helpers;

use Exception;

class FormValidator
{

    public function isValidName($name)
    {
        if (strlen($name) <= 100) {
            return true;
        } else {
            throw new Exception('Pole: Imie i Nazwisko - Za długi wpis');
        }
    }

    public function isValidTelephone($telephone)
    {
        if (is_int($telephone)) {
            return true;
        } else {
            throw new Exception('Pole: Telefon - Akceptowane tylko cyfry');
        }
    }

    public function isValidEmail($email)
    {
        if (preg_match("/^[a-zA-Z-' ]*$/",$email)) {
            return true;
        } else {
            throw new Exception('Pole: Email - Wpisz poprawnie email');
        }
    }

    public function isValidContenet($content)
    {
        if (strlen($content) <= 500) {
            return true;
        } else {
            throw new Exception('Pole: Treść - Za długi wpis');
        }
    }

    public function isValidFile($file)
    {
        if (strlen($file) <= 500) {
            return true;
        } else {
            throw new Exception('Pole: Treść - Za długi wpis');
        }
    }
}
